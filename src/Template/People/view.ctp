<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Person $person
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Person'), ['action' => 'edit', $person->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Person'), ['action' => 'delete', $person->id], ['confirm' => __('Are you sure you want to delete # {0}?', $person->id)]) ?> </li>
        <li><?= $this->Html->link(__('List People'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Boards'), ['controller' => 'Boards', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Board'), ['controller' => 'Boards', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="people view large-9 medium-8 columns content">
    <h3><?= h($person->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($person->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($person->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Password') ?></h4>
        <?= $this->Text->autoParagraph(h($person->password)); ?>
    </div>
    <div class="row">
        <h4><?= __('Comment') ?></h4>
        <?= $this->Text->autoParagraph(h($person->comment)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Boards') ?></h4>
        <?php if (!empty($person->boards)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Person Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Content') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($person->boards as $boards): ?>
            <tr>
                <td><?= h($boards->id) ?></td>
                <td><?= h($boards->person_id) ?></td>
                <td><?= h($boards->title) ?></td>
                <td><?= h($boards->content) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Boards', 'action' => 'view', $boards->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Boards', 'action' => 'edit', $boards->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Boards', 'action' => 'delete', $boards->id], ['confirm' => __('Are you sure you want to delete # {0}?', $boards->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
