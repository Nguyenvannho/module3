<a href="http://localhost/module3/thi_module_3/index.php?controller=student&action=create"> Thêm mới </a>
<table border="1px" style="text-align: center;">

    <thead>
        <tr>
            <th>Mã Học Sinh</th>
            <th>Họ Tên</th>
            <th>Lớp</th>
            <th>Ngày Sinh</th>
            <th>Giới Tính</th>
            <th>Thông Tin</th>
            <th>Công Cụ</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach(  $items as $key => $row): 
            // echo '<pre>';
            // print_r($row);
            // die();
            ?>
            <tr>
                <td><?php echo ++$key;?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['class'];?></td>
                <td><?php echo $row['day'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td><?php echo $row['information'];?></td>
                <td>
                <a href="index.php?controller=student&action=edit&id=<?= $row['id'] ;?>">Sửa</a> <br>
            <a class="btn btn-danger"onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"href="index.php?controller=student&action=destroy&id=<?= $row['id'] ;?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>