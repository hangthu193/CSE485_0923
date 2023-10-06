<?php 
    require_once APP_ROOT.'/app/models/BaiHat.php';
    require_once APP_ROOT . "/app/libs/DBConnection.php";
    class BaiHatService{
        public static function getAllBaiHat(){
            //buoc1: ketnoi db
            try{
                $pdo = new DBConnection();
                $conn = $pdo->getConnection();
                $sql = "SELECT * FROM baihat ORDER BY id DESC";
                $stmt = $conn->query($sql);

                $BaiHats = [];
                while($row = $stmt->fetch()){
                    $baihat = new BaiHat($row['id'],$row['tenBaiHat'],$row['caSi'],$row['idTheLoai']);
                    $BaiHats[] = $baihat;
                }
                return $BaiHats;
            }catch(PDOException $e){
                

            }
        }
        public static function create($tenBaiHat, $caSi, $idTheLoai){
            $pdo = new DBConnection();
            $conn = $pdo->getConnection();
            $sql = "INSERT INTO baihat (tenBaiHat, caSi, idTheLoai) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$tenBaiHat, $caSi, $idTheLoai]);
            
        }
        public static function delete($id)
            {
                $pdo = new DBConnection();
                $conn = $pdo->getConnection();
                $sql = "delete from baihat where id = ?";
                $stmt=$conn->prepare($sql);
                $stmt->execute([$id]);
            }
        public static function findById($id)
            {
                $pdo = new DBConnection();
                $conn = $pdo->getConnection();
                $sql = "select * from baihat where id=?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$id]);
                $data = $stmt->fetch();
                $baihat = new BaiHat($data['id'],$data['tenBaiHat'],$data['caSi'],$data['idTheLoai']);
                return $baihat;
            }
    
        public static function edit($id,$tenBaiHat, $caSi, $idTheLoai)
            {
                $pdo = new DBConnection();
                $conn = $pdo->getConnection();
                $sql = "UPDATE baihat SET tenBaiHat=?, caSi=?, idTheLoai=? WHERE id=?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$tenBaiHat, $caSi, $idTheLoai,$id]);
            }
    }
?>