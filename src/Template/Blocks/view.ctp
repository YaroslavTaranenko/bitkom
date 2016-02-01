<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Block'), ['action' => 'edit', $block->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Block'), ['action' => 'delete', $block->id], ['confirm' => __('Are you sure you want to delete # {0}?', $block->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Blocks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Block'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Blocks'), ['controller' => 'Blocks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Block'), ['controller' => 'Blocks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Block Properties'), ['controller' => 'BlockProperties', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Block Property'), ['controller' => 'BlockProperties', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="blocks view large-9 medium-8 columns content">
    <h3><?= h($block->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($block->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Alias') ?></th>
            <td><?= h($block->alias) ?></td>
        </tr>
        <tr>
            <th><?= __('Sort') ?></th>
            <td><?= h($block->sort) ?></td>
        </tr>
        <tr>
            <th><?= __('Sort Dir') ?></th>
            <td><?= h($block->sort_dir) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($block->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Block Id') ?></th>
            <td><?= $this->Number->format($block->block_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Sort Ord') ?></th>
            <td><?= $this->Number->format($block->sort_ord) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($block->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Blocks') ?></h4>
        <?php if (!empty($block->blocks)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Block Id') ?></th>
                <th><?= __('Title') ?></th>
                <th><?= __('Alias') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Sort') ?></th>
                <th><?= __('Sort Dir') ?></th>
                <th><?= __('Sort Ord') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($block->blocks as $blocks): ?>
            <tr>
                <td><?= h($blocks->id) ?></td>
                <td><?= h($blocks->block_id) ?></td>
                <td><?= h($blocks->title) ?></td>
                <td><?= h($blocks->alias) ?></td>
                <td><?= h($blocks->description) ?></td>
                <td><?= h($blocks->sort) ?></td>
                <td><?= h($blocks->sort_dir) ?></td>
                <td><?= h($blocks->sort_ord) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Blocks', 'action' => 'view', $blocks->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Blocks', 'action' => 'edit', $blocks->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Blocks', 'action' => 'delete', $blocks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blocks->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Block Properties') ?></h4>
        <?php if (!empty($block->block_properties)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Block Id') ?></th>
                <th><?= __('Title') ?></th>
                <th><?= __('Code') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Value Enum') ?></th>
                <th><?= __('Block Propertiescol') ?></th>
                <th><?= __('Searchable') ?></th>
                <th><?= __('Is Required') ?></th>
                <th><?= __('Filterable') ?></th>
                <th><?= __('Sort') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($block->block_properties as $blockProperties): ?>
            <tr>
                <td><?= h($blockProperties->id) ?></td>
                <td><?= h($blockProperties->block_id) ?></td>
                <td><?= h($blockProperties->title) ?></td>
                <td><?= h($blockProperties->code) ?></td>
                <td><?= h($blockProperties->description) ?></td>
                <td><?= h($blockProperties->value_enum) ?></td>
                <td><?= h($blockProperties->block_propertiescol) ?></td>
                <td><?= h($blockProperties->searchable) ?></td>
                <td><?= h($blockProperties->is_required) ?></td>
                <td><?= h($blockProperties->filterable) ?></td>
                <td><?= h($blockProperties->sort) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'BlockProperties', 'action' => 'view', $blockProperties->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'BlockProperties', 'action' => 'edit', $blockProperties->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'BlockProperties', 'action' => 'delete', $blockProperties->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blockProperties->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Products') ?></h4>
        <?php if (!empty($block->products)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Block Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Title') ?></th>
                <th><?= __('Alias') ?></th>
                <th><?= __('Short') ?></th>
                <th><?= __('Full') ?></th>
                <th><?= __('Sort') ?></th>
                <th><?= __('Created By') ?></th>
                <th><?= __('Modified By') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($block->products as $products): ?>
            <tr>
                <td><?= h($products->id) ?></td>
                <td><?= h($products->block_id) ?></td>
                <td><?= h($products->created) ?></td>
                <td><?= h($products->modified) ?></td>
                <td><?= h($products->title) ?></td>
                <td><?= h($products->alias) ?></td>
                <td><?= h($products->short) ?></td>
                <td><?= h($products->full) ?></td>
                <td><?= h($products->sort) ?></td>
                <td><?= h($products->created_by) ?></td>
                <td><?= h($products->modified_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
