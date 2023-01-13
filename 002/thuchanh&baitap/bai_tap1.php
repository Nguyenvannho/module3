<?php 
class User {
    protected string $name;
    protected string $email;
    public int $role;

    public function getInfo(){
        return $this->isAdmin()."<br>"."Tên: " .$this->name."<br>"."Email: ".$this->email;
    }
    public function isAdmin(){
        if($this->role == 1){
            echo 'Admin';
        }else{
            echo "Người dùng";
        }
    }
    public function setName($name){
        $this->name = $name;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setRole($role){
        $this->role = $role;
    }
}
// khởi tạo đối tượng
$admin = new User();
// gọi phương thức thiết lập giá trị cho thuộc tính name
$admin->setName("Nguyễn Văn Tèo");
// gọi phương thức thiết lập giá trị cho thuộc tính email
$admin->setEmail("teooiteoa12345@gmail.com");
// gọi phương thức thiết lập giá trị cho thuộc tính role
$admin->setRole(4);
// in ra gia tri thuoc tinh
echo $admin->getInfo();

