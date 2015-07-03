<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('Yeni Contact'), ['action' => 'add']); ?></li>
</ul>
<?php $this->end(); ?>
<table class="table table-striped" cellpadding="0" cellspacing="0">
    <thead>
    <tr>
        <th><?= $this->Paginator->sort('id'); ?></th>
        <th><?= $this->Paginator->sort('name'); ?></th>
        <th><?= $this->Paginator->sort('adres'); ?></th>
        <th><?= $this->Paginator->sort('tel'); ?></th>
        <th><?= $this->Paginator->sort('fax'); ?></th>
        <th><?= $this->Paginator->sort('web'); ?></th>
        <th><?= $this->Paginator->sort('email'); ?></th>
        <th class="actions"><?= __('Actions'); ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($contacts as $contact): ?>
        <tr>
            <td><?= $this->Number->format($contact->id) ?></td>
            <td><?= h($contact->name) ?></td>
            <td><?= h($contact->adres) ?></td>
            <td><?= h($contact->tel) ?></td>
            <td><?= h($contact->fax) ?></td>
            <td><?= h($contact->web) ?></td>
            <td><?= h($contact->email) ?></td>
            <td class="actions">
                <?= $this->Html->link('', ['action' => 'view', $contact->id], ['title' => __('View'), 'class' => 'btn btn-default glyphicon glyphicon-eye-open']) ?>
                <?= $this->Html->link('', ['action' => 'edit', $contact->id], ['title' => __('Edit'), 'class' => 'btn btn-default glyphicon glyphicon-pencil']) ?>
                <?= $this->Form->postLink('', ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id), 'title' => __('Delete'), 'class' => 'btn btn-default glyphicon glyphicon-trash']) ?>
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