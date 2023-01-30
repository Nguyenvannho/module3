<?php 
require_once "ArrayList.php";
$arrayList = new ArrayList(limit:5);
$arrayList->add(5);
$arrayList->add(6);
var_dump($arrayList->container);
