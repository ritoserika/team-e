<?php
$random_number = rand(1,5);

//乱数の値で条件分岐

if($random_number==1){
$result='<a href="https://www.youtube.com/channel/UC9Wl5AzCQzp2esQ7uVoQz0g">とうあ</a><div>
<iframe width="560" height="315" src="https://www.youtube.com/embed/gZMLn2NP9Hg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
}elseif($random_number==2){
    $result='<a href="https://www.youtube.com/channel/UCCuizDTLsr-mNm_PEGdChVg">ふくれな/fukurena</a><div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/sF52w7CHs-k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
}
else if ($random_number==3){
    $result='<a href="https://www.youtube.com/channel/UC3swo6utVXOSYwxazwoKWBQ">nanakoななこ</a><div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/DgVYQLQJ374" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
}

else if ($random_number==4){
    $result='<a href="https://www.youtube.com/channel/UCHC8L_WrLJCbv9L1MjEX51g">河北裕介公式チャンネル</a><div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/R4yZrHdRH4A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
}

else if ($random_number==5){
    $result='<a href="https://www.youtube.com/channel/UCj77ylV0zetTGwztHbah33g">和田さん。 / 元美容部員</a><div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/gTkAUvHy7JQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
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
