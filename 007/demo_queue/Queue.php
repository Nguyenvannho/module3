<?php
class Queue {
    public $container;
    
    public function __construct(){
        $this->container = [];
    }
    function enqueue($item){
        array_push($this->container,$item);
    }
    function dequeue(){
        return array_shift($this->container);
    }
    function size(){
        return count($this->container);
    }
    function isEmpty(){
        return empty($this->container);
    }
    
}