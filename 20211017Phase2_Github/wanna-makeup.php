<?php
$random_number = rand(1,5);

//�����̒l�ŏ�������

if($random_number==1){
$result='<a href="https://www.youtube.com/channel/UC9Wl5AzCQzp2esQ7uVoQz0g">�Ƃ���</a><div>
<iframe width="560" height="315" src="https://www.youtube.com/embed/gZMLn2NP9Hg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
}elseif($random_number==2){
    $result='<a href="https://www.youtube.com/channel/UCCuizDTLsr-mNm_PEGdChVg">�ӂ����/fukurena</a><div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/sF52w7CHs-k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
}
else if ($random_number==3){
    $result='<a href="https://www.youtube.com/channel/UC3swo6utVXOSYwxazwoKWBQ">nanako�ȂȂ�</a><div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/DgVYQLQJ374" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
}

else if ($random_number==4){
    $result='<a href="https://www.youtube.com/channel/UCHC8L_WrLJCbv9L1MjEX51g">�͖k�T������`�����l��</a><div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/R4yZrHdRH4A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
}

else if ($random_number==5){
    $result='<a href="https://www.youtube.com/channel/UCj77ylV0zetTGwztHbah33g">�a�c����B / �����e����</a><div>
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
  <h1>�����A���Ȃ��ɂ������߂���̂�<?=$result?></h1>
  <p>�C�ɓ���܂������H</p>
  <button><a href="favorite_register.php">���C�ɓ���o�^</a></button>
  </body>
</html>
