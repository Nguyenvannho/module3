<?php
class MyQueue {
    private $elements = [];
    private $limit;

    public function __construct($limit){
        $this->limit = $limit;
    }

    // them phan tu vao hang doi
    public function enqueue($item){
        array_push($this->elements,$item);
    }

    // xoas phan tu tu hang doi
    public function dequeue(){
        return array_shift($this->elements);
    }

     // xem phan tu dau tien cua ngan xep
     public function peek(){
        return current($this->elements);
    }

    // kiem tra rong
    public function isEmpty(){
        if(count($this->elements) == 0){
            return true;
        }
        return false;
    }
}
// khoi tao doi tuong
$myqueue = new MyQueue(4);
// Them vao lan luot Huyen, Nho, Phong, Tam
$myqueue->enqueue("Huyen");
$myqueue->enqueue("Nho");
$myqueue->enqueue("Phong");
$myqueue->enqueue("Tam");
$myqueue->dequeue();
//xem phan tu dau tien cua ngan xep
$myqueue->peek();
// kiem tra rong
var_dump($myqueue->isEmpty());
// in phan tu ra khoi mamg
echo "<pre>";
print_r($myqueue);
echo "</pre>";

