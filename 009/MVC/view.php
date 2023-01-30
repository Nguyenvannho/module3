<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if ($persons) {
            foreach ( $persons as $person) {
                echo 'Tên:' . $person->name;
                echo 'Tuổi:' . $person->age;
                echo 'Địa Chỉ:' . $person->address;
                echo "<hr>";
            };
        }
    ?>
</body>
</html>