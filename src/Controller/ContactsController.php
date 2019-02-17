<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Contacts Controller
 *
 * @property \App\Model\Table\ContactsTable $Contacts
 *
 * @method \App\Model\Entity\Contact[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContactsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        
        $keyword = $this->request->query('keyword');
        
        if(! empty($keyword)){
            $this->paginate = ['conditions' => [
                'OR' => [
                    'Name LIKE ' => '%'.$keyword.'%',
                    'Details Like' => '%'.$keyword.'%'
                ],
                ]];
        }

        //echo $this->Paginator->sort('user_id', null, ['direction' => 'asc', 'lock' => true]);

        $Contacts = $this->paginate($this->Contacts,[ 'sort' => 'ContactID', 'limit'=>35, 'direction'=>'desc']);

        $this->set(compact('Contacts'));

            
          //  $Contacts = $this->paginate($this->request)
            // if ($this->Contacts->save($Contact)) {
            //     $this->Flash->success(__('The Contact has been saved.'));

            //     return $this->redirect(['action' => 'index']);
            // }
            // $this->Flash->error(__('The Contact could not be saved. Please, try again.'));
       // }
    }

    /**
     * View method
     *
     * @param string|null $id Contact id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $Contact = $this->Contacts->get($id, [
          //  'contain' => ['loads']
        ]);
          //  debug($Contact);
        $this->set('Contact', $Contact);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $Contact = $this->Contacts->newEntity();

        $Contact->DateCreated  = $this->getTimeStamp();

        if ($this->request->is('post')) {
            debug($this->request->data);
            $Contact = $this->Contacts->patchEntity($Contact, $this->request->getData());
            if ($this->Contacts->save($Contact)) {
                $this->Flash->success(__('The Contact has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The Contact could not be saved. Please, try again.'));
        }
        $this->set(compact('Contact'));
        $this->setFactorOptions();
    }

    /**
     * Edit method
     *
     * @param string|null $id Contact id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $Contact = $this->Contacts->get($id,[]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $Contact = $this->Contacts->patchEntity($Contact, $this->request->getData());
            if ($this->Contacts->save($Contact)) {
                $this->Flash->success(__('The Contact has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The Contact could not be saved. Please, try again.'));
        }
        $this->set(compact('Contact'));
        $this ->setFactorOptions();
    }

    /**
     * Delete method
     *
     * @param string|null $id Contact id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $Contact = $this->Contacts->get($id);
        if ($this->Contacts->delete($Contact)) {
            $this->Flash->success(__('The Contact has been deleted.'));
        } else {
            $this->Flash->error(__('The Contact could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function setFactorOptions(){
        $this->set('factorOptions',['Yes'=> 'Yes', 'No' => 'No']);

    }
}
