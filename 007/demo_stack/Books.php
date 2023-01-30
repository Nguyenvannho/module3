<?php
class Books implements Stack{
    protected $stack;
    protected $limit;

    public function __construct($limit){
        $this->stack = [];
        $this->limit = $limit;
    }
    public function push(string $item){
        if(count($this->stack) > $this->limit){
            throw new Exception(message:"Stack da day");
        }else{
            array_push($this->stack,$item);
        }
        
    }
    public function pop(){
        if($this->isEmpty()){
            throw new Exception(message:"Stack Empty");
        }else{
            return array_pop(array:$this->stack);
        }
        
    }
    public function top(){
        return end(array:$this->stack);
    }
    public function isEmpty()
    {
        return empty($this->stack);
    }
    public function getStack(){
        return $this->stack;
    }
}