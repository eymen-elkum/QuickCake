<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('Yeni Item'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('Kategori\'ler Listesi'), ['controller' => 'Categories', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('Yeni Kategori'), ['controller' => ' Categories', 'action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('Photos Listesi'), ['controller' => 'Photos', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('Yeni Photo'), ['controller' => ' Photos', 'action' => 'add']); ?></li>
</ul>
<?php $this->end(); ?>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
    <tr>
        <th><?= $this->Paginator->sort('id'); ?></th>
        <th><?= $this->Paginator->sort('category_id'); ?></th>
        <th><?= $this->Paginator->sort('title'); ?></th>
        <th><?= $this->Paginator->sort('photo'); ?></th>
        <th class="actions"><?= __('Actions'); ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($contents as $content): ?>
        <tr>
            <td><?= $this->Number->format($content->id) ?></td>
            <td>
                <?= $content->has('category') ? $this->Html->link($content->category->title, ['controller' => 'Categories', 'action' => 'view', $content->category->id]) : '' ?>
            </td>
            <td><?= h($content->title) ?></td>
            <td><?= $this->Html->image("/files/contents/photo/{$content->photo_dir}/60_{$content->photo}", ['class' => 'img-thumbnail']) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['controller' => 'photos', 'action' => 'index', $content->id], ['title' => __('Geleri'), 'class' => 'btn btn-default glyphicon glyphicon-picture']) ?>
                <?= $this->Html->link('', ['action' => 'view', $content->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $content->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $content->id], ['confirm' => __('Are you sure you want to delete # {0}?', $content->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator text-center">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>