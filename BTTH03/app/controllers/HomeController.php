<?php 

class HomeController{
    public function index(){
        require_once APP_ROOT.'/app/services/BaiHatService.php';
        $baihatService = new BaiHatService();
        $BaiHats  = $baihatService ->getAllBaiHat();

        include APP_ROOT.'/app/views/home/index.php';
    }
    public function theloai(){
        require_once APP_ROOT.'/app/services/TheLoaiService.php';
        $theloaiService = new TheLoaiService();
        $theloais  = $theloaiService ->getAllTheLoai();

        include APP_ROOT.'/app/views/home/theloai.php';
    }

}
//chi ra view cua home nho routing dinh tuyen
?>