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
            echo $this->Form->control('Company_Name');
            echo $this->Form->control('Status');
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
            echo $this->Form->control('Delivery_Address_City');
            echo $this->Form->control('Delivery_Address_Country');
            echo $this->Form->control('Delivery_Address_Postal_Code');
            echo $this->Form->control('Delivery_Address_StateRegion');
            echo $this->Form->control('Delivery_Address_Street_1');
            echo $this->Form->control('Delivery_Address_Street_2');
            echo $this->Form->control('Destination_City_Name');
            echo $this->Form->control('Destination_State');
            echo $this->Form->control('GenerateInvoice');
            echo $this->Form->control('Last_Modified_By');
            echo $this->Form->control('Pick_Up_Address_City');
            echo $this->Form->control('Pick_Up_Address_Country');
            echo $this->Form->control('Pick_Up_Address_Postal_Code');
            echo $this->Form->control('Pick_Up_Address_StateRegion');
            echo $this->Form->control('Pick_Up_Address_Street_1');
            echo $this->Form->control('Pick_Up_Address_Street_2');
            echo $this->Form->control('Pick_Up_City_Name');
            echo $this->Form->control('Pick_Up_State');
            echo $this->Form->control('Rate_Confirmation');
            echo $this->Form->control('Record_Owner');
            echo $this->Form->control('Related_Company');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
