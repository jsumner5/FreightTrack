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
                    'Drivers.FirstName LIKE' => '%'.$keyword.'%' ,
                    'Dispatcher LIKE' => '%'.$keyword.'%' ,
                    'Loads.Rate LIKE' => '%'.$keyword.'%' ,
                    'Companies.Name LIKE' => '%'.$keyword.'%'
                ]
                ]
                        ];

        }
        
        $loads = $this->paginate($this->Loads,[
            'contain' => ['companies','drivers'],
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
        $this->setLoadDropdownOptions('edit');

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

    public function report(string $report)
    {
        $keyword = $this->request->query('keyword');
        
        $this->paginate = $this->getReport($report);

        $loads = $this->paginate($this->Loads,[
            'contain' => 'companies',
            'order' => ['LoadID desc'],
            'limit' => 35
            ]
            );


            if(! empty($keyword)){
 
                $query = 'CompanyID in (SELECT CompanyID  from Companies where Name LIKE  %'.$keyword.'%)';
     
                $loads = $this->paginate($this->Loads,[
                    'contain' => 'companies',
                    'order' => ['LoadID desc'],
                    'conditions' => [
                        'OR' => [
                            'LoadNumber LIKE' => '%'.$keyword.'%',
                            'Dispatcher LIKE' => '%'.$keyword.'%' ,
                            'Loads.Rate LIKE' => '%'.$keyword.'%' ,
                            'Companies.Name LIKE' => '%'.$keyword.'%'
                        ]
                        ]]
                );
            }

        $this->set(compact('loads'));
        $rateSum = 0;
        $calculatedGross = 0;

        foreach($loads as $load){
            $rateSum = $rateSum + $load->Rate;
            $calculatedGross = $calculatedGross + (($load['Companies']['Rate']/100) * $load->Rate);
        }
        $this->set(compact('rateSum', $rateSum));
        $this->set(compact('calculatedGross', $calculatedGross));

    }

    public function getReport(string $reportName){
        $now = Time::now();

        switch (strtolower($reportName)) {

            case 'today':
            $this->set('reportName', 'Today');
            return ['conditions' => [
                    'OR' => [
                        'Loads.DateCreated >=' => $now,
                    ]]];
                break;

            case 'lastweek':
            $this->set('reportName', 'Last  Week');

                  return ['conditions' => [
                    'OR' => [
                        'Loads.DateCreated >=' => $now->subDays(7),
                    ]]];
                break;

            case 'lastmonth':
            $this->set('reportName', 'Last  Month');

                return ['conditions' => [
                    'OR' => [
                        'Loads.DateCreated >=' => $now->subDays(30),
                    ]]];
                break;
              
            case 'notpaid':
            $this->set('reportName', 'Not Paid');

                return ['conditions' => [
                    'OR' => [
                        'Loads.Status !=' => 'Paid',
                    ]]];
                break;

                case 'payroll':
            $this->set('reportName', 'Payroll');

                return ['conditions' => [
                    'OR' => [
                        'Loads.Status !=' => 'Paid',
                    ]]];
                break;
                         
        }
    }


    public function setLoadDropdownOptions($mode = 'add'){
        $mode = strtolower($mode);
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

        $companiesC = new CompaniesController();
        $driversC = new DriversController();

        if($mode == 'add'){
            $params = $companiesC->Companies->find('list',
            [
                'fields'=>['Name','CompanyID'], 'order' => 'Name',
                'conditions' => ['Companies.Factorable =' => 'Yes'],
                'order'=> ['Companies.Name' => 'ASC']
            
            ]);
        }else{// default case
            $params = $companiesC->Companies->find('list',
            [
                'fields'=>['Name','CompanyID'], 'order' => 'Name',
                'order'=> ['Companies.Name' => 'ASC']           
            ]);
        } 

        $this->set('companies', $params);

        $this->set('driverOptions', $driversC->Drivers->find('list',['fields'=>['FirstName', 'DriverID']]));
        $this->set('paymentMethodOptions', $paymentMethodOptions);
        $this->set('dispatcherOptions', ['Devarus Lynch'=>'Devarus Lynch','Aaron Starkey' => 'Aaron Starkey', 'Jerold Sumner' => 'Jerold Sumner','Select' => 'Select']);
        $this->set('statusOptions', $statusOptions);
    }

}
