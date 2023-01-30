<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<form class="container-fluid px-4" action="index.php?controller=product&action=store" method="post">
Sản Phẩm : <td>
            <input type="text" class="form-control" name="title"> <br>
            </td>
Giá Tiền: <td> 
          <th><input type="text" class="form-control" name="price"> <br></th> 
        </td>
Số Lượng: <input type="text" class="form-control" name="quantity"> <br>
Mô Tả: <input type="text" class="form-control" name="description"> <br>
    <input type="submit" class="btn btn-primary" value="Thêm">
</form>

