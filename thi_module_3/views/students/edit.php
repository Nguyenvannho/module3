<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<style>
    #date1 {
        width: 97%;
    }

    .error {
        color: #FF0000;
    }

    #table2 {
        text-align: center;
        border-collapse: collapse;
        width: 1500px;
        border: solid 1px #ccc;
    }

    form {
        width: 450px;
    }
    </style>
    <form action="index.php?controller=student&action=update&id=<?php echo  $item['id']?>" method="post">
    <table>
    <tr>
        <td>Họ Tên</td> 
        <td><input type="text" class="form-control" name="name" placeholder="Nhập Họ Tên" value="<?= $item['name'];?>"></td>
    </tr>
    <tr>
        <td>Lớp</td> 
        <td><input type="text" class="form-control" name="class" placeholder="Nhập Lớp" value="<?= $item['class'];?>"></td>
    </tr>
    <tr>
        <td>Ngày Sinh</td> 
        <td><input type="date" class="form-control" name="day" placeholder="Nhập Ngày Sinh" value="<?= $item['day'];?>"></td>
    </tr>

    <tr>
        <td>Giới Tính</td>
    <td>  <select id="select" name="gender">
                                <?php
                                if($item['gender']==0){

                                ?>
                                <option selected value="Nữ">Nữ</option>
                                <option value="1">Nam</option>
                                <?php
                                }else{   
                                ?>
                                   <option  value="Nữ">Nữ</option>
                                    <option selected value="Nam">Nam</option>
                                <?php
                                }
                                ?>
                            </select>
                            </td> 
    </tr>

    <tr>
        <td>Thông Tin</td><br>
        <td><input type="text"  class="form-control" name="information" placeholder="Nhập Thông Tin" value="<?= $item['information'];?>"></td>
    </tr>
    <tr>
    <td><button type="submit" class="btn btn-primary">Thêm</button></td>
    </tr>
    </table>
    </form>
</body>
</html>