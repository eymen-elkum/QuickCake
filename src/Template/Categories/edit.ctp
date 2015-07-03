<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
    <ul class="nav nav-sidebar">
        <li><?=
            $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $category->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]
            )
            ?></li>
        <li><?= $this->Html->link(__('Kategori\'ler Listesi'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Item\'ler Listesi'), ['controller' => 'Contents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Yeni Item'), ['controller' => 'Contents', 'action' => 'add']) ?> </li>
    </ul>
<?php $this->end(); ?>
<?= $this->Form->create($category, ['type' => 'file']); ?>
    <fieldset>
        <legend><?= __('Edit {0}', ['Category']) ?></legend>
        <?php
        echo $this->Form->input('title');
        //echo $this->Form->input('photo', ['type' => 'file']);
        echo $this->Form->input('parent_id', ['options' => $parentCategories, 'empty' => __('No Parent')]);
        echo $this->Form->input('color', ['type' => 'color']);
        echo $this->cell('Icons.IconList', ['input_name' => 'icon', 'value' => $category->icon]);
        ?>
    </fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>