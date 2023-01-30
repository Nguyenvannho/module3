<?php 
include_once "Model.php";
class Blog extends Model {

    public function all(){
        // Viet cau sql
        $sql = "SELECT * FROM `blogs`";
        $stmt= $this->conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);//array
        $items = $stmt->fetchAll();
        return $items;
    }
    public function find($id){
          //lay du lieu theo ID
          $sql = "SELECT * FROM `blogs` WHERE id = $id";
          //Debug sql
          // var_dump($sql);
          $stmt = $this->conn->query($sql);
          $stmt->setFetchMode(PDO::FETCH_ASSOC);//array
          //Lấy về dữ liệu duy nhat
          $row = $stmt->fetch();
          return $row;
    }
    public function save($data){
        // echo '<pre>';
        // print_r($data);
        // die();
        $title = $data['title'];
        $description = $data['description'];

        $sql = "INSERT INTO `blogs` (`title`,`description`)
         VALUES ('$title', '$description')";

        // in ra sql
        // var_dump($sql);
        // die();

        //Thuc hien truy van
        $this->conn->exec($sql);
    }
    public function update($id,$data){
        $title = $data['title'];
        $description = $data['description'];
        $sql = "UPDATE `blogs` SET
        `title` = '$title',
        `description` = '$description',
          WHERE `blogs`.`id` = $id";
          //debug sql

          // thuc hien truy van
          $this->conn->exec($sql);
    }
    public function delete($id){
        $sql = "DELETE FROM blogs WHERE id = $id";
        //Debug sql
        // var_dump($sql);
        //Thuc hien truy van
        $this->conn->exec($sql);
    }
}