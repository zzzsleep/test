<?php
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$shelter = new MyAnimalShelter();

$shelter->takeCat('Barsic', 6);
$shelter->takeCat('Murzic', 3);
$shelter->takeDog('Muhtar', 2);
$shelter->takeTurtle('Turtella', 1);
$shelter->takeTurtle('Cherepahen', 2);
$shelter->takeDog('Bobik', 3);
$shelter->takeDog('Pesic', 5);
$shelter->takeCat('Baton', 2);
$shelter->takeTurtle('Kruglic', 1);
$shelter->takeCat('Chernysh', 3);
$shelter->takeCat('Koshan', 2);

echo '<pre>';
var_dump($shelter->getCatList());
var_dump($shelter->giveTurtle());
var_dump($shelter->giveTurtle());
var_dump($shelter->giveCat());
var_dump($shelter->giveDog());
var_dump($shelter->giveAnyAnimal());
var_dump($shelter->giveAnyAnimal());
var_dump($shelter->giveAnyAnimal());
var_dump($shelter->giveAnyAnimal());
var_dump($shelter->giveAnyAnimal());
var_dump($shelter->giveAnyAnimal());
var_dump($shelter->giveAnyAnimal());
echo '</pre>';