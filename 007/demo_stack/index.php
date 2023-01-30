<?php 
include_once "Stack.php";
include_once "Books.php";
$books = new Books(limit:3);
$books->push("Tin hoc 12");
$books->push("Toan hoc 12");
$books->push("Vat ly 12");
$books->push("Sinh hoc 12");
// $books->pop();
// $books->pop();
echo $books->top();
var_dump($books->getStack());