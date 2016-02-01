<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Block Property Value'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="blockPropertyValues index large-9 medium-8 columns content">
    <h3><?= __('Block Property Values') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('block_properties_id') ?></th>
                <th><?= $this->Paginator->sort('products_id') ?></th>
                <th><?= $this->Paginator->sort('value') ?></th>
                <th><?= $this->Paginator->sort('value_type') ?></th>
                <th><?= $this->Paginator->sort('value_enum') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($blockPropertyValues as $blockPropertyValue): ?>
            <tr>
                <td><?= $this->Number->format($blockPropertyValue->id) ?></td>
                <td><?= $this->Number->format($blockPropertyValue->block_properties_id) ?></td>
                <td><?= $this->Number->format($blockPropertyValue->products_id) ?></td>
                <td><?= h($blockPropertyValue->value) ?></td>
                <td><?= h($blockPropertyValue->value_type) ?></td>
                <td><?= $this->Number->format($blockPropertyValue->value_enum) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $blockPropertyValue->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $blockPropertyValue->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $blockPropertyValue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blockPropertyValue->id)]) ?>
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
