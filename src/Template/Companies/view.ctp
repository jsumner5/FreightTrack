<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company $company
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Company'), ['action' => 'edit', $company->CompanyID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Company'), ['action' => 'delete', $company->CompanyID], ['confirm' => __('Are you sure you want to delete # {0}?', $company->CompanyID)]) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="companies view large-9 medium-8 columns content">
    <h3><?= h($company->CompanyID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($company->Name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Factorable') ?></th>
            <td><?= h($company->Factorable) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($company->Email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Notes') ?></th>
            <td><?= h($company->Notes) ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($company->Address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Created') ?></th>
            <td><?= h($company->DateCreated) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Modified') ?></th>
            <td><?= h($company->Date_odified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Modified By') ?></th>
            <td><?= h($company->LastModifiedBy) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($company->Phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MCNumber') ?></th>
            <td><?= $this->Number->format($company->MCNumber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Loads') ?></th>
            <td><?= $this->Number->format($company->Loads) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Record ID') ?></th>
            <td><?= $this->Number->format($company->CompanyID) ?></td>
        </tr>
    </table>
</div>
