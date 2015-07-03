<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('Edit Contact'), ['action' => 'edit', $contact->id]) ?> </li>
    <li><?= $this->Form->postLink(__('Delete Contact'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]) ?> </li>
    <li><?= $this->Html->link(__('Contacts Listesi'), ['action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Yeni Contact'), ['action' => 'add']) ?> </li>
    </ul>
<?php $this->end(); ?>

<h2><?= h($contact->name) ?></h2>
<div class="row">
        <div class="col-lg-5">
                                    <h6><?= __('Name') ?></h6>
                    <p><?= h($contact->name) ?></p>
                                                    <h6><?= __('Adres') ?></h6>
                    <p><?= h($contact->adres) ?></p>
                                                    <h6><?= __('Tel') ?></h6>
                    <p><?= h($contact->tel) ?></p>
                                                    <h6><?= __('Fax') ?></h6>
                    <p><?= h($contact->fax) ?></p>
                                                    <h6><?= __('Web') ?></h6>
                    <p><?= h($contact->web) ?></p>
                                                    <h6><?= __('Email') ?></h6>
                    <p><?= h($contact->email) ?></p>
                                </div>
            <div class="col-lg-2">
                    <h6><?= __('Id') ?></h6>
                <p><?= $this->Number->format($contact->id) ?></p>
                </div>
            </div>

