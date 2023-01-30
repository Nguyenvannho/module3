<?php 
//Bước 1: Tạo một lớp tên là Dancer với 2 thuộc tính:
class Dancer {
    public $name;
    public $gender;

   public function __construct($ts_name, $ts_gender){
    $this->name = $ts_name;
    $this->gender = $ts_gender;
   }
}
//Bước 2: Tạo 2 hàng đợi (sử dụng SPL)
//Bước 3: Tạo một số dancer nam và dancer nữ. Lần lượt thêm các dancer nam và nữ vào trong hàng đợi tương ứng
$nam = new SplQueue();
$nam->enqueue(new Dancer('Phong','nam'));
$nam->enqueue(new Dancer('Nho','nam'));
$nam->enqueue(new Dancer('Tam','nam'));
$nam->rewind();

$nu = new SplQueue();
$nu->enqueue(new Dancer('Huyen','nu'));
$nu->enqueue(new Dancer('N.Anh','nu'));
$nu->rewind();

// Bước 4: Viết hàm để lấy ra người đứng đầu hàng nam và người đứng đầu hàng nữ
echo '<br> Nguoi dung dau hang nam: ';
echo '<pre>';
print_r($nam->current());
echo '</pre>';

echo '<br> Nguoi dung dau hang nu: ';
echo '<pre>';
print_r($nu->current());
echo '</pre>';

$pairs = [];
$nuWaiting = [];
$namWaiting = [];
// Bước 5: Viết kịch bản
// Chay vovng lap neu mot trong hai hang co nguoi
while ($nam->valid() || $nu->valid()){
    // neu nam va nu deu valid,ghep cap
    if($nam->valid() && $nu->valid()){
        $pairs[] = [
            'nam' => $nam->current(),
            'nu'   => $nu->current(),
        ];
        $nam->next();
        $nu->next();

        // Nam co, nu khong co
    }elseif($nam->valid() && !$nu->valid()){
        $namWaiting[] = $nam->current();
        $nam->next();
        // nu co, nam khong co
    }elseif($nu->valid() && !$nam->valid()){
        $nuWaiting[] = $nu->current();
        $nu->next();
    }
    echo '<pre>';
    print_r($pairs);
    print_r($namWaiting);
    print_r($nuWaiting);
    echo '</pre>';
}




