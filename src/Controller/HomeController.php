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
class HomeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $loadsController = new LoadsController();

        $loads = $loadsController->Loads->find('all',
            [
                'contain'=>'companies',
                'conditions' => ['Companies.DateCreated >' => '12-21-2018']
            ]
        );
        $this->paginate($loads,  ['sort' => 'DateCreated']);
       // ->where(['DateCreated >' =>   Time::now()])
        ; 

        $total = $loads ->find('all')->select(['sum'=>$loads->func()->sum('Rate')]);

        
       // debug($loads);

        $this->set(compact('loads'));
    }




}
