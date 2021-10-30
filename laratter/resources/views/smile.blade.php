<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('笑いたい') }}
        </h2>
    </x-slot>

<div class="py-12">
     <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
         <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
<?php
$random_number = rand(1,5);

//乱数の値で条件分岐

if($random_number==1){
    $result='<a href="https://www.youtube.com/channel/UCZf__ehlCEBPop-_sldpBUQ">[ヒカキンTV]</a><div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/yoZcU7hpTHc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
}
elseif($random_number==2){
    $result='<a href="https://www.youtube.com/channel/UCIR2mQ77wHrLMreV45nYhgw">[かまいたちチャンネル]</a><div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/edN8HxnIhNQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
}
else if ($random_number==3){
    $result='<a href="はじめしゃちょー（hajime） - YouTube">[はじめしゃちょー(hajime)]</a><div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/HLHcGphGPjA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
}

else if ($random_number==4){
    $result='<a href="https://www.youtube.com/user/comtekaigi">[ジャルジャルタワー(JARUJARU TOWER)]</a><div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/JCWTU6hfH9w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
}

else if ($random_number==5){
    $result='<a href="https://www.youtube.com/c/YonsenToshin">[四千頭身公式チャンネル]</a><div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/XsgvraYJmuw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
}

?>
<!DOCTYPE html>
 <head>
  <meta charset="UTF-8">
  <meta http-variant_eqv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>document</title>
</head>
  <body>
  <h1>今日、あなたにおすすめするのは<?=$result?></h1>
  <p>気に入りましたか？</p>
  <button>
    <x-nav-link :href="route('tweet.create')" :active="request()->routeIs('tweet.create')">
            {{ __('お気に入り登録') }}
    </x-nav-link>
　</button>
  </body<!DOCTYPE html>
</html>
</x-app-layout>

