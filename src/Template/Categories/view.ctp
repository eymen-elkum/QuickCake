<?php
$this->extend('../Layout/TwitterBootstrap/dashboard');
$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('Edit Category'), ['action' => 'edit', $category->id]) ?> </li>
    <li><?= $this->Form->postLink(__('Delete Category'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?> </li>
    <li><?= $this->Html->link(__('Kategori\'ler Listesi'), ['action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Yeni Kategori'), ['action' => 'add']) ?> </li>
    <li><?= $this->Html->link(__('Item\'ler Listesi'), ['controller' => 'Contents', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('Yeni Item'), ['controller' => 'Contents', 'action' => 'add']) ?> </li>
</ul>
<?php $this->end(); ?>

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading" style="line-height: 70px;">
        <?= h($category->title) ?>
        <span style="float: right;">
            <?= $this->Html->image("/files/categories/photo/{$category->photo_dir}/60_{$category->photo}", ['class' => 'img-thumbnail']) ?>
        </span>

        <div style="clear: both;"></div>
    </div>
    <div class="panel-body">
        <p>

        </p>
    </div>
    <table class="table">
        <tbody>
        <tr>
            <td><h6><?= __('Parent Category') ?></h6></td>
            <td>
                <p><?= $category->parent_id ? $this->Html->link($category->parent_category['title'], ['controller' => 'Categories', 'action' => 'view', $category->parent_id]) : __(' no parent') ?></p>
            </td>
        </tr>
        </tbody>
    </table>
</div>


<div class="related row">
    <div class="col-lg-12">
        <h4><?= __('Related Contents') ?></h4>
        <?php if (!empty($category->contents)): ?>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th><?= __('Id') ?></th>
                    <th><?= __('Category Id') ?></th>
                    <th><?= __('Title') ?></th>
                    <th><?= __('Text') ?></th>
                    <th><?= __('Photo') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($category->contents as $contents): ?>
                    <tr>
                        <td><?= h($contents->id) ?></td>
                        <td><?= h($contents->category_id) ?></td>
                        <td><?= h($contents->title) ?></td>
                        <td><?= $this->Text->truncate($contents->text,22) ?></td>
                        <td><?= $this->Html->image("/files/contents/photo/{$contents->photo_dir}/60_{$contents->photo}", ['class' => 'img-thumbnail']) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Contents', 'action' => 'view', $contents->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Contents', 'action' => 'edit', $contents->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contents', 'action' => 'delete', $contents->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contents->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</div>

