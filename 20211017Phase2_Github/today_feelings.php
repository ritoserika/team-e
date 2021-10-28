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
        <td>{$record["deadline"]}</td>
        <td>{$record["todo"]}</td>
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
  <title>Today's Choice</title>
</head>

<body>
  <h1>今日のあなたにぴったりのYoutuberを提案いたします</h1>
  <fieldset>
    <legend>Today's Feelings（一覧画面）</legend>
<<<<<<< HEAD
    <a href="wanna-makeup.php">メイクをしたい</a>
    <a href="wanna-laugh.php">笑いたい</a>
    <a href="wanna-sleep.php">眠れない</a>
    <a href="wanna-fun.php">楽しい気分になりたい</a>
  <div>
    <a href="wanna-eat.php">おいしいものをたべたい</a>
    <a href="wanna-training">トレーニングしたい気分</a>
=======
    <a href="">メイクをしたい</a>
    <a href="wanna-fun.php">笑いたい</a>
    <a href="">眠れない</a>
    <a href="">楽しい気分になりたい</a>
  <div>
    <a href="wana-eat.php">おいしいものをたべたい</a>
    <a href="wanna-training.php">トレーニングした気分</a>
    <a href="">若い人向け</a>
    <a href="">男性</a>
    <a href="">女性</a>

>>>>>>> d1d5a8c0583c4bec8a23e9a984a91cc9c4035883
  </div>
    <table>
      <tbody>
        <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
         <!--<?= $output ?> -->
      </tbody>
    </table>
  </fieldset>
</body>

</html>