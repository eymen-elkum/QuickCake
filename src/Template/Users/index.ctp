<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('New User'), ['action' => 'add']); ?></li>
    </ul>
<?php $this->end(); ?>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
                        <th><?= $this->Paginator->sort('id'); ?></th>
                        <th><?= $this->Paginator->sort('username'); ?></th>
                        <th><?= $this->Paginator->sort('email'); ?></th>
                        <th><?= $this->Paginator->sort('email_token'); ?></th>
                        <th><?= $this->Paginator->sort('email_verified'); ?></th>
                        <th><?= $this->Paginator->sort('email_token_expires'); ?></th>
                        <th><?= $this->Paginator->sort('active'); ?></th>
                        <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
        <tr>
                        <td><?= h($user->id) ?></td>
                                    <td><?= h($user->username) ?></td>
                                    <td><?= h($user->email) ?></td>
                                    <td><?= h($user->email_token) ?></td>
                                    <td><?= h($user->email_verified) ?></td>
                                    <td><?= h($user->email_token_expires) ?></td>
                                    <td><?= h($user->active) ?></td>
                                    <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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