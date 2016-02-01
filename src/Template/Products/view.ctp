<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Blocks'), ['controller' => 'Blocks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Block'), ['controller' => 'Blocks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Baskets'), ['controller' => 'Baskets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Basket'), ['controller' => 'Baskets', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Product Prices'), ['controller' => 'ProductPrices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product Price'), ['controller' => 'ProductPrices', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Block') ?></th>
            <td><?= $product->has('block') ? $this->Html->link($product->block->title, ['controller' => 'Blocks', 'action' => 'view', $product->block->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($product->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Alias') ?></th>
            <td><?= h($product->alias) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Sort') ?></th>
            <td><?= $this->Number->format($product->sort) ?></td>
        </tr>
        <tr>
            <th><?= __('Created By') ?></th>
            <td><?= $this->Number->format($product->created_by) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($product->modified_by) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($product->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($product->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Short') ?></h4>
        <?= $this->Text->autoParagraph(h($product->short)); ?>
    </div>
    <div class="row">
        <h4><?= __('Full') ?></h4>
        <?= $this->Text->autoParagraph(h($product->full)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Baskets') ?></h4>
        <?php if (!empty($product->baskets)): ?>
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
            <?php foreach ($product->baskets as $baskets): ?>
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
    <div class="related">
        <h4><?= __('Related Product Prices') ?></h4>
        <?php if (!empty($product->product_prices)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Product Id') ?></th>
                <th><?= __('Group Id') ?></th>
                <th><?= __('Value') ?></th>
                <th><?= __('Curency') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->product_prices as $productPrices): ?>
            <tr>
                <td><?= h($productPrices->id) ?></td>
                <td><?= h($productPrices->product_id) ?></td>
                <td><?= h($productPrices->group_id) ?></td>
                <td><?= h($productPrices->value) ?></td>
                <td><?= h($productPrices->curency) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ProductPrices', 'action' => 'view', $productPrices->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ProductPrices', 'action' => 'edit', $productPrices->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProductPrices', 'action' => 'delete', $productPrices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productPrices->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
