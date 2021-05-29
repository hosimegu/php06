<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ファイルアップロード</title>
</head>

<body>
  <form action="file_upload.php" method="POST" enctype="multipart/form-data">
    <fieldset>
      <legend>ファイルアップロード</legend>
      <div>
        <input type="file" name="upfile" accept="image/*">
      </div>
      <div>
        <button type="submit">送信</button>
      </div>
    </fieldset>
  </form>

</body>

</html>