<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Product Price'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Groups'), ['controller' => 'UserGroups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Group'), ['controller' => 'UserGroups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Baskets'), ['controller' => 'Baskets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Basket'), ['controller' => 'Baskets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="productPrices index large-9 medium-8 columns content">
    <h3><?= __('Product Prices') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('product_id') ?></th>
                <th><?= $this->Paginator->sort('group_id') ?></th>
                <th><?= $this->Paginator->sort('value') ?></th>
                <th><?= $this->Paginator->sort('curency') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productPrices as $productPrice): ?>
            <tr>
                <td><?= $this->Number->format($productPrice->id) ?></td>
                <td><?= $productPrice->has('product') ? $this->Html->link($productPrice->product->title, ['controller' => 'Products', 'action' => 'view', $productPrice->product->id]) : '' ?></td>
                <td><?= $productPrice->has('user_group') ? $this->Html->link($productPrice->user_group->title, ['controller' => 'UserGroups', 'action' => 'view', $productPrice->user_group->id]) : '' ?></td>
                <td><?= $this->Number->format($productPrice->value) ?></td>
                <td><?= h($productPrice->curency) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $productPrice->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $productPrice->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $productPrice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productPrice->id)]) ?>
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
