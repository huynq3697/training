<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Products') ?></li>
        <li><?= $this->Html->link(__('List'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Add'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="articles form large-9 medium-8 columns content">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Add Product') ?></legend>
        <?php
            echo $this->Form->control('name', ['type' => 'text']);
            echo $this->Form->control('price', ['type' => 'number']);
            echo $this->Form->control('quantity', ['type' => 'number']);
            echo $this->Form->control('body', ['type' => 'textarea']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>