<?php 
include_once "Model.php";
class Student extends Model {

    public function all(){
        // Viet cau sql
        $sql = "SELECT * FROM `students`";
        $stmt= $this->conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);//array
        $items = $stmt->fetchAll();
        return $items;
    }
    public function find($id){
          //lay du lieu theo ID
          $sql = "SELECT * FROM `students` WHERE id = $id";
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
        $name = $data['name'];
        $class = $data['class'];
        $day = $data['day'];
        $gender = $data['gender'];
        $information = $data['information'];
        $sql = "INSERT INTO `students` (`name`,`class`,`day`,`gender`,`information`)
         VALUES ('$name', '$class','$day','$gender','$information')";

        // in ra sql
        // var_dump($sql);
        // die();

        //Thuc hien truy van
        $this->conn->exec($sql);
    }
    public function update($id,$data){
        $name = $data['name'];
        $class = $data['class'];
        $day = $data['day'];
        $gender = $data['gender'];
        $information = $data['information'];
        $sql = "UPDATE `students` SET
        `name` = '$name',
        `class` = '$class',
        `day` = '$day',
        `gender` = '$gender',
        `information` = '$information'
          WHERE `students`.`id` = $id";
          //debug sql

          // thuc hien truy van
          $this->conn->exec($sql);
    }
    public function delete($id){
        $sql = "DELETE FROM students WHERE id = $id";
        //Debug sql
        // var_dump($sql);
        //Thuc hien truy van
        $this->conn->exec($sql);
    }
}