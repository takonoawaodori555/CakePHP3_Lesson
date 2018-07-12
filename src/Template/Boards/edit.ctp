<h1>投稿の編集</h1>
<p><?=$this->Html->link(
    '※一覧に戻る',
    ['action' => 'index']
) ?></p>
<table>
<fieldset>
	<?=$this->Form->create($entity) ?>
	<?=$this->Form->input('id',['type'=>'hidden']) ?>
	<?=$this->Form->input('person_id',['type'=>'hidden']) ?>
	<?=$this->Form->input('name',['type'=>'hidden','value'=>$entity['people']['name']]) ?>
	<div class="error"><?=$this->Form->error('name') ?></div>
	<div>名前：<?=$entity['people']['name'] ?></dov>
	<div class="error"><?=$this->Form->error('password') ?></div>
	<div>パスワード：<?=$this->Form->password('password') ?></div>
	<div class="error"><?=$this->Form->error('title') ?></div>
	<div>タイトル：<?=$this->Form->text('title') ?></div>
	<div class="error"><?=$this->Form->error('content') ?></div>
	<?=$this->Form->textarea("content") ?>
</fieldset>
<?=$this->Form->button("送信") ?>
<?=$this->Form->end() ?>
