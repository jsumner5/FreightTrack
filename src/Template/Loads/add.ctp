<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Load $load
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Loads'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="loads form large-9 medium-8 columns content">
    <?= $this->Form->create($load ,['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Load') ?></legend>
        <?php
                // dropdown options
            echo $this->Form->control('CompanyID',
            [
                'type' => 'select',
                'options' => $companies,
                'label' => 'Company'
            ]);

            echo $this->Form->control('Status', 
                ['type'=>'select',
                 'options'=> $statusOptions,
                 'default' => 'Booked',
                 'label' => 'Load Status']);

            echo $this->Form->control('LoadNumber');
            echo $this->Form->control('Driver',[
                'type' => 'select',
                'options' => $driverOptions,
                'default' => 'Select'
            ]);
            echo $this->Form->control('Rate');
            echo $this->Form->control('PaymentMethod',[
                'type'=>'Select',
                'options'=> $paymentMethodOptions,
                'default' => 'Factor'
            ]);
            echo $this->Form->control('Dispatcher',[
                'type'=> 'select',
                'options'=>$dispatcherOptions,
                'default'=>'Select'
            ]);
            echo $this->Form->control('PickUpAddress');
            echo $this->Form->control('DeliveryAddress');
            echo $this->Form->input('Comments');
            echo $this->Form->input('rate_attachment', ['type' => 'file']);
            echo $this->Form->input('bol_attachment', ['type' => 'file']);


        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
   
    <?= $this->Form->end() ?>
</div>


