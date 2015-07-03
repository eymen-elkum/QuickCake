<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('Edit Test'), ['action' => 'edit', $test->id]) ?> </li>
    <li><?= $this->Form->postLink(__('Delete Test'), ['action' => 'delete', $test->id], ['confirm' => __('Are you sure you want to delete # {0}?', $test->id)]) ?> </li>
    <li><?= $this->Html->link(__('Tests Listesi'), ['action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Yeni Test'), ['action' => 'add']) ?> </li>
</ul>
<?php $this->end(); ?>

<h2><?= h($test->title) ?></h2>
<div class="row">
    <div class="col-lg-5">
        <h6><?= __('Title') ?></h6>

        <p><?= h($test->title) ?></p>
        <h6><?= __('Photo') ?></h6>

        <p><?= h($test->photo) ?></p>
        <h6><?= __('Photo Dir') ?></h6>

        <p><?= h($test->photo_dir) ?></p>
    </div>
    <div class="col-lg-2">
        <h6><?= __('Id') ?></h6>

        <p><?= $this->Number->format($test->id) ?></p>
        <h6><?= __('Parent Id') ?></h6>

        <p><?= $this->Number->format($test->parent_id) ?></p>
        <h6><?= __('Lft') ?></h6>

        <p><?= $this->Number->format($test->lft) ?></p>
        <h6><?= __('Rght') ?></h6>

        <p><?= $this->Number->format($test->rght) ?></p>
    </div>
</div>

