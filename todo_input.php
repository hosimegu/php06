<?php
session_start();
include("functions.php");
check_session_id();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>やったことリスト（入力画面）</title>
</head>

<body>
  <form action="create_file.php" method="POST" enctype="multipart/form-data">
    <fieldset>
      <legend>やったことリスト（入力画面）</legend>
      <a href="todo_read.php">一覧画面</a>
      <a href="todo_logout.php">ログアウト</a>
      <div>
        やったこと: <input type="text" name="todo">
      </div>
      <div>
        日付け: <input type="date" name="deadline">
      </div>
      <div>
        <input type="file" name="upfile" accept="image/*" capture="camera">
      </div>
      <div>
        <button type="submit">送信する</button>
      </div>
    </fieldset>
  </form>

</body>

</html>