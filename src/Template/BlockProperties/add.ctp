<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Block Properties'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Blocks'), ['controller' => 'Blocks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Block'), ['controller' => 'Blocks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="blockProperties form large-9 medium-8 columns content">
    <?= $this->Form->create($blockProperty) ?>
    <fieldset>
        <legend><?= __('Add Block Property') ?></legend>
        <?php
            echo $this->Form->input('block_id', ['options' => $blocks]);
            echo $this->Form->input('title');
            echo $this->Form->input('code');
            echo $this->Form->input('description');
            echo $this->Form->input('value_enum');
            echo $this->Form->input('block_propertiescol');
            echo $this->Form->input('searchable');
            echo $this->Form->input('is_required');
            echo $this->Form->input('filterable');
            echo $this->Form->input('sort');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
