<?php
require __DIR__ .'/vendor/autoload.php';

$animals = [
    \App\Animals\Fish::class=>['Fia','Fib','Fic','Fid','Fie'],
    \App\Animals\BubbleFish::class=>['Bua','Bub','Buc'],
    \App\Animals\CatFish::class=>['Caa','Cab'],
    \App\Animals\ClownFish::class=>['Cla'],
    \App\Animals\Elephant::class=>['Ela','Elb'],
    \App\Animals\Zebra::class=>['Zea'],
    \App\Animals\Parrot::class=>['Paa','Pab','Pac','Pad','Pae','Paf','Pag','Pah','Pai','Paj'],
    \App\Animals\Dove::class=>['Doa','Dob']
];

$animalInZoo = [];

foreach ($animals as $animalType=>$animalList){
    foreach ($animalList as $name){
      $animalInZoo[] = new $animalType($name);
    }
}

foreach ($animalInZoo as $animal):
    \App\Zoo::addAnimalToZoo($animal);
endforeach;

\App\Zoo::visitTheZoo();


/**foreach ($myZoo as $animal){
    $content=explode('\\',get_class($animal));
    $counter=count($content);
    echo 'Famille : '. $content[$counter-1].' - '.'Nom : '. $animal->getname(). ' - '. ' Cri : '. $animal->noise()."<br/>";
}
 **/