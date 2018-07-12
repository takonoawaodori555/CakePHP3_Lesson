<h1>投稿者情報</h1>
<p><?=$this->Html->link(
    '※一覧に戻る',
    ['action' => 'index']
) ?></p>
<table>
	<tr><th width="25%">投稿者</th>
		<td><?=$data['name'] ?></td></tr>
	<tr><th width="25%">プロフィール・コメント</th>
		<td><?=$data['comment'] ?></td></tr>
</table>