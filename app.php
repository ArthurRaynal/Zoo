<?php
require __DIR__ .'/vendor/autoload.php';

$animals = [
    \App\Animals\Fish::class=>5,
    \App\Animals\BubbleFish::class=>3,
    \App\Animals\CatFish::class=>2,
    \App\Animals\ClownFish::class=>1,
    \App\Animals\Elephant::class=>2,
    \App\Animals\Zebra::class=>1,
    \App\Animals\Parrot::class=>10,
    \App\Animals\Dove::class=>2
];

$zoo = [];

foreach ($animals as $key=>$value){
    for ($i=0;$i<$value;$i++){
      $zoo[] = new $key($key);
    }
}
foreach ($zoo as $value){
    echo 'Je suis '. $value->getname(). ' et mon cri est '. $value->noise()."<br/>";
}
