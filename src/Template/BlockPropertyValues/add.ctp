<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Block Property Values'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="blockPropertyValues form large-9 medium-8 columns content">
    <?= $this->Form->create($blockPropertyValue) ?>
    <fieldset>
        <legend><?= __('Add Block Property Value') ?></legend>
        <?php
            echo $this->Form->input('block_properties_id');
            echo $this->Form->input('products_id');
            echo $this->Form->input('value');
            echo $this->Form->input('value_type');
            echo $this->Form->input('value_enum');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
