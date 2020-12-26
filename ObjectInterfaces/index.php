<?php
ini_set('display_errors', 'On');
header('Content-Type:text/plain', true);
spl_autoload_register(function ($className) {
    require_once "src/{$className}.php";
});

$billy = new Dog;
$santa = new Lion;
$snowBall = new Cat;
$loko = new Rabbit;

$billy->chase($snowBall);
$billy->kill($snowBall);

$snowBall->chase($loko);
$snowBall->kill($loko);

$loko->chaseBy($snowBall);
$loko->killedBy($snowBall);

$santa->chase($billy);
$santa->kill($billy);
