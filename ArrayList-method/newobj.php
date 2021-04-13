<?php
include_once "array.php";
$listOne = new MyList();
$listTwo = new MyList([1,2,3,4,5]);
$listOne->add(1);
$listOne->add(2);
$listOne->add(5);
$listOne->add(7);
$listOne->add(8);
echo $listOne->indexOf("4")."<br>";
var_dump($listOne);
echo "<br>";
var_dump($listTwo);
echo "<br>";
$listTwo->remove(2);
var_dump($listTwo);
echo "<br>";
echo $listTwo->indexOf(3);