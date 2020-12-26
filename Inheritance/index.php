<?php

class Animal
{
    public $weight;

    public function eat()
    {
        var_dump('all animals can eat');
    }

    public function reproduce()
    {
        var_dump('all animals can reproduce');
    }
}

class Mammal extends Animal
{
    public $heartRate;

    public function breathe()
    {
        var_dump('i can breathe because i am a mammal');
    }
}

class Dog extends Mammal
{
    public $color;

    public function bark()
    {
        var_dump('i can bark because i am a ' . strtolower(get_class()));
    }

    public function breathe()
    {
        var_dump('i breathe very fast');
    }

    public function chase()
    {
        var_dump('i am chasing a rabbit');
    }
}

header('Content-Type:text/plain', true);
$brown = new Dog;
$brown->weight = '7.3';
$brown->color = 'Brown';
$brown->heartRate = 'okay';

echo "Weight: " . $brown->weight, PHP_EOL, "Color: " . $brown->color, PHP_EOL, "Heart rate: " . $brown->heartRate;
$brown->bark();
$brown->chase();
$brown->eat();
$brown->reproduce();
$brown->breathe();
