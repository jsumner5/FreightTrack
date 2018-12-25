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
    <?= $this->Form->create($load) ?>
    <fieldset>
        <legend><?= __('Add Load') ?></legend>
        <?php
                // dropdown options
            echo $this->Form->control('Company_Name',
            [
                'type' => 'select',
                'options' => $companyOptions
            ]);

            echo $this->Form->control('Status', 
                ['type'=>'select',
                 'options'=> $statusOptions,
                 'default' => 'Booked',
                 'label' => 'Load Status']);

            echo $this->Form->control('Load_Number');
            echo $this->Form->control('Driver');
            echo $this->Form->control('Rate');
            echo $this->Form->control('Payment_Method',[
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
            echo $this->Form->control('Date_Modified');          
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
