<?php 
    require_once APP_ROOT.'/app/models/TheLoai.php';
    class TheLoaiService{
        public function getAllTheLoai(){
            //buoc1: ketnoi db
            try{
                $conn = new PDO('mysql:host=localhost;dbname=quanlybaihat','root','');
                $sql = "SELECT * FROM theloai";
                $stmt = $conn->query($sql);

                $theloais = [];
                while($row = $stmt->fetch()){
                    $theloai = new TheLoai($row['id'],$row['tenTheLoai']);
                    $theloais[] = $theloai;
                }
                return $theloais;
            }catch(PDOException $e){
                return $theloais = [];
                //$conn = null;
                //echo $e->getMessage();
            }
        }
    }
?>