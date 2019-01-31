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
                <th scope="col" class="mobile-font-small"><?= $this->Paginator->sort('FirstName') ?></th>
                <th scope="col" class="mobile-hide"><?= $this->Paginator->sort('LastName') ?></th>
                <th scope="col" class="mobile-font-small"><?= $this->Paginator->sort('PhoneNumber') ?></th>
                <th scope="col" class="mobile-hide" ><?= $this->Paginator->sort('Email') ?></th>
                <th scope="col" class="mobile-hide"><?= $this->Paginator->sort('DateCreated') ?></th>

                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($drivers as $driver): ?>
            <tr>
                <td><?= h($driver->FirstName) ?></td>
                <td class="mobile-hide"><?= h($driver->LastName) ?></td>
                <td class="mobile-font-small"><?= h($driver->PhoneNumber) ?></td>
                <td class="mobile-hide"><?= h($driver->Email) ?></td>
                <td class="mobile-hide"><?= h($driver->DateCreated) ?></td>
                <td class="actions" class="mobile-font-small">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $driver->DriverID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $driver->DriverID]) ?>
                     <!-- $this->Form->postLink(__('Delete'), ['action' => 'delete', $driver->DriverID], ['confirm' => __('Are you sure you want to delete # {0}?', $driver->DriverID)])  -->
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
        <p class='mobile-center-paginator'><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
