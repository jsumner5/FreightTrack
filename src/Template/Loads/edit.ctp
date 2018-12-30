<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Load $load
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $load->LoadID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $load->LoadID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Loads'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="loads form large-9 medium-8 columns content">
    <?= $this->Form->create($load) ?>
    <fieldset>
        <legend><?= __('Edit Load Number: '.$load->LoadNumber) ?></legend>
        <?php
                  

                    echo $this->Form->control('Company_ID',[
                        'type'=>'select',
                        'options'=>$companies
                        ]);


        
                    echo $this->Form->control('Status', 
                        ['type'=>'select',
                         'options'=> $statusOptions,
                         'default' => 'Booked',
                         'label' => 'Load Status']);
        
                    echo $this->Form->control('LoadNumber');
                    echo $this->Form->control('Driver');
                    echo $this->Form->control('Rate');
                    echo $this->Form->control('PaymentMethod',[
                        'type'=>'Select',
                        'options'=> $paymentMethodOptions,
                        'default' => 'Factor'
                    ]);
                    echo $this->Form->control('Dispacther',[
                        'type'=> 'select',
                        'options'=>$dispatcherOptions,
                        'default'=>'blank'
                    ]);
                    echo $this->Form->control('Date_Created');
                    echo $this->Form->control('Pick_Up_Address');
                    echo $this->Form->control('Delivery_Address');
                    echo $this->Form->control('Comments');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
