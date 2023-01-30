<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <form action="index.php?controller=product&action=update&id=<?php echo  $item['id']?>" method="post">
    <table>
    <tr>
        <td>Tên Tiêu Đề:</td>
        <td><input type="text" name="title" class="form-control" placeholder="Nhập Tên Tiêu Đề" value="<?= $item['title'];?>"></td>
    </tr>
    <tr>
        <td>Giá Tiền :</td>
        <td><input type="text" name="description" class="form-control" placeholder="Nhập Giá Tiền" value="<?= $item['description'];?>"></td>
    </tr>
    <tr>
        <td><input type="submit" class="btn btn-primary" name="submit" value="Thêm"></td>
    </tr>
    </table>
    </form>
</body>
</html>