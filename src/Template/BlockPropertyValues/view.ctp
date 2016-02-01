<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Block Property Value'), ['action' => 'edit', $blockPropertyValue->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Block Property Value'), ['action' => 'delete', $blockPropertyValue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blockPropertyValue->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Block Property Values'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Block Property Value'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="blockPropertyValues view large-9 medium-8 columns content">
    <h3><?= h($blockPropertyValue->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Value') ?></th>
            <td><?= h($blockPropertyValue->value) ?></td>
        </tr>
        <tr>
            <th><?= __('Value Type') ?></th>
            <td><?= h($blockPropertyValue->value_type) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($blockPropertyValue->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Block Properties Id') ?></th>
            <td><?= $this->Number->format($blockPropertyValue->block_properties_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Products Id') ?></th>
            <td><?= $this->Number->format($blockPropertyValue->products_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Value Enum') ?></th>
            <td><?= $this->Number->format($blockPropertyValue->value_enum) ?></td>
        </tr>
    </table>
</div>
