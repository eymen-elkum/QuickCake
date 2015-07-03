<?php
$this->Icon->loadAssists();
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('Yeni Kategori'), ['action' => 'add']); ?></li>
    <li><?= $this->Html->link(__('Item\'ler Listesi'), ['controller' => 'Contents', 'action' => 'index']); ?></li>
    <li><?= $this->Html->link(__('Yeni Item'), ['controller' => ' Contents', 'action' => 'add']); ?></li>
</ul>
<?php $this->end(); ?>
<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading">Kategori'ler</div>

    <!-- Table -->
    <table class="table table-striped" cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th><?= $this->Paginator->sort('id'); ?></th>
            <th><?= $this->Paginator->sort('title'); ?></th>
            <th><?= $this->Paginator->sort('icon'); ?></th>
            <th><?= $this->Paginator->sort('parent cat'); ?></th>
            <th class="actions"><?= __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($categories as $category): ?>
            <tr>
                <td><?= $this->Number->format($category->id) ?></td>
                <td><?= h($category->title) ?></td>
                <td><?= $this->Icon->show($category->icon, $category->color); ?></td>
                <td><?= $this->Number->format($category->parent_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link('', ['action' => 'view', $category->id], ['title' => __('View'), 'data-toggle' => 'tooltip', 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                    <?= $this->Html->link('', ['action' => 'edit', $category->id], ['title' => __('Edit'), 'data-toggle' => 'tooltip', 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                    <?= $this->Form->postLink('', ['action' => 'delete', $category->id], [
                        'title'       => __('Delete'),
                        'data-toggle' => 'tooltip',
                        'confirm'     => __('Are you sure you want to delete # {0}?', $category->id),
                        'class'       => 'btn btn-default glyphicon glyphicon-trash'
                    ]) ?>
                </td>
            </tr>

        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="paginator text-center">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>
