<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CONTACT</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <div class="main">
    <div class="contact">
      <div class="title">お問い合わせ</div>
  
  <form action="sent.php" method="post">
  <h3>■名前</h3>
  <input type="text" name="name">
  <h3>■年齢</h3>
  <select name="age" id="">
  <option value="未選択">選んで下さい</option>
  <?php
  for ($i=1; $i <= 50; $i++) { 
    echo "<option value='{$i}'>{$i}</option>";
    }
  ?>
  </select>
  <h3>■コメント</h3>
  <textarea name="comment" id="" cols="30" rows="10"></textarea>

  <input type="submit" value="送信">
  </form>
    </div>
  </div> 
  </body>
</html>
