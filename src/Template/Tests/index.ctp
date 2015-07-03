<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('Yeni Test'), ['action' => 'add']); ?></li>
</ul>
<?php $this->end(); ?>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
    <tr>
        <th><?= $this->Paginator->sort('id'); ?></th>
        <th><?= $this->Paginator->sort('title'); ?></th>
        <th><?= $this->Paginator->sort('photo'); ?></th>
        <th><?= $this->Paginator->sort('photo_dir'); ?></th>
        <th><?= $this->Paginator->sort('parent_id'); ?></th>
        <th><?= $this->Paginator->sort('lft'); ?></th>
        <th><?= $this->Paginator->sort('rght'); ?></th>
        <th class="actions"><?= __('Actions'); ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($tests as $test): ?>
        <tr>
            <td><?= $this->Number->format($test->id) ?></td>
            <td><?= h($test->title) ?></td>
            <td><?= h($test->photo) ?></td>
            <td><?= h($test->photo_dir) ?></td>
            <td><?= $this->Number->format($test->parent_id) ?></td>
            <td><?= $this->Number->format($test->lft) ?></td>
            <td><?= $this->Number->format($test->rght) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $test->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $test->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $test->id], ['confirm' => __('Are you sure you want to delete # {0}?', $test->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>