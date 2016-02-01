<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Order'), ['action' => 'edit', $order->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Baskets'), ['controller' => 'Baskets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Basket'), ['controller' => 'Baskets', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="orders view large-9 medium-8 columns content">
    <h3><?= h($order->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($order->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Baskets') ?></h4>
        <?php if (!empty($order->baskets)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Product Id') ?></th>
                <th><?= __('Product Price Id') ?></th>
                <th><?= __('Price') ?></th>
                <th><?= __('Curency') ?></th>
                <th><?= __('Date Insert') ?></th>
                <th><?= __('Date Update') ?></th>
                <th><?= __('Quantity') ?></th>
                <th><?= __('Title') ?></th>
                <th><?= __('Detail Url') ?></th>
                <th><?= __('Discount') ?></th>
                <th><?= __('Measure') ?></th>
                <th><?= __('Order Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($order->baskets as $baskets): ?>
            <tr>
                <td><?= h($baskets->id) ?></td>
                <td><?= h($baskets->user_id) ?></td>
                <td><?= h($baskets->product_id) ?></td>
                <td><?= h($baskets->product_price_id) ?></td>
                <td><?= h($baskets->price) ?></td>
                <td><?= h($baskets->curency) ?></td>
                <td><?= h($baskets->date_insert) ?></td>
                <td><?= h($baskets->date_update) ?></td>
                <td><?= h($baskets->quantity) ?></td>
                <td><?= h($baskets->title) ?></td>
                <td><?= h($baskets->detail_url) ?></td>
                <td><?= h($baskets->discount) ?></td>
                <td><?= h($baskets->measure) ?></td>
                <td><?= h($baskets->order_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Baskets', 'action' => 'view', $baskets->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Baskets', 'action' => 'edit', $baskets->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Baskets', 'action' => 'delete', $baskets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $baskets->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
