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
  <title>お気に入りYoutuber登録リスト</title>
</head>

<body>
  <form action="todo_create.php" method="POST">
    <fieldset>
      <legend>お気に入りYoutuber登録リスト</legend>
      <a href="todo_read.php">一覧画面</a>
      <a href="todo_logout.php">logout</a>
      <div>
        チャンネル名: <input type="text" name="todo">
      </div>
      <div>
        コメント: <input type="text" name="deadline">
      </div>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

</body>

</html>