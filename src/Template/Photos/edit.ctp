<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
    <ul class="nav nav-sidebar">
        <li><?=
            $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $photo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $photo->id)]
            )
            ?></li>
        <li><?= $this->Html->link(__('Photos Listesi'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Item\'ler Listesi'), ['controller' => 'Contents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Yeni Item'), ['controller' => 'Contents', 'action' => 'add']) ?> </li>
    </ul>
<?php $this->end(); ?>
<?= $this->Form->create($photo, ['type' => 'file']); ?>
    <fieldset>
        <legend><?= __('Edit {0}', ['Photo']) ?></legend>
        <?php
        echo $this->Form->input('photo', ['type' => 'file']);
        echo $this->Form->input('content_id', ['options' => $contents]);
        ?>
    </fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>