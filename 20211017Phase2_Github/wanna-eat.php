<?php
$random_number = rand(1,5);

//乱数の値で条件分岐

if($random_number==1){
$result='<a href="https://youtu.be/dbG7ISuUzJQ">ソロめしTV</a><div>
<iframe width="560" height="315" src="https://www.youtube.com/embed/dbG7ISuUzJQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
}elseif($random_number==2){
<<<<<<< HEAD
    $result='<a href="https://youtu.be/Z_fnt5KJtTg">まるめし</a><div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/Z_fnt5KJtTg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
=======
    $result='<a href="';
>>>>>>> d1d5a8c0583c4bec8a23e9a984a91cc9c4035883
}
else if ($random_number==3){
    $result='<a href="https://youtu.be/YjhMa72OJn8">てりやきちゃんねる</a><div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/YjhMa72OJn8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
}

else if ($random_number==4){
    $result='<a href="https://youtu.be/CLrvw8JOcU0">ごはん日記 </a><div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/CLrvw8JOcU0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
}

else if ($random_number==5){
    $result='<a href="https://youtu.be/SxSN3OhPN44">macaroniマカロニ</a><div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/SxSN3OhPN44" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
}

?>

<!DOCTYPE html>
  <head>
  <meta charset="UTF-8">
  <meta http-variant_eqv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>document</title>
</head>
  </head>
  <body>
  <h1>今日、あなたにおすすめするのは<?=$result?></h1>
  <p>気に入りましたか？</p>
  <button><a href="favorite_register.php">お気に入り登録</a></button>
  </body>
</html>
