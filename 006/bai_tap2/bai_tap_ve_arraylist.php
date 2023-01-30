<?php 
class MyList {
    public int $size;
    public array $elements;
    public function __construct($size){
        $this->size = $size;
        $this->elements = [];
    }

    public function insert($index,$obj):void {
        $this->elements[$index] = $obj;
    }
    // them phan tu vao phan tu cua mang
    public function add($obj) : void {
        array_push($this->elements, $obj);
    }
    // xoa phan tu cua mang
    public function remove($index) : void {
        unset($this->elements[$index]);
    
    }
    // lay phan tu cua mang
    public function get($index) {
        return $this->elements[$index];
    }
    // don dep phan tu
    public function clear() {
        return  $this->elements =[];
    }
    // them tat ca cac phan tu vao mang
    public function addAll($arr)  {
        $this->elements = $arr;
    }
    // tim kiem mot gia tri trong mang
    public function indexOf($object): int
        {
            if (!$this->isEmpty()) {
                return array_search($object, $this->elements);
            } else {
                return -1;
            }
    
        }
    // kiem tra xem co rong hay khong
    public function isEmpty() : bool {
        return empty($this->elements);
    }
    // sap xep mang
    public function sort()  {
        sort($this->elements);
    }
    // khoi phuc lai mang
    public function reset() : void {
        reset($this->elements);
    }
    // do dai cua mang
    public function size() : int {
        return $this->size;
    }
    
}


// khởi tạo đối tượng
$mylist = new MyList(5);
//goi ohuong thuc
$mylist->insert(1,'khang');
// echo '<pre>';
// print_r($mylist);
// echo '</pre>';
// them phan tu vao
$mylist->add('vua ly don9');
$mylist->add('vua ly don8');
$mylist->add('vua ly don111');
$mylist->add('vua ly don2');

// echo $mylist->get(4);
// echo '<pre>';
// print_r($mylist);
// echo '</pre>';
// // xoa phuong thuc
// $mylist->remove(3);

// //clear 
// $mylist->clear();
// echo 'Do dai danh sach' . $mylist->size(2);
$mylist->sort();
// $mylist->reset();
// them tat ca
// $mylist->addAll([5,2,6]);
var_dump(($mylist->indexOf('vua ly don2')));
// echo '<pre>';
// print_r($mylist);
// echo '</pre>';


?>
