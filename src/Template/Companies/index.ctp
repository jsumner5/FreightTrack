<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company[]|\Cake\Collection\CollectionInterface $companies
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Add Company'), ['action' => 'add']) ?></li>

    </ul>
</nav>
<div class="companies index large-9 medium-8 columns content">
    <h3 class="mobile-hide"><?= __('Companies') ?></h3>

    <?php 
    echo $this->Form->create('',['type'=>'get']);
    echo $this->Form->control('keyword',['label'=>'Search companies']);
?>

    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col" class="mobile-font-small"><?= $this->Paginator->sort('Name') ?></th>
                <th scope="col" class="mobile-hide"><?= $this->Paginator->sort('MCNumber') ?></th>
                <th scope="col" class="mobile-hide"><?= $this->Paginator->sort('Factorable') ?></th>
                <th scope="col" class="mobile-hide"><?= $this->Paginator->sort('DateCreated') ?></th>
                <th scope="col" class="actions mobile-width-5 mobile-font-small"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($companies as $company): ?>
            <tr>
                <td class="mobile-font-small"><?= h($company->Name) ?></td>
                <td class="mobile-hide"><?= h($company->MCNumber) ?></td>
                <td class="mobile-hide"><?= h($company->Factorable) ?></td>
                <td class="mobile-hide"><?= h($company->DateCreated) ?></td>
                <td class="actions mobile-font-small">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $company->CompanyID]) ?>
                    <!-- move delete to the edit page -->
                    <!-- $this->Form->postLink(__('Delete'), ['action' => 'delete', $company->CompanyID], ['confirm' => __('Are you sure you want to delete # {0}?', $company->CompanyID)]) ?> -->
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
