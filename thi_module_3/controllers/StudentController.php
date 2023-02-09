<?php 
include_once 'models/Student.php';
class StudentController extends Controller {
    //Goi toi trang danh sach
    public function index() {
        // goi model
        $objStudent = new Student();
        //Model thao tac voi CSDL, tra ve controller
        $items = $objStudent->all();
        // goi toi trang them moi
        // Truyen du lieu xuong view
        include_once 'views/students/index.php';
    }
    public function create() {
        // goi view
        include_once 'views/students/create.php';
    }
    // xu ly them moi
    public function store() {
        // echo '<pre>';
        // print_r($_REQUEST);
        // die();
        // lay du lieu tu _REQUEST gan vao mang data
        $data = [
            'name' => $_REQUEST['name'],
            'class' => $_REQUEST['class'],
            'day' => $_REQUEST['day'],
            'gender' => $_REQUEST['gender'],
            'information' => $_REQUEST['information']
        ];
        // goi model
        $objStudent = new Student();
        $objStudent->save($data);
 
        // chuyen huong ve trang danh sach
        
        $this->redirect('index.php?controller=student&action=index');
        }
    
    // goi toi trang chinh sua
    public function edit(){
        $id = $_REQUEST['id'];
        // goi model
        $objStudent = new Student();
        $item = $objStudent->find($id);
        
        
        // in du lieu ra
        // echo '<pre>';
        // print_r($item);
        // die();
       
        // truyen xuong view
        include_once 'views/Students/edit.php';
    }
    public function update(){
        $id = $_REQUEST['id'];
        // goi model
        $objStudent = new Student();
        $item = $objStudent->find($id);
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $objStudent->update($id,$_REQUEST);
            $this->redirect('index.php?controller=student&action=index');
        }
    }

  //trang xóa
  public function destroy(){
    $id = $_REQUEST['id'];
    $objStudent = new Student();
    $objStudent->delete($id);
    $this->redirect('index.php?controller=student&action=index');
}
    
}