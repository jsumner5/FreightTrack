<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company $company
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="companies form large-9 medium-8 columns content">
    <?= $this->Form->create($company) ?>
    <fieldset>
        <legend><?= __('Add Company') ?></legend>
        <?php
            echo $this->Form->control('Name');
            echo $this->Form->control('MCNumber');
            echo $this->Form->control('Factorable');
            echo $this->Form->control('_of_Loads');
            echo $this->Form->control('Add_Load');
            echo $this->Form->control('Notes');
            echo $this->Form->control('Address');
            echo $this->Form->control('Address_City');
            echo $this->Form->control('Address_Country');
            echo $this->Form->control('Address_Postal_Code');
            echo $this->Form->control('Address_StateRegion');
            echo $this->Form->control('Address_Street_1');
            echo $this->Form->control('Address_Street_2');
            echo $this->Form->control('Date_Created');
            echo $this->Form->control('Date_Modified');
            echo $this->Form->control('Last_Modified_By');
            echo $this->Form->control('Loads');
            echo $this->Form->control('Phone');
            echo $this->Form->control('Record_Owner');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
