<?php
    define('ROOT_URL','http://bai_tap_lam_truoc_tet.test/');
    define('ROOT_DIR', dirname(__FILE__) );
    $username   = 'root';
    $password   = '';
    $database   = 'bai_tap_lam_truoc_tet';
    try {
        $conn = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
    } catch (Exception $e) {
        // echo $e->getMessage();
        echo '<h1>Khong the ket noi CSDL</h1>';
    }

    

    