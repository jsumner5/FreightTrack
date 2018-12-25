<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company $company
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $company->Record_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $company->Record_ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="companies form large-9 medium-8 columns content">
    <?= $this->Form->create($company) ?>
    <fieldset>
        <legend><?= __('Edit '.$company->Name) ?></legend>
        <?php
                    echo $this->Form->control('Name');
                    echo $this->Form->control('MCNumber');
                    echo $this->Form->control('Factorable');
                    echo $this->Form->control('Notes');
                    echo $this->Form->control('Address');
                    echo $this->Form->control('Phone');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
