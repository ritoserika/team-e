<?php
$random_number = rand(1,5);

//乱数の値で条件分岐

if($random_number==1){
    $result='<a href="https://www.youtube.com/channel/UCvSAywQ-c2kNmKCs0bmu2SA">ヒーリング　瞑想　リラックス　音楽チャンネル</a><div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/thgwokf5vKg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
    }elseif($random_number==2){
        $result='<a href="https://youtu.be/ONFh8tVBUXs">Vito ASMR</a><div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ONFh8tVBUXs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
    }
    else if ($random_number==3){
        $result='<a href="https://www.youtube.com/channel/UC0hORbOniK7h6CX6nbqsRfQ">トナカイおやすみ研究所</a><div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/5HB43YxzE6M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
    }
    
    else if ($random_number==4){
        $result='<a href="https://www.youtube.com/watch?v=tvNdPc7ed90">Forest of wing</a><div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/tvNdPc7ed90" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
    }
    
    else if ($random_number==5){
        $result='<a href="https://www.youtube.com/watch?v=nc5OWjdUFKA">ひろゆきの閃き【切り抜き】</a><div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/nc5OWjdUFKA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
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
