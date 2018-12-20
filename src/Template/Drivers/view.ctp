<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Driver $driver
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Driver'), ['action' => 'edit', $driver->Record_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Driver'), ['action' => 'delete', $driver->Record_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $driver->Record_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Drivers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Driver'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="drivers view large-9 medium-8 columns content">
    <h3><?= h($driver->Record_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($driver->First_Name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($driver->Last_Name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Number') ?></th>
            <td><?= h($driver->Phone_Number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($driver->Email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Created') ?></th>
            <td><?= h($driver->Date_Created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Modified') ?></th>
            <td><?= h($driver->Date_Modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Record Owner') ?></th>
            <td><?= h($driver->Record_Owner) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Modified By') ?></th>
            <td><?= h($driver->Last_Modified_By) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Record ID') ?></th>
            <td><?= $this->Number->format($driver->Record_ID) ?></td>
        </tr>
    </table>
</div>
