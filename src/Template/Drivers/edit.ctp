<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Driver $driver
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $driver->Record_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $driver->Record_ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Drivers'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="drivers form large-9 medium-8 columns content">
    <?= $this->Form->create($driver) ?>
    <fieldset>
        <legend><?= __('Edit Driver') ?></legend>
        <?php
            echo $this->Form->control('First_Name');
            echo $this->Form->control('Last_Name');
            echo $this->Form->control('Phone_Number');
            echo $this->Form->control('Email');
            echo $this->Form->control('Date_Created');
            echo $this->Form->control('Date_Modified');
            echo $this->Form->control('Record_Owner');
            echo $this->Form->control('Last_Modified_By');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
