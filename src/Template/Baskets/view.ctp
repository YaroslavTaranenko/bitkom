<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Basket'), ['action' => 'edit', $basket->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Basket'), ['action' => 'delete', $basket->id], ['confirm' => __('Are you sure you want to delete # {0}?', $basket->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Baskets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Basket'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Product Prices'), ['controller' => 'ProductPrices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product Price'), ['controller' => 'ProductPrices', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="baskets view large-9 medium-8 columns content">
    <h3><?= h($basket->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $basket->has('user') ? $this->Html->link($basket->user->name, ['controller' => 'Users', 'action' => 'view', $basket->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Product') ?></th>
            <td><?= $basket->has('product') ? $this->Html->link($basket->product->title, ['controller' => 'Products', 'action' => 'view', $basket->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Product Price') ?></th>
            <td><?= $basket->has('product_price') ? $this->Html->link($basket->product_price->id, ['controller' => 'ProductPrices', 'action' => 'view', $basket->product_price->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Curency') ?></th>
            <td><?= h($basket->curency) ?></td>
        </tr>
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($basket->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Detail Url') ?></th>
            <td><?= h($basket->detail_url) ?></td>
        </tr>
        <tr>
            <th><?= __('Measure') ?></th>
            <td><?= h($basket->measure) ?></td>
        </tr>
        <tr>
            <th><?= __('Order') ?></th>
            <td><?= $basket->has('order') ? $this->Html->link($basket->order->id, ['controller' => 'Orders', 'action' => 'view', $basket->order->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($basket->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Price') ?></th>
            <td><?= $this->Number->format($basket->price) ?></td>
        </tr>
        <tr>
            <th><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($basket->quantity) ?></td>
        </tr>
        <tr>
            <th><?= __('Discount') ?></th>
            <td><?= $this->Number->format($basket->discount) ?></td>
        </tr>
        <tr>
            <th><?= __('Date Insert') ?></th>
            <td><?= h($basket->date_insert) ?></td>
        </tr>
        <tr>
            <th><?= __('Date Update') ?></th>
            <td><?= h($basket->date_update) ?></td>
        </tr>
    </table>
</div>
