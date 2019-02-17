<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contact $Contact
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $Contact->ContactID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $Contact->ContactID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="companies form large-9 medium-8 columns content">
    <?= $this->Form->create($Contact) ?>
    <fieldset>
        <legend><?= __('Edit '.$Contact->Name) ?></legend>
        <?php
                    echo $this->Form->control('Name',['type'=>'text']);
                    echo $this->Form->control('Details',['type'=>'textarea']);
                  
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
