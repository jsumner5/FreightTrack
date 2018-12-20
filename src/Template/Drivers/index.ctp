<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Driver[]|\Cake\Collection\CollectionInterface $drivers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Driver'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="drivers index large-9 medium-8 columns content">
    <h3><?= __('Drivers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('First_Name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Last_Name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Phone_Number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Date_Created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Date_Modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Record_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Record_Owner') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Last_Modified_By') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($drivers as $driver): ?>
            <tr>
                <td><?= h($driver->First_Name) ?></td>
                <td><?= h($driver->Last_Name) ?></td>
                <td><?= h($driver->Phone_Number) ?></td>
                <td><?= h($driver->Email) ?></td>
                <td><?= h($driver->Date_Created) ?></td>
                <td><?= h($driver->Date_Modified) ?></td>
                <td><?= $this->Number->format($driver->Record_ID) ?></td>
                <td><?= h($driver->Record_Owner) ?></td>
                <td><?= h($driver->Last_Modified_By) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $driver->Record_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $driver->Record_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $driver->Record_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $driver->Record_ID)]) ?>
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
