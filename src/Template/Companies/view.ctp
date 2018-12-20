<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company $company
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Company'), ['action' => 'edit', $company->Record_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Company'), ['action' => 'delete', $company->Record_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $company->Record_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="companies view large-9 medium-8 columns content">
    <h3><?= h($company->Record_ID) ?></h3>
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
            <th scope="row"><?= __('Add Load') ?></th>
            <td><?= h($company->Add_Load) ?></td>
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
            <th scope="row"><?= __('Address City') ?></th>
            <td><?= h($company->Address_City) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address Country') ?></th>
            <td><?= h($company->Address_Country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address Postal Code') ?></th>
            <td><?= h($company->Address_Postal_Code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address StateRegion') ?></th>
            <td><?= h($company->Address_StateRegion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address Street 1') ?></th>
            <td><?= h($company->Address_Street_1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address Street 2') ?></th>
            <td><?= h($company->Address_Street_2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Created') ?></th>
            <td><?= h($company->Date_Created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Modified') ?></th>
            <td><?= h($company->Date_Modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Modified By') ?></th>
            <td><?= h($company->Last_Modified_By) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($company->Phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Record Owner') ?></th>
            <td><?= h($company->Record_Owner) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MCNumber') ?></th>
            <td><?= $this->Number->format($company->MCNumber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __(' Of Loads') ?></th>
            <td><?= $this->Number->format($company->_of_Loads) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Loads') ?></th>
            <td><?= $this->Number->format($company->Loads) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Record ID') ?></th>
            <td><?= $this->Number->format($company->Record_ID) ?></td>
        </tr>
    </table>
</div>
