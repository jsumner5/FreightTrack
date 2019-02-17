<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contact[]|\Cake\Collection\CollectionInterface $Contacts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Add Contact'), ['action' => 'add']) ?></li>

    </ul>
</nav>
<div class="Contacts index large-9 medium-8 columns content">
    <h3 class="mobile-hide"><?= __('Contacts') ?></h3>

    <?php 
    echo $this->Form->create('',['type'=>'get']);
    echo $this->Form->control('keyword',['label'=>'Search Contacts']);
?>

    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col" class="mobile-font-small"><?= $this->Paginator->sort('Name') ?></th>
                <th scope="col" class="mobile-hide"><?= $this->Paginator->sort('Details') ?></th>
  

                <th scope="col" class="actions mobile-width-5 mobile-font-small"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Contacts as $Contact): ?>
            <tr <?php if($Contact->Factorable == 'No'){echo ('class = "row-grey-force"');} ?>  > 
                <td class="mobile-font-small font-size-8"><?= h($Contact->Name) ?></td>
                <td class="mobile-hide"><?= h($Contact->Details) ?></td>

                <td class="actions mobile-font-small">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $Contact->ContactID]) ?>
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
