<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="main">
    <div class="contact">
      <div class="title">ありがとうございました。</div>
        <h3>■名前</h3>
          <?php
            echo  $_POST["name"];
          ?>
        <h3>■年齢</h3>
          <?php
            echo  $_POST["age"];
          ?>
        <h3>■コメント</h3>
          <?php
          echo  $_POST["comment"];
?>
<a href="http://localhost:8080/index.php">戻る</a>
</div>
  </div>
</body>
</html>