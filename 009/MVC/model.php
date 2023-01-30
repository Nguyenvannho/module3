<?php
// thong tin nguoi dung

class Person {
    public $name;
    public $age;
    public $address;

    public function __construct($name,$age,$address) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }
}
class Model {
    public function listPerson() {
        return [
            0 => new Person(name:'Nguyễn Huy Hiệu', age:'22', address:'Xóm Đạo'),
            1 => new Person(name:'Nguyễn Tom Đạt', age:'25', address:'Sịa'),
            2 => new Person(name:'Cơ Điện Lạnh', age:'25', address:'Lao Bảo'),
        ];
    }
}