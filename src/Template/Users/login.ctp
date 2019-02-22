<?php
/**
 * @var \<%= $namespace %>\View\AppView $this
 */
?>
<div class="<%= $pluralVar %> form col-xs-12">
<?= $this->Flash->render('auth') ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your email and password') ?></legend>
        <?= $this->Form->control('username') ?>
        <?= $this->Form->control('password') ?>
    </fieldset>
    <?= $this->Form->button(__('Login')); ?>
    <?= $this->Form->end() ?>
    <?php

echo $this->Html->image('http://apponice.com/img/logo2.png', ['alt' => 'CakePHP','class'=>'ft-logo']);


?>
</div>


<style>
.ft-logo{
    width:25em;
    margin:auto;
    display:block;
}
</style>