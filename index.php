<?php

require_once 'animal.php';
require_once 'frog.php';
require_once 'ape.php';

$sheep = new animal('shaun', 2, 'false');
$katak = new frog('frogy', 4, 'false');
$kodok = new frog('frogah', 4, 'false');
$monki = new ape('monmon kera sakti', 2, 'Auooo');

echo 'CLASS ANIMAL <br>';
echo $sheep->name . '<br>'; // "shaun"
echo $sheep->legs . '<br>'; // 2
echo $sheep->cold_blooded  . '<br> <br>'; // false

echo "CLASS FROG <br>";
echo $katak->name . '<br>'; // "frogy"
echo $katak->legs . '<br>'; // 4
echo $katak->cold_blooded  . '<br>'; //false

$kodok->set_nama('frogah') -> set_legs(4) -> set_blooded('false');
echo $kodok->name . ' ' . $kodok->legs . ' ' . $kodok->cold_blooded . "<br> <br>";

echo 'CLASS APE <br>';
$monki->set_nama('monmon kera sakti') -> set_legs(2) -> set_blooded('false');
echo $monki->name . ' ' . $monki->legs . ' ' . $monki->cold_blooded . '<br>';

ape::yell();
echo'<br>';
ape::jump();

// $monki->set_yell('Auooo');
// echo $monki->suarah . ' ';

?>