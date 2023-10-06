<?php 
    if(isset($_POST['sbmSave'])){
        $user = $_POST['name'];
        
        try{
            $conn = new PDO("mysql:host=localhost; dbname=btth01_cse485", "root", "");

            $sql_check = "SELECT * FROM theloai WHERE ten_tloai = '$user'";
            $stmt = $conn -> prepare($sql_check);
            $stmt -> execute();

            if($stmt->rowCount()>0){
                header("Location:admin_add_category.php?error=exsited");
            }else{
                $sql_insert = "INSERT INTO theloai (ten_tloai) VALUES ('$user')";
                $stmt = $conn -> prepare($sql_insert);
                $stmt->execute();
                if($stmt->rowCount()>0){
                    header("Location:admin_categories.php?success=added");
                }
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
?>