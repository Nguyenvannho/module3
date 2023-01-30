<?php 
require_once "Node.php";
require_once "LinkkedList.php";

$linkedList = new LinkedList();
$linkedList->insertFirstNode(data:10);
$linkedList->insertFirstNode(data:20);
$linkedList->insertFirstNode(data:50);
$linkedList->insertLastNode(data:40);

var_dump($linkedList->firstNode);