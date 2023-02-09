<?php
class Controller {

    // Gọi view cho ứng dụng
    public function view( $viewName,$data = [] ){
        /*
        //Demo data được truyền vào
        $data = [
            'items' => $items,
            'id'    => 1
        ];
        */
        if( count($data) ){
            extract($data);
        }
        /*
        sau khi gọi extract, ta có 2 biến mới từ mảng, 
        tên biến là chỉ số, giá trị biến là value của mảng
        $items
        $id
        */
        include_once 'views/'.$viewName;
    }

    // Chuyển hướng
    public function redirect($url){
        ?>
        <script>
            window.location.href = '<?= $url; ?>';
        </script>
        <?php
        // header("Location: $url");
        die();
    }
}