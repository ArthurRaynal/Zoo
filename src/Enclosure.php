<?php


namespace App;

class Enclosure
{
    /**
     * @var Animal[] $animals
     */
    private array $animals = [];

    public function addAnimalToEnclosure(Animal $animal): void
    {
        $this->animals[] = $animal;
    }

    public function toString(): void
    {
        foreach ($this->animals as $animal):
            echo $animal->getName() . ' ' . $animal->noise(). '<br/>';
        endforeach;
    }
}