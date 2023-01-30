<?php 
include_once "Model.php";
class Product extends Model {

    public function all(){
        // Viet cau sql
        $sql = "SELECT * FROM `products`";
        $stmt= $this->conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);//array
        $items = $stmt->fetchAll();
        return $items;
    }
    public function find($id){
          //lay du lieu theo ID
          $sql = "SELECT * FROM `products` WHERE id = $id";
          //Debug sql
          // var_dump($sql);
          $stmt = $this->conn->query($sql);
          $stmt->setFetchMode(PDO::FETCH_ASSOC);//array
          //Lấy về dữ liệu duy nhat
          $row = $stmt->fetch();
          return $row;
    }
    public function save($data){
        $name = $data['name'];
        $price = $data['price'];
        $quantity = $data['quantity'];
        $description = $data['description'];

        $sql = "INSERT INTO `products` (`name`, `price`, `quantity`,`description`)
         VALUES ('$name', '$price', '$quantity', '$description')";
        //Thuc hien truy van
        $this->conn->exec($sql);
    }
    public function update($id,$data){
        $name = $data['name'];
        $price = $data['price'];
        $quantity = $data['quantity'];
        $description = $data['description'];
        $sql = "UPDATE `products` SET
        `name` = '$name',
        `price` = '$price',
         `quantity` = '$quantity',
         `description` = '$description'
          WHERE `products`.`id` = $id";
          //debug sql

          // thuc hien truy van
          $this->conn->exec($sql);
    }
    public function delete($id){
        $sql = "DELETE FROM products WHERE id = $id";
        //Debug sql
        // var_dump($sql);
        //Thuc hien truy van
        $this->conn->exec($sql);
    }
}
// khoi tao doi tuong
$product = new Product();
$data = [
    'name' => 'Ao',
    'price' => 2222,
    'quantity' => '2',
    'description' => 'Ao Am',
];
// $user->save($userData);
// - Gọi phương thức all và in ra kết quả
echo '<pre>';
print_r($product->all());
echo '</pre>';
// Gọi phương thức find và truyền vào id là 1 sau đó in ra kết quả
echo '<pre>';
print_r($product->find(2));
echo '</pre>';
// Gọi phương thức update và truyền vào id và mảng dữ liệu
$data = [
    'name' => 'Ao',
    'price' => 2222,
    'quantity' => '2',
    'description' => 'Ao Am',
];

$product->update(2,$data);
// Gọi phương thức delete và truyền vào id
$product->delete(1);
// - Gọi phương thức all và in ra kết quả
echo '<pre>';
print_r($product->all());
echo '</pre>';






