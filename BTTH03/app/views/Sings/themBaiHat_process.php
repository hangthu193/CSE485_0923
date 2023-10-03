<?php 
    if(isset($_POST['sbmSave'])){
        $singuser = $_POST['singname'];
        $peoplename = $_POST['peoplename'];
    
        try{
            $conn = new PDO("mysql:host=localhost;dbname=quanlybaihat","root","");

            $sql_check = "SELECT * FROM baihat WHERE tenBaiHat = '$singuser'";
            $stmt = $conn -> prepare($sql_check);
            $stmt -> execute();

            if($stmt->rowCount()>0){
                header("Location:baiHat_them.php?error=exsited");
            }else{
                $sql_insert = "INSERT INTO baihat (tenBaiHat, caSi) VALUES ('$singuser', '$peoplename')";
                $stmt = $conn -> prepare($sql_insert);
                $stmt->execute();
                if($stmt->rowCount()>0){
                    header("Location: baiHat_them.php?success=added");
                }
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
?>