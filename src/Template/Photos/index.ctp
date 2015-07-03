<?= $this->element('content_tabs', ['active' => 'gallery']) ?>
<div class="panel panel-default">
    <div class="panel-body">
        <?php
        $this->extend('../Layout/TwitterBootstrap/dashboard');
        $this->start('tb_sidebar');
        ?>
        <ul class="nav nav-sidebar">
            <li><?= $this->Html->link(__('Yeni Photo'), ['action' => 'add', $contentId]); ?></li>
            <li><?= $this->Html->link(__('Item\'ler Listesi'), ['controller' => 'Contents', 'action' => 'index']); ?></li>
            <li><?= $this->Html->link(__('Yeni Item'), ['controller' => ' Contents', 'action' => 'add']); ?></li>
        </ul>
        <?php $this->end(); ?>
        <div class="row">
            <?php foreach ($photos as $photo): ?>
                <div class="col-sm-2 col-md-2">
                    <div class="thumbnail">
                        <?= $this->Html->image("/files/photos/photo/{$photo->photo_dir}/200_{$photo->photo}", ['class' => 'img-thumbnail']) ?>
                        <div class="caption">
                            <?= $this->Form->postLink('', ['action' => 'delete', $photo->id, $contentId], ['confirm' => __('Are you sure you want to delete # {0}?', $photo->id), 'title' => __('Delete'), 'class' => 'btn btn-default btn-block glyphicon glyphicon-trash']) ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="col-sm-2 col-md-2">
                <div class="thumbnail">
                    <?= $this->Html->image('image_add.png', ['class' => 'img-thumbnail', 'url' => ['action' => 'add', $contentId]]) ?>
                    <div class="caption">
                        <?= $this->Html->link('', ['action' => 'add', $contentId], ['title' => __('Edit'), 'class' => 'btn btn-block btn-default glyphicon glyphicon-plus']) ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>
    </div>
</div>