<?php
$random_number = rand(1,5);

//乱数の値で条件分岐

if($random_number==1){
    $result='<a href="https://www.youtube.com/channel/UCOUu8YlbaPz0W2TyFTZHvjA">ザ・きんにくTV 【The Muscle TV】</a><div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/hge3fr50o0o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
}
elseif($random_number==2){
    $result='<a href="https://www.youtube.com/channel/UCC0JWiw4BJYR4NUDxQCf0Hg>Hinata Kato /ひなちゃんねる </a><div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/O5cwCtoWndE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
}
else if ($random_number==3){
    $result='<a href="https://www.youtube.com/channel/UCVdr-eRqzvzKHMpiU4YuNIQ">CALISLIFE自重トレ</a><div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/HLHcGphGPjA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
}

else if ($random_number==4){
    $result='<a href="https://www.youtube.com/channel/UCk769Z_Mwz_TYiHLmgA247g">Keisuke Hayashi(uFit)</a><div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/fFQIIIKI8RA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
}

else if ($random_number==5){
    $result='<a href="https://www.youtube.com/c/YonsenToshin">JINSLIFE</a><div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/6Giso8rBgoo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
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
