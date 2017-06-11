<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Negocios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Lugares'), ['controller' => 'Lugares', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lugare'), ['controller' => 'Lugares', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="negocios form large-9 medium-8 columns content">
    <?= $this->Form->create($negocio) ?>
    <fieldset>
        <legend><?= __('Add Negocio') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('telefono');
            echo $this->Form->control('direccion');
            echo $this->Form->control('descripcion');
            echo $this->Form->control('lugares_id', ['options' => $lugares]);
            echo $this->Form->control('perfilfb');
            echo $this->Form->control('email');
            echo $this->Form->control('users_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
