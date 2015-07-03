<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
    <ul class="nav nav-sidebar">
        <li><?= $this->Html->link(__('Item\'ler Listesi'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Kategori\'ler Listesi'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Yeni Kategori'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Photos Listesi'), ['controller' => 'Photos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Yeni Photo'), ['controller' => 'Photos', 'action' => 'add']) ?> </li>
    </ul>
<?php $this->end(); ?>
<?= $this->Form->create($content, ['type' => 'file']); ?>
    <fieldset>
        <legend><?= __('Add {0}', ['Content']) ?></legend>
        <?php
        echo $this->Form->input('category_id', ['options' => $categories]);
        echo $this->Form->input('title');
        echo $this->Form->input('url');
        echo $this->Form->input('text');
        echo $this->Form->input('photo', ['type' => 'file']);
        ?>
    </fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
<?= $this->append('script', $this->Html->script('plugins/ckeditor/ckeditor')) ?>