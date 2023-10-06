<?php 
require_once APP_ROOT.'/app/services/BaiHatService.php';
class HomeController{
    public function index(){
        
        $BaiHats  = BaiHatService::getAllBaiHat();

        include APP_ROOT.'/app/views/home/index.php';
    }

    public function create(){
        include APP_ROOT . "/app/views/Sings/baiHat_them.php";
    }



    public function store()
    {
        if(isset($_POST['singname']) && isset($_POST['peoplename']) && isset($_POST['idtheloai'])) {
            $tenBaiHat = $_POST['singname'];
            $caSi = $_POST['peoplename'];
            $idTheLoai = $_POST['idtheloai'];
            BaiHatService::create($tenBaiHat, $caSi, $idTheLoai);
            header('Location:' . DOMAIN . "/public/index.php");
        }

    }
    public function delete()
    {
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            BaiHatService::delete($id);
            header('Location:' . DOMAIN . "/public/index.php");
        }
    }
    public function edit(){
        $id = $_GET['id'];
        $baihat = BaiHatService::findById($id);
        include APP_ROOT . "/app/views/Sings/baiHat_Sua.php";
    }

    public function update()
    {
        if(isset($_POST['sbmSave'])) {
            $id = $_POST['id'];
            $tenBaiHat = $_POST['singname'];
            $caSi = $_POST['peoplename'];
            $idTheLoai = $_POST['idtheloai'];
            BaiHatService::edit($id,$tenBaiHat, $caSi, $idTheLoai);
            header('Location:' . DOMAIN . "/public/index.php");
        }
        else {
            echo "thieu du lieu";
        }
    }

}
//chi ra view cua home nho routing dinh tuyen
?>