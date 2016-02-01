<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Block Property'), ['action' => 'edit', $blockProperty->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Block Property'), ['action' => 'delete', $blockProperty->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blockProperty->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Block Properties'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Block Property'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Blocks'), ['controller' => 'Blocks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Block'), ['controller' => 'Blocks', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="blockProperties view large-9 medium-8 columns content">
    <h3><?= h($blockProperty->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Block') ?></th>
            <td><?= $blockProperty->has('block') ? $this->Html->link($blockProperty->block->title, ['controller' => 'Blocks', 'action' => 'view', $blockProperty->block->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($blockProperty->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Code') ?></th>
            <td><?= h($blockProperty->code) ?></td>
        </tr>
        <tr>
            <th><?= __('Description') ?></th>
            <td><?= h($blockProperty->description) ?></td>
        </tr>
        <tr>
            <th><?= __('Block Propertiescol') ?></th>
            <td><?= h($blockProperty->block_propertiescol) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($blockProperty->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Value Enum') ?></th>
            <td><?= $this->Number->format($blockProperty->value_enum) ?></td>
        </tr>
        <tr>
            <th><?= __('Sort') ?></th>
            <td><?= $this->Number->format($blockProperty->sort) ?></td>
        </tr>
        <tr>
            <th><?= __('Searchable') ?></th>
            <td><?= $blockProperty->searchable ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Is Required') ?></th>
            <td><?= $blockProperty->is_required ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Filterable') ?></th>
            <td><?= $blockProperty->filterable ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>
