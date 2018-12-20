<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Loads Controller
 *
 * @property \App\Model\Table\LoadsTable $Loads
 *
 * @method \App\Model\Entity\Load[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LoadsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $loads = $this->paginate($this->Loads);

        $this->set(compact('loads'));
    }

    /**
     * View method
     *
     * @param string|null $id Load id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $load = $this->Loads->get($id, [
            'contain' => []
        ]);

        $this->set('load', $load);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $load = $this->Loads->newEntity();
        if ($this->request->is('post')) {
            $load = $this->Loads->patchEntity($load, $this->request->getData());
            if ($this->Loads->save($load)) {
                $this->Flash->success(__('The load has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The load could not be saved. Please, try again.'));
        }
        $this->set(compact('load'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Load id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $load = $this->Loads->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $load = $this->Loads->patchEntity($load, $this->request->getData());
            if ($this->Loads->save($load)) {
                $this->Flash->success(__('The load has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The load could not be saved. Please, try again.'));
        }
        $this->set(compact('load'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Load id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $load = $this->Loads->get($id);
        if ($this->Loads->delete($load)) {
            $this->Flash->success(__('The load has been deleted.'));
        } else {
            $this->Flash->error(__('The load could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
