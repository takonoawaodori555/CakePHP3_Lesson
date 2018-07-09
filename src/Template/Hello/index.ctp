<!DOCTYPE html>
<html lang="ja">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Hello Page</title>
</head>

<body>
  <h1>サンプル見出し</h1>
  <p><?=$result; ?></p>
  <?=$this->Form->create(
                    null,
                    ['type' => 'post', 'url' => ['controller' => 'hello','action' => 'index'] ]
                  )
  ?>
    <?=$this->Form->text("HelloForm.text1") ?>
    <?=$this->Form->submit("送信") ?>
  <?=$this->Form->end(); ?>

</body>
</html>