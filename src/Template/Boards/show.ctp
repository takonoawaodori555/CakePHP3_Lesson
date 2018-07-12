<h1>掲示板・詳細</h1>
<p><?=$this->Html->link(
    '※一覧に戻る',
    ['action' => 'index']
) ?></p>
<table>
	<tr><th width="25%">投稿者</th>
		<td><?=$data['people']['name'] ?></td></tr>
	<tr><th width="25%">タイトル</th>
		<td><?=$data['title'] ?></td></tr>
	<tr><th width="25%">内容</th>
		<td><?=$data['content'] ?></td></tr>
</table>
<p><?=$this->Html->link(
    '※この投稿を編集する',
    ['action' => 'edit',$data['id']]
) ?></p>