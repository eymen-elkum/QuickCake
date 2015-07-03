<?= $this->element('content_tabs', ['active' => 'gallery']) ?>
<div class="panel panel-default">
    <div class="panel-body">

        <?php
        $this->extend('../Layout/TwitterBootstrap/dashboard');
        $this->start('tb_sidebar');
        ?>
        <ul class="nav nav-sidebar">
            <li><?= $this->Html->link(__('Photos Listesi'), ['action' => 'index', $contentId]) ?></li>
            <li><?= $this->Html->link(__('Item\'ler Listesi'), ['controller' => 'Contents', 'action' => 'index']) ?> </li>
            <li><?= $this->Html->link(__('Yeni Item'), ['controller' => 'Contents', 'action' => 'add']) ?> </li>
        </ul>
        <?php $this->end(); ?>
        <?= $this->Form->create($photo, ['type' => 'file']); ?>
        <fieldset>
            <?php
            echo $this->Form->input('photos[]', ['type' => 'file','multiple'=>true]);
            echo $this->Form->input('content_id', ['options' => $contents, 'value' => $contentId]);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>