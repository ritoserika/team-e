<?php
session_start();
include("functions.php");
check_session_id();

$user_id=$_SESSION['user_id'];

$pdo = connect_to_db();

//$sql = "SELECT * FROM todo_table ORDER BY deadline ASC";(最後の作業前)
$sql = 'SELECT * FROM todo_table LEFT OUTER JOIN (SELECT todo_id, COUNT(id) AS like_count FROM like_table GROUP BY todo_id) AS result_table ON todo_table.id = result_table.todo_id';

$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo();
  echo json_encode(["error_msg" => "{$error[2]}"]);
  exit();
} else {
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $output = "";
  foreach ($result as $record) {
    $output .= "
      <tr>
      　<td>{$record["todo"]}</td>
        <td>{$record["deadline"]}</td>
        <td><a href='like_create.php?user_id={$user_id}&todo_id={$record["id"]}'>like{$record["like_count"]}</a></td>
        <td><a href='todo_edit.php?id={$record["id"]}'>edit</a></td>
        <td><a href='todo_delete.php?id={$record["id"]}'>delete</a></td>
      </tr>
    ";
  }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DB連携型todoリスト（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>お気に入りのユーチューバー！</legend>
    <a href="favorite_register.php">入力画面</a>
    <a href="todo_logout.php">logout</a>
    <table>
      <thead>
        <tr>
          <th>チャンネル名</th>
          <th>コメント！</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
        <?= $output ?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>