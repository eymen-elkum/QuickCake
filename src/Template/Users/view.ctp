<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
    <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id
        ], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
    <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
</ul>
<?php $this->end(); ?>

<h2><?= h($user->id) ?></h2>
<div class="row">
    <div class="col-lg-5">
        <h6><?= __('Id') ?></h6>

        <p><?= h($user->id) ?></p>
        <h6><?= __('Username') ?></h6>

        <p><?= h($user->username) ?></p>
        <h6><?= __('Email') ?></h6>

        <p><?= h($user->email) ?></p>
        <h6><?= __('Email Token') ?></h6>

        <p><?= h($user->email_token) ?></p>
        <h6><?= __('Password') ?></h6>

        <p><?= h($user->password) ?></p>
        <h6><?= __('Password Token') ?></h6>

        <p><?= h($user->password_token) ?></p>
        <h6><?= __('Role') ?></h6>

        <p><?= h($user->role) ?></p>
    </div>
    <div class="col-lg-2">
        <h6><?= __('Email Token Expires') ?></h6>

        <p><?= h($user->email_token_expires) ?></p>
        <h6><?= __('Password Token Expires') ?></h6>

        <p><?= h($user->password_token_expires) ?></p>
        <h6><?= __('Last Login') ?></h6>

        <p><?= h($user->last_login) ?></p>
        <h6><?= __('Created') ?></h6>

        <p><?= h($user->created) ?></p>
        <h6><?= __('Modified') ?></h6>

        <p><?= h($user->modified) ?></p>
    </div>
    <div class="col-lg-2">
        <h6><?= __('Email Verified') ?></h6>

        <p><?= $user->email_verified ? __('Yes') : __('No'); ?></p>
        <h6><?= __('Active') ?></h6>

        <p><?= $user->active ? __('Yes') : __('No'); ?></p>
    </div>
</div>

