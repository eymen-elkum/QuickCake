<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
        <li><?= $this->Html->link(__('List Tables Versions'), ['action' => 'index']) ?></li>
    </ul>
<?php $this->end(); ?>
<?= $this->Form->create($tablesVersion); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Tables Version']) ?></legend>
    <?php
        echo $this->Form->input('name');
                echo $this->Form->input('version');
                ?>
</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>