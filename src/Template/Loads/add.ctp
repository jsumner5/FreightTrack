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
                $statusOptions = [
                    'Booked' => 'Booked', 'Invoiced' => 'Invoiced', 
                    'Paid' => 'Paid', 'Collections'=> 'Collections'
                ];




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
            echo $this->Form->control('Payment_Method');
            echo $this->Form->control('Dispacther');
            echo $this->Form->control('Date_Created');
            echo $this->Form->control('Pick_Up_Address');
            echo $this->Form->control('Delivery_Address');
            echo $this->Form->control('Comments');
            echo $this->Form->control('Bill_Of_Lading');
            echo $this->Form->control('Company_Address_City');
            echo $this->Form->control('Company_Address_StateRegion');
            echo $this->Form->control('Company_Address_Street_1');
            echo $this->Form->control('Company_Date_Created');
            echo $this->Form->control('Company_MCNumber');
            echo $this->Form->control('Date_Modified');

            echo $this->Form->control('Last_Modified_By');
          
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
