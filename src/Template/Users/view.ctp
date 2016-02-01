<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List User Groups'), ['controller' => 'UserGroups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User Group'), ['controller' => 'UserGroups', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Baskets'), ['controller' => 'Baskets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Basket'), ['controller' => 'Baskets', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Last Name') ?></th>
            <td><?= h($user->last_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('User Group') ?></th>
            <td><?= $user->has('user_group') ? $this->Html->link($user->user_group->title, ['controller' => 'UserGroups', 'action' => 'view', $user->user_group->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Baskets') ?></h4>
        <?php if (!empty($user->baskets)): ?>
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
            <?php foreach ($user->baskets as $baskets): ?>
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
