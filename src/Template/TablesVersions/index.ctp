<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('Yeni Tables Version'), ['action' => 'add']); ?></li>
    </ul>
<?php $this->end(); ?>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
                        <th><?= $this->Paginator->sort('id'); ?></th>
                        <th><?= $this->Paginator->sort('name'); ?></th>
                        <th><?= $this->Paginator->sort('version'); ?></th>
                        <th><?= $this->Paginator->sort('modified'); ?></th>
                        <th><?= $this->Paginator->sort('created'); ?></th>
                        <th class="actions"><?= __('Actions'); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tablesVersions as $tablesVersion): ?>
        <tr>
                        <td><?= $this->Number->format($tablesVersion->id) ?></td>
                                    <td><?= h($tablesVersion->name) ?></td>
                                    <td><?= $this->Number->format($tablesVersion->version) ?></td>
                                    <td><?= h($tablesVersion->modified) ?></td>
                                    <td><?= h($tablesVersion->created) ?></td>
                                    <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $tablesVersion->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $tablesVersion->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $tablesVersion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tablesVersion->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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