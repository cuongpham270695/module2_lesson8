<?php
include_once "LinkList.php";
$linkedList = new LinkList();
$linkedList -> insertFirst(11);
$linkedList -> insertFirst(22);
$linkedList -> insertLast(33);
$linkedList -> insertLast(44);
$totalNodes = $linkedList ->totalNodes();
$linkData = $linkedList ->readList();

echo $totalNodes . " nodes in array.<br>";
echo implode(",",$linkData);