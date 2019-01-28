<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Load $load
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Load'), ['action' => 'edit', $load->LoadID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Load'), ['action' => 'delete', $load->LoadID], ['confirm' => __('Are you sure you want to delete # {0}?', $load->LoadID)]) ?> </li>
        <li><?= $this->Html->link(__('List Loads'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Load'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="loads view large-9 medium-8 columns content">
    <h3><?= h($load->LoadID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Company Name') ?></th>
            <td><?= h($load->CompanyName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($load->Status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Load Number') ?></th>
            <td><?= h($load->LoadNumber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DriverID') ?></th>
            <td><?= h($load->DriverID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rate') ?></th>
            <td><?= h($load->Rate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Method') ?></th>
            <td><?= h($load->LoadNumber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dispatcher') ?></th>
            <td><?= h($load->Dispatcher) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Created') ?></th>
            <td><?= h($load->DateCreated) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pick Up Address') ?></th>
            <td><?= h($load->PickUpAddress) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery Address') ?></th>
            <td><?= h($load->DeliveryAddress) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comments') ?></th>
            <td><?= h($load->Comments) ?></td>
        </tr>
    </table>
</div>
