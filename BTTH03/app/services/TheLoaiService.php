<?php 
    require_once APP_ROOT.'/app/models/TheLoai.php';
    require_once APP_ROOT . "/app/libs/DBConnection.php";
    class TheLoaiService{
        public static function getAllTheLoai(){
            //buoc1: ketnoi db
            try{
                $pdo = new DBConnection();
                $conn = $pdo->getConnection();
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
        public static function create($tenTheLoai){
            $pdo = new DBConnection();
            $conn = $pdo->getConnection();
            $sql = "INSERT INTO theloai (tenTheLoai) VALUES (?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$tenTheLoai]);
            
        }
        public static function delete($id)
            {
                $pdo = new DBConnection();
                $conn = $pdo->getConnection();
                $sql = "delete from theloai where id = ?";
                $stmt=$conn->prepare($sql);
                $stmt->execute([$id]);
            }
        public static function findById($id)
            {
                $pdo = new DBConnection();
                $conn = $pdo->getConnection();
                $sql = "select * from theloai where id=?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$id]);
                $data = $stmt->fetch();
                $theloai = new TheLoai($data['id'],$data['tenTheLoai']);
                return $theloai;
            }
    
        public static function edit($id,$tenTheLoai)
            {
                $pdo = new DBConnection();
                $conn = $pdo->getConnection();
                $sql = "UPDATE theloai SET tenTheLoai=? WHERE id=?";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$tenTheLoai,$id]);
            }
    }
?>