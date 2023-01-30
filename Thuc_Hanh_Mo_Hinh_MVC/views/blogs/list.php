<a href="index.php?controller=blog&action=create"> Thêm Mới Danh Mục </a>
<table border="1px" style="text-align: center;">
<thead>
    <tr>
        <th>STT</th>
        <th>Tên Danh Mục</th>
        <th>Mô Tả</th>
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
            <td><?php echo $row['title'];?></td>
            <td><?php echo $row['description'];?></td>
            <td>
                <a href="index.php?controller=product&action=edit&id=<?= $row['id'] ;?>">Edit</a> <br>
                <a href="index.php?controller=product&action=destroy&id=<?= $row['id'] ;?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</tbody>
</table>