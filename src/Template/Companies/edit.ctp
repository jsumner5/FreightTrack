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
                ['action' => 'delete', $company->CompanyID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $company->CompanyID)]
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
                    echo $this->Form->control('Factorable', ['label' => 'Active']);
                    echo $this->Form->control('Email');
                    echo $this->Form->control('Phone');
                    echo $this->Form->input('Notes', ['type'=>'textarea']);
                    echo $this->Form->control('Address');
                    
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
