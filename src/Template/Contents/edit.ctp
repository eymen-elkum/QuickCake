<?= $this->element('content_tabs', ['active' => "tab{$tab_edit}"]) ?>
    <div class="panel panel-default">
        <div class="panel-body">
            <?php
            $this->extend('../Layout/TwitterBootstrap/dashboard');
            $this->start('tb_sidebar');
            ?>
            <ul class="nav nav-sidebar">
                <li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $content->id], ['confirm' => __('Are you sure you want to delete # {0}?', $content->id)]) ?></li>
                <li><?= $this->Html->link(__('Add Contents'), ['action' => 'add']) ?></li>
                <li><?= $this->Html->link(__('Item\'ler Listesi'), ['action' => 'index']) ?></li>
                <li><?= $this->Html->link(__('Kategori\'ler Listesi'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('Yeni Kategori'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
                <li><?= $this->Html->link(__('Photos Listesi'), ['controller' => 'Photos', 'action' => 'index']) ?> </li>
                <li><?= $this->Html->link(__('Yeni Photo'), ['controller' => 'Photos', 'action' => 'add']) ?> </li>
            </ul>
            <?php $this->end(); ?>
            <?= $this->Form->create($content, ['type' => 'file']); ?>
            <fieldset>
                <?php
                switch ($tab_edit) {
                case null:
                    echo $this->Form->input('category_id', ['options' => $categories]);
                    echo $this->Form->input('title');
                    echo $this->Form->input('url');
                    echo $this->Form->input('text', ['class' => 'ckeditor']);
                    echo $this->Form->input('photo', ['type' => 'file']);
                    break;
                case 4:
                    echo $this->Form->input('map_x');
                    echo $this->Form->input('map_y');
                    break;
                default:
                    echo $this->Form->input("title{$tab_edit}", ['class' => 'ckeditor']);
                    echo $this->Form->input("tab{$tab_edit}", ['class' => 'ckeditor']);
                }
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
<?= $this->append('script', $this->Html->script('plugins/ckeditor/ckeditor')) ?>