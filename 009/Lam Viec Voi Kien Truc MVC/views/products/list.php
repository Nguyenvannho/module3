<a href="index.php?controller=product&action=create"> Thêm mới </a>
<table border="1">
<thead>
    <tr>
        <th>Mã Sản Phẩm</th>
        <th>Tên Sản Phẩm</th>
        <th>Giá Tiền</th>
        <th>Số Lượng</th>
        <th>Công Cụ</th>
    </tr>
</thead>
<tbody>
    <?php foreach( $items as $row ): 
        // echo '<pre>';
        // print_r($row);
        // die();
        ?>
        <tr>
            <td> <?php echo $row['id'];?> </td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['price'];?></td>
            <td><?php echo $row['quantity'];?></td>
            <td>
                <a href="index.php?controller=product&action=edit&id=<?= $row['id'] ;?>">Edit</a> <br>
                <a href="index.php?controller=product&action=destroy&id=<?= $row['id'] ;?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</tbody>
</table>