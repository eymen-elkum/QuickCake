<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
        <li><?=
            $this->Form->postLink(
            __('Delete'),
            ['action' => 'delete', $user->id],
            ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
            ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
<?php $this->end(); ?>
<?= $this->Form->create($user); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['User']) ?></legend>
    <?php
        echo $this->Form->input('username');
                echo $this->Form->input('email');
                echo $this->Form->input('email_token');
                echo $this->Form->input('email_verified');
                echo $this->Form->input('email_token_expires');
                echo $this->Form->input('active');
                echo $this->Form->input('password');
                echo $this->Form->input('password_token');
                echo $this->Form->input('password_token_expires');
                echo $this->Form->input('role');
                echo $this->Form->input('last_login');
                ?>
</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>