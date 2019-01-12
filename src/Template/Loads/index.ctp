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
                <th scope="col" ><?= $this->Paginator->sort('CompanyName', ['label'=>'Name']) ?></th>
                <th scope="col" class="hide-mobile"><?= $this->Paginator->sort('Status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('LoadNumber',['label' => 'Load #']) ?></th>
                <th scope="col" class="hide-mobile"><?= $this->Paginator->sort('Driver') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Rate') ?></th>
                <th scope="col" class="hide-mobile"><?= $this->Paginator->sort('PaymentMethod', ['label' => 'Pay Method']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('Dispatcher') ?></th>
                <th scope="col" class="hide-mobile"><?= $this->Paginator->sort('DateCreated', ['label'=> 'Created']) ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($loads as $load): ?>
            <tr>
                <td><?= h($load->Companies['Name'])?></td>
                <td class="hide-mobile"><?= h($load->Status) ?></td>
                <td><?= h($load->LoadNumber) ?></td>
                <td class="hide-mobile"><?= h($load->Driver) ?></td>
                <td><?= h($load->Rate) ?></td>
                <td class="hide-mobile"><?= h($load->PaymentMethod)?></td>
                <td><?= h($load->Dispatcher) ?></td>
                <td class="hide-mobile"><?= h($load->DateCreated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $load->LoadID]) ?>
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
