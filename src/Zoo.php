<?php

namespace App;

use App\Animal;
use App\Enclosure;
use App\Interfaces\CanFly;
use App\Interfaces\CanSwim;
use App\Interfaces\CanWalk;

class Zoo
{
    private static ?Enclosure $aquarium = null;
    private static ?Enclosure $aviary = null;
    private static ?Enclosure $fence = null;

    public static function getAquarium(): ?Enclosure
    {
        return self::$aquarium;
    }

    public static function getAviary(): ?Enclosure
    {
        return self::$aviary;
    }

    public static function getFence(): ?Enclosure
    {
        return self::$fence;
    }

    public static function addAnimalToZoo(Animal $animal): void
    {
        if ($animal instanceof CanFly) {
            if (is_null(self::$aviary)) {
                self::$aviary = new Enclosure();
            }
            self::$aviary->addAnimalToEnclosure($animal);
        }
        if ($animal instanceof CanSwim) {
            if (is_null(self::$aquarium)) {
                self::$aquarium = new Enclosure();
            }
            self::$aquarium->addAnimalToEnclosure($animal);
        }
        if ($animal instanceof CanWalk) {
            if (is_null(self::$fence)) {
                self::$fence = new Enclosure();
            }
            self::$fence->addAnimalToEnclosure($animal);
        }
    }

    public static function visitTheZoo(): void
    {
        echo 'L\'enclos Aquarium contient : <br/>';
        self::getAquarium()->toString();
        echo 'L\'enclos Aviary contient : <br/>';
        self::getAviary()->toString();
        echo 'L\'enclos Fence contient : <br/>';
        self::getFence()->toString();
    }

}