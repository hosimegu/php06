<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>todoリストログイン画面</title>
</head>

<body>
  <form action="todo_login_act.php" method="POST">
    <fieldset>
      <legend>やったことリストログインページ</legend>
      <div>
      　登録者id: <input type="text" name="username">
      </div>
      <div>
        パスワード: <input type="text" name="password">
      </div>
      <div>
        <button>ログイン</button>
      </div>
      <a href="todo_register.php">未登録の方はこちらへ</a>
    </fieldset>
  </form>

</body>

</html>