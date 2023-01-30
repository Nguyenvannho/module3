<?php 
include_once 'models/Product.php';

class ProductController {
    //Goi toi trang danh sach
    public function index() {
        // goi model
        $objProduct = new Product();
        //Model thao tac voi CSDL, tra ve controller
        $items = $objProduct->all();
        // goi toi trang them moi
        // Truyen du lieu xuong view
        include_once 'views/products/list.php';
    }
    public function create() {
        // goi view
        include_once 'views/products/create.php';
    }
    // xu ly them moi
    public function store() {
        // echo '<pre>';
        // print_r($_REQUEST);
        // die();
        // lay du lieu tu _REQUEST gan vao mang data
        $data = [
            'name' => $_REQUEST['name'],
            'price' => $_REQUEST['price'],
            'quantity' => $_REQUEST['quantity'],
        ];
        // goi model
        $objProduct = new Product();
        $objProduct->save($data);

        // chuyen huong ve trang danh sach
        header("Location: index.php?controller=product&action=index");
    }
    // goi toi trang chinh sua
    public function edit(){
        $id = $_REQUEST['id'];
        // goi model
        $objProduct = new Product();
        $item = $objProduct->find($id);
        
        // in du lieu ra
        // echo '<pre>';
        // print_r($item);
        // die();
       
        // truyen xuong view
        include_once 'views/products/edit.php';
    }
    public function update(){
        $id = $_REQUEST['id'];
        // goi model
        $objProduct = new Product();
        $item = $objProduct->find($id);
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $objProduct->update($id,$_REQUEST);
            header("Location: index.php?controller=product&action=index");
        }
    }

  //trang xóa
  public function destroy(){
    $id = $_REQUEST['id'];
    $objProduct = new Product();
    $objProduct->delete($id);
    header("Location: index.php?controller=product&action=index");
}
    
}