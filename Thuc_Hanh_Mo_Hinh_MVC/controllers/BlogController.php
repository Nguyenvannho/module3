<?php 
include_once 'models/Blog.php';
class BlogController {
    //Goi toi trang danh sach
    public function index() {
        // goi model
        $objBlog = new Blog();
        //Model thao tac voi CSDL, tra ve controller
        $items = $objBlog->all();
        // goi toi trang them moi
        // Truyen du lieu xuong view
        include_once 'views/blogs/list.php';
    }
    public function create() {
        // goi view
        include_once 'views/blogs/create.php';
    }
    // xu ly them moi
    public function store() {
        // echo '<pre>';
        // print_r($_REQUEST);
        // die();
        // lay du lieu tu _REQUEST gan vao mang data
        $data = [
            'title' => $_REQUEST['title'],
            'description' => $_REQUEST['description']
        ];
        // goi model
        $objBlog = new Blog();
        $objBlog->save($data);
 
        // chuyen huong ve trang danh sach
        header("Location: index.php?controller=blog&action=index");
    }
    // goi toi trang chinh sua
    public function edit(){
        $id = $_REQUEST['id'];
        // goi model
        $objBlog = new Blog();
        $item = $objBlog->find($id);
        
        // in du lieu ra
        // echo '<pre>';
        // print_r($item);
        // die();
       
        // truyen xuong view
        include_once 'views/Blogs/edit.php';
    }
    public function update(){
        $id = $_REQUEST['id'];
        // goi model
        $objBlog = new Blog();
        $item = $objBlog->find($id);
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $objBlog->update($id,$_REQUEST);
            header("Location: index.php?controller=blog&action=index");
        }
    }

  //trang xóa
  public function destroy(){
    $id = $_REQUEST['id'];
    $objBlog = new Blog();
    $objBlog->delete($id);
    header("Location: index.php?controller=blog&action=index");
}
    
}