<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Basket'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Product Prices'), ['controller' => 'ProductPrices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product Price'), ['controller' => 'ProductPrices', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="baskets index large-9 medium-8 columns content">
    <h3><?= __('Baskets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('product_id') ?></th>
                <th><?= $this->Paginator->sort('product_price_id') ?></th>
                <th><?= $this->Paginator->sort('price') ?></th>
                <th><?= $this->Paginator->sort('curency') ?></th>
                <th><?= $this->Paginator->sort('date_insert') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($baskets as $basket): ?>
            <tr>
                <td><?= $this->Number->format($basket->id) ?></td>
                <td><?= $basket->has('user') ? $this->Html->link($basket->user->name, ['controller' => 'Users', 'action' => 'view', $basket->user->id]) : '' ?></td>
                <td><?= $basket->has('product') ? $this->Html->link($basket->product->title, ['controller' => 'Products', 'action' => 'view', $basket->product->id]) : '' ?></td>
                <td><?= $basket->has('product_price') ? $this->Html->link($basket->product_price->id, ['controller' => 'ProductPrices', 'action' => 'view', $basket->product_price->id]) : '' ?></td>
                <td><?= $this->Number->format($basket->price) ?></td>
                <td><?= h($basket->curency) ?></td>
                <td><?= h($basket->date_insert) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $basket->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $basket->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $basket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $basket->id)]) ?>
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
