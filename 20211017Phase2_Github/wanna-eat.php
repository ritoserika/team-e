<?php
$random_number = rand(1,5);

//乱数の値で条件分岐

if($random_number==1){
$result='<a href="https://www.youtube.com/channel/UCZf__ehlCEBPop-_sldpBUQ">ヒカキンTV</a><div>
<iframe width="560" height="315" src="https://www.youtube.com/embed/yoZcU7hpTHc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
}elseif($random_number==2){
    $result='中吉';
}
else if ($random_number==3){
    $result='小吉';
}

else if ($random_number==4){
    $result='凶';
}

else if ($random_number==5){
    $result='大凶';
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
