<?php
require_once('animal.php');
require_once('Ape.php');
require_once('Frog.php');

//Animal
$sheep = new Animal("shaun");

echo "<h3>Hari 9 - Challenge  OOP PHP</h3>";

echo "Name : " . $sheep->name . "<br>";
echo "Legs : " . $sheep->legs . "<br>";
echo "Cold Blooded : " . $sheep->cold_blooded . "<br><br>";
//Animal

//Frog
$kodok = new Frog("buduk");

echo "Name : " .  $kodok->name . "<br>";
echo "Legs : " . $kodok->legs . "<br>";
echo "Cold Blooded : " . $kodok->cold_blooded . "<br>";
echo $kodok->jump(); // "hop hop"
//Frog

//Ape
$sungokong = new Ape("kera sakti");

echo "Name : " . $sungokong->name  . "<br>";
echo "Legs : " . $sungokong->legs . "<br>";
echo "Cold Blooded : " . $sungokong->cold_blooded . "<br>";
echo $sungokong->yell(); // "Auooo"
//Ape