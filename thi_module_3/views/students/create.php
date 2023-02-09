<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
  <div class="contaner">
    <div class="row">
<form action="index.php?controller=student&action=store" method="post">
  <div class="mb-3">
    <label for="" class="form-label">Họ Tên</label>
    <input type="text" class="form-control" name="name" aria-describedby="">
    <div id="" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Lớp</label>
    <input type="text" class="form-control" name="class" aria-describedby="">
    <div id="" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Ngày Sinh</label>
    <input type="date" class="form-control" name="day" aria-describedby="">
    <div id="" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Giới Tính</label>
    <select name="gender">
    <option value="">--Chọn--</option>
    <option value="Nữ" selected="selected">Nữ</option>
    <option value="Nam">Nam</option>
</select>
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Thông Tin</label>
    <input type="text" class="form-control" name="information" aria-describedby="">
    <div id="" class="form-text"></div>
  </div>
  <button type="submit" class="btn btn-primary">Thêm</button>
</form>