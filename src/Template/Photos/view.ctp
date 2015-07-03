<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('Edit Photo'), ['action' => 'edit', $photo->id]) ?> </li>
    <li><?= $this->Form->postLink(__('Delete Photo'), ['action' => 'delete', $photo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $photo->id)]) ?> </li>
    <li><?= $this->Html->link(__('Photos Listesi'), ['action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Yeni Photo'), ['action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('Item\'ler Listesi'), ['controller' => 'Contents', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Yeni Item'), ['controller' => 'Contents', 'action' => 'add']) ?> </li>
</ul>
<?php $this->end(); ?>

<h2><?= h($photo->id) ?></h2>
<div class="row">
    <div class="col-lg-5">
        <h6><?= __('Photo') ?></h6>

        <p><?= h($photo->photo) ?></p>
        <h6><?= __('Photo Dir') ?></h6>

        <p><?= h($photo->photo_dir) ?></p>
        <h6><?= __('Content') ?></h6>

        <p><?= $photo->has('content') ? $this->Html->link($photo->content->title, ['controller' => 'Contents', 'action' => 'view', $photo->content->id]) : '' ?></p>
    </div>
    <div class="col-lg-2">
        <h6><?= __('Id') ?></h6>

        <p><?= $this->Number->format($photo->id) ?></p>
    </div>
</div>

