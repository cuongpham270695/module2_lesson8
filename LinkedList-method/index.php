<?php
include_once "linkedList.php";
$linkList = new LinkedList();
$linkList->insertFirst(88);
$linkList->insertFirst(43);
$linkList->insertLast(25);
$linkList->insertFirst(63);
$linkList->insertLast(68);
$linkList->insertLast(74);
echo "<pre>";
echo $linkList->find(3)."\n";
var_dump($linkList);