<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
    <ul class="nav nav-sidebar">
        <li><?=
            $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $test->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $test->id)]
            )
            ?></li>
        <li><?= $this->Html->link(__('Tests Listesi'), ['action' => 'index']) ?></li>
    </ul>
<?php $this->end(); ?>
<?= $this->Form->create($test); ?>
    <fieldset>
        <legend><?= __('Edit {0}', ['Test']) ?></legend>
        <?php
        echo $this->Form->input('title');
        echo $this->Form->input('photo');
        echo $this->Form->input('photo_dir');
        echo $this->Form->input('parent_id');
        echo $this->Form->input('lft');
        echo $this->Form->input('rght');
        ?>
    </fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>