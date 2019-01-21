<?php
namespace App\Controller;
use Cake\I18n\Time;
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
        $keyword = $this->request->query('keyword');
        
        if(! empty($keyword)){
            $query = 'CompanyID in (SELECT CompanyID  from Companies where Name LIKE  %'.$keyword.'%)';

            $this->paginate = ['conditions' => [
                'OR' => [
                    'LoadNumber LIKE' => '%'.$keyword.'%',
                    'Driver LIKE' => '%'.$keyword.'%' ,
                    'Dispatcher LIKE' => '%'.$keyword.'%' ,
                    'Rate LIKE' => '%'.$keyword.'%' 
                ]
                ]
                        ];

        }
        
        $loads = $this->paginate($this->Loads,[
            'contain' => 'companies',
            'order' => ['LoadID desc'],
            'limit' => 35
            ]
            
            );

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
            'contain' => ['companies']
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

        $load->DateCreated  = $this->getTimeStamp();

        $this->setLoadDropdownOptions();

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
        $this->setLoadDropdownOptions();

        $load = $this->Loads->get($id, [
            'contain' => ['companies']
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

    public function report()
    {
       // $keyword = $this->request->query('keyword');
        
      //  if(! empty($keyword)){
         //   $query = 'CompanyID in (SELECT CompanyID  from Companies where Name LIKE  %'.$keyword.'%)';

            $now = Time::now();

            $this->paginate = ['conditions' => [
                'OR' => [
                    'Loads.DateCreated >' => $now->subDays(1),
                ]]
                        ];

     //   }
        
        $loads = $this->paginate($this->Loads,[
            'contain' => 'companies',
            'order' => ['LoadID desc'],
            'limit' => 35
            ]
            
            );

       // $this->set(compact('loads'));
     //   $rateSum = $loads->find();
       // $this->set(compact('rateSum', 240));

    }


    public function setLoadDropdownOptions(){

        $paymentMethodOptions = [
            'Cash' => 'Cash',
            'Check' => 'Check',
            'Factor' => 'Factor',
            'QuickPay' => 'QuickPay',
        ];

        $statusOptions = [
            'Booked' => 'Booked', 'Invoiced' => 'Invoiced', 
            'Paid' => 'Paid', 'Collections'=> 'Collections',
            'Dispatched' => 'Dispatched', 'Dropped' => 'Dropped',
            'Invoiced' => 'Invoiced'
        ];
        $driverOptions = [
            'Derrick' => 'Derrick',
            'Justin' => 'Justin',
            'Grant' => 'Grant',
            'Jan Austin' => 'Jan Austin',
            'Patrick' => 'Patrick',
            'Marquez' => 'Marquez',
            'Independent Dispatched' => 'Independent Dispatch',
            'Select' => 'Select'
        ];

        $companiesC = new CompaniesController();

        $this->set('companies', $companiesC->Companies->find('list',['fields'=>['Name','CompanyID'], 'order' => 'Name']));
        $this->set('paymentMethodOptions', $paymentMethodOptions);
        $this->set('dispatcherOptions', ['Devarus Lynch'=>'Devarus Lynch','Aaron Starkey' => 'Aaron Starkey', 'Jerold Sumner' => 'Jerold Sumner','Select' => 'Select'
        ]);
        $this->set('statusOptions', $statusOptions);
        $this->set('driverOptions', $driverOptions);
    }

}
