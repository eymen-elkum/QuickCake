<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('Edit Tables Version'), ['action' => 'edit', $tablesVersion->id]) ?> </li>
    <li><?= $this->Form->postLink(__('Delete Tables Version'), ['action' => 'delete', $tablesVersion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tablesVersion->id)]) ?> </li>
    <li><?= $this->Html->link(__('List Tables Versions'), ['action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Yeni Tables Version'), ['action' => 'add']) ?> </li>
    </ul>
<?php $this->end(); ?>

<h2><?= h($tablesVersion->name) ?></h2>
<div class="row">
        <div class="col-lg-5">
                                    <h6><?= __('Name') ?></h6>
                    <p><?= h($tablesVersion->name) ?></p>
                                </div>
            <div class="col-lg-2">
                    <h6><?= __('Id') ?></h6>
                <p><?= $this->Number->format($tablesVersion->id) ?></p>
                    <h6><?= __('Version') ?></h6>
                <p><?= $this->Number->format($tablesVersion->version) ?></p>
                </div>
            <div class="col-lg-2">
                    <h6><?= __('Modified') ?></h6>
                <p><?= h($tablesVersion->modified) ?></p>
                    <h6><?= __('Created') ?></h6>
                <p><?= h($tablesVersion->created) ?></p>
                </div>
        </div>

