<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Block Property'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Blocks'), ['controller' => 'Blocks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Block'), ['controller' => 'Blocks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="blockProperties index large-9 medium-8 columns content">
    <h3><?= __('Block Properties') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('block_id') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('code') ?></th>
                <th><?= $this->Paginator->sort('description') ?></th>
                <th><?= $this->Paginator->sort('value_enum') ?></th>
                <th><?= $this->Paginator->sort('block_propertiescol') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($blockProperties as $blockProperty): ?>
            <tr>
                <td><?= $this->Number->format($blockProperty->id) ?></td>
                <td><?= $blockProperty->has('block') ? $this->Html->link($blockProperty->block->title, ['controller' => 'Blocks', 'action' => 'view', $blockProperty->block->id]) : '' ?></td>
                <td><?= h($blockProperty->title) ?></td>
                <td><?= h($blockProperty->code) ?></td>
                <td><?= h($blockProperty->description) ?></td>
                <td><?= $this->Number->format($blockProperty->value_enum) ?></td>
                <td><?= h($blockProperty->block_propertiescol) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $blockProperty->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $blockProperty->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $blockProperty->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blockProperty->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
