<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('Edit Content'), ['action' => 'edit', $content->id]) ?> </li>
    <li><?= $this->Form->postLink(__('Delete Content'), ['action' => 'delete', $content->id], ['confirm' => __('Are you sure you want to delete # {0}?', $content->id)]) ?> </li>
    <li><?= $this->Html->link(__('Item\'ler Listesi'), ['action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Yeni Item'), ['action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('Kategori\'ler Listesi'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Yeni Kategori'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('Photos Listesi'), ['controller' => 'Photos', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Yeni Photo'), ['controller' => 'Photos', 'action' => 'add']) ?> </li>
</ul>
<?php $this->end(); ?>

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading" style="line-height: 70px;">
        <?= h($content->title) ?>
        <span style="float: right;">
            <?= $this->Html->image("/files/contents/photo/{$content->photo_dir}/60_{$content->photo}", ['class' => 'img-thumbnail']) ?>
        </span>
        <div style="clear: both;"></div>
    </div>
    <div class="panel-body">
        <p>

        </p>
    </div>

    <!-- Table -->
    <table class="table">
        <tbody>
            <tr>
                <td><h6><?= __('Category') ?></h6></td>
                <td><p><?= $content->has('category') ? $this->Html->link($content->category->title, ['controller' => 'Categories', 'action' => 'view', $content->category->id]) : '' ?></p></td>
            </tr>
            <tr>
                <td><h6><?= __('Title') ?></h6></td>
                <td><p><?= h($content->title) ?></p></td>
            </tr>
            <tr>
                <td><h6><?= __('Text') ?></h6></td>
                <td><p><?= h($content->text) ?></p></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="panel panel-default">
    <div class="panel-heading"><h5><?= __('Related Photos') ?></h5></div>
    <div class="panel-body">
        <div class="related row">
            <div class="col-lg-12">
                <?php if (!empty($content->photos)): ?>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Photo') ?></th>
                            <th><?= __('Photo Dir') ?></th>
                            <th><?= __('Content Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($content->photos as $photos): ?>
                            <tr>
                                <td><?= h($photos->id) ?></td>
                                <td><?= h($photos->photo) ?></td>
                                <td><?= h($photos->photo_dir) ?></td>
                                <td><?= h($photos->content_id) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Photos', 'action' => 'view', $photos->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Photos', 'action' => 'edit', $photos->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Photos', 'action' => 'delete', $photos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $photos->id)]) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
