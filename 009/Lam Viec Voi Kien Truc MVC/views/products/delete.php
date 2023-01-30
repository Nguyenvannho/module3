<?php
    // echo '<pre>';
    // print_r($_GET);
    // die();


    //Lay gia tri ID tren URL
    $id = $_GET['id'];
    //Debug id
    // var_dump($id);

    $sql = "DELETE FROM products WHERE id = $id";
    //Debug sql
    // var_dump($sql);

    //Thuc hien truy van
    $conn->exec($sql);

    //Chuyen huong ve trang danh sach
    header("Location: index.php?controller=Product&page=index");
