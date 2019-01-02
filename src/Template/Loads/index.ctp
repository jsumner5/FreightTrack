<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Load[]|\Cake\Collection\CollectionInterface $loads
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Load'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="loads index large-9 medium-8 columns content">
    <h3><?= __('Loads') ?></h3>

    <?php 
    echo $this->Form->create('',['type'=>'get']);
    echo $this->Form->control('keyword',['label' => 'Search loads']);
?>

    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
            <!-- need to sort these by date created  and also populate that on load creation and throw a search on there -->
                <th scope="col"><?= $this->Paginator->sort('CompanyName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('LoadNumber') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Driver') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Rate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('PaymentMethod') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Dispacther') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DateCreated') ?></th>

                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($loads as $load): ?>
            <tr>
                <td><?= h($load->Companies['Name'])?></td>
                <td><?= h($load->Status) ?></td>
                <td><?= h($load->LoadNumber) ?></td>
                <td><?= h($load->Driver) ?></td>
                <td><?= h($load->Rate) ?></td>
                <td><?= h($load->PaymentMethod)?></td>
                <td><?= h($load->Dispacther) ?></td>
                <td><?= h($load->DateCreated) ?></td>

                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $load->LoadID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $load->LoadID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $load->LoadID], ['confirm' => __('Are you sure you want to delete # {0}?', $load->LoadID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
