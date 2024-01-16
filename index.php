<?php
require_once "ape.php";
require_once "frog.php";
    require_once "animal.php";

    $sheep = new Animal("shaun");
echo "name: ". $sheep->name;
echo "<br>";
echo " legs:". $sheep->legs; 
echo "<br>";
echo "cold_blood:". $sheep->cold_blood; 
echo "<br><br>";

$sungokong = new Frog("buduk");
echo "name: ". $sungokong->name;
echo "<br>";
echo " legs:". $sungokong->legs; 
echo "<br>";
echo "cold_blood:". $sungokong->cold_blood; 
echo "<br>";
echo "jump :";
echo $sungokong-> emon();
echo "<br><br>";

$kodok = new Ape("Kera sakti");
echo "name: ". $kodok->name;
echo "<br>";
echo " legs:". $kodok->legs; 
echo "<br>";
echo "cold_blood:". $kodok->cold_blood; 
echo "<br>";
echo "jump :";
echo $kodok-> david();


?>
