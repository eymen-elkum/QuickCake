<ul class="nav nav-tabs nav-justified nav-pills">
    <li role="presentation" <?= ($active == 'tab') ? 'class="active"' : '' ?>><?= $this->Html->link('Content',      ['controller' => 'contents', 'action' => 'edit', @$this->request['pass'][0]]) ?></li>
    <li role="presentation" <?= ($active == 'gallery') ? 'class="active"' : '' ?>><?= $this->Html->link('Gallery',  ['controller' => 'photos', 'action' => 'index', @$this->request['pass'][0]]) ?></li>
    <li role="presentation" <?= ($active == 'tab4') ? 'class="active"' : '' ?>><?= $this->Html->link('Harita',      ['controller' => 'contents', 'action' => 'edit', @$this->request['pass'][0], 4]) ?></li>
    <li role="presentation" <?= ($active == 'tab1') ? 'class="active"' : '' ?>><?= $this->Html->link('Tab 1',       ['controller' => 'contents', 'action' => 'edit', @$this->request['pass'][0], 1]) ?></li>
    <li role="presentation" <?= ($active == 'tab2') ? 'class="active"' : '' ?>><?= $this->Html->link('Tab 2',       ['controller' => 'contents', 'action' => 'edit', @$this->request['pass'][0], 2]) ?></li>
    <li role="presentation" <?= ($active == 'tab3') ? 'class="active"' : '' ?>><?= $this->Html->link('Tab 3',       ['controller' => 'contents', 'action' => 'edit', @$this->request['pass'][0], 3]) ?></li>
    <li role="presentation" <?= ($active == 'tab5') ? 'class="active"' : '' ?>><?= $this->Html->link('Directive',   ['controller' => 'contents', 'action' => 'edit', @$this->request['pass'][0], 5]) ?></li>
</ul>
