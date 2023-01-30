<?php 
include_once "Queue.php";
$queue = new Queue();
$queue->enqueue(item:10);
$queue->enqueue(item:11);
$queue->enqueue(item:12);
$queue->enqueue(item:13);
$queue->enqueue(item:14);
$queue->dequeue();
$queue->dequeue();
$queue->dequeue();
var_dump($queue->container);
