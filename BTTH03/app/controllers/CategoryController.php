<?php 
    require_once APP_ROOT.'/app/services/TheLoaiService.php';
    class CategoryController{
        public function theloai(){
            // $theloaiService = new TheLoaiService();
            $theloais  = TheLoaiService::getAllTheLoai();

            include APP_ROOT.'/app/views/home/theloai.php';
        }
        public function create(){
            include APP_ROOT . "/app/views/Categories/add.php";
        }
    
    
    
        public function store()
        {
            if(isset($_POST['name'])) {
                $tenTheLoai = $_POST['name'];
                TheLoaiService::create($tenTheLoai);
                header('Location:' . DOMAIN . "/public/theloai.php");
            }
    
        }
        public function delete()
        {
            if(isset($_GET['id'])) {
                $id = $_GET['id'];
                TheLoaiService::delete($id);
                header('Location:' . DOMAIN . "/public/theloai.php");
            }
        }
        public function edit(){
            $id = $_GET['id'];
            $theloai = TheLoaiService::findById($id);
            include APP_ROOT . "/app/views/Categories/edit.php";
        }
    
        public function update()
        {
            if(isset($_POST['sbmSave'])) {
                $id = $_POST['id'];
                $tenTheLoai = $_POST['name'];
                TheLoaiService::edit($id,$tenTheLoai);
                header('Location:' . DOMAIN . "/public/theloai.php");
            }
            else {
                echo "thieu du lieu";
            }
        }
    }

?>