<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userGroup->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userGroup->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List User Groups'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="userGroups form large-9 medium-8 columns content">
    <?= $this->Form->create($userGroup) ?>
    <fieldset>
        <legend><?= __('Edit User Group') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('code');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
