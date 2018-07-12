<h1>投稿フォーム</h1>
<p><?=$this->Html->link(
    '※一覧に戻る',
    ['action' => 'index']
) ?></p>
<?=$this->Form->create($entity) ?>
<fieldset>
	<div class="error"><?=$this->Form->error('name') ?></div>
	<?=$this->Form->input('name',['type'=>'text']) ?>
	<div class="error"><?=$this->Form->error('password') ?></div>
	<?=$this->Form->input('password',['type'=>'password']) ?>
	<div class="error"><?=$this->Form->error('title') ?></div>
	<?=$this->Form->input('title',['type'=>'text']) ?>
	<div class="error"><?=$this->Form->error('content') ?></div>
	<?=$this->Form->textarea("content") ?>
</fieldset>
<?=$this->Form->button("送信") ?>
<?=$this->Form->end() ?>
