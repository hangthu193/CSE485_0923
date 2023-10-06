<?php

try{
    $conn = new PDO("mysql:host=localhost; dbname=btth01_cse485", "root", "");
    $sql = "SELECT * FROM theloai";
    $start = $conn->prepare("SELECT * FROM theloai");

    $start->execute();

    $users = $start->fetchAll();


}
catch(PDOException $e){
    echo $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="category.css">
    <link rel="stylesheet" href="./lib/fontawesome-free-6.4.0-web/fontawesome-free-6.4.0-web/css/all.css">
</head>
<body>
    <div class="main-header">
        <div claas = "header">
            <div class = "container__left">
                <span class="container__left-text">Administration</span>
                <ul class="container__left-list list-unstyled">
                    <li>
                        <a href="#" class="text-decoration-none text-black text-uppercase">Trang chủ</a>
                    </li>
                    <li>
                        <a href="#" class="text-decoration-none text-black text-uppercase">Trang ngoài</a>
                    </li>
                    <li>
                        <a href="#" class="text-decoration-none text-black text-uppercase">Thể loại</a>
                    </li>
                    <li>
                        <a href="#" class="text-decoration-none text-black text-uppercase">Tác giả</a>
                    </li>
                    <li>
                        <a href="#" class="text-decoration-none text-black text-uppercase">Bài viết</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main">
            <div class="main_top">
				<a href="admin_add_category.php" class="btn btn-success"><span>them moi</span></a>					
			</div>
            <table class="table table-striped table-hover">
                <thead>
					<tr>
						<th>#</th>
						<th>Tên thể loại</th>
						<th>Sửa</th>
						<th>Xóa</th>
					</tr>
				</thead>
                <tbody>
                        <?php 
                        foreach($users as $theloai){
                            
                        ?>
                        <tr>
                            <td><?= $theloai[0]; ?></td>
                            <td><?= $theloai[1]; ?></td>
                            <td><a href="./int/footer.php?id=1" class="edit"><i class="fas fa-pen"></i></a></td>
                            <td><a href="./int/footer.php?id=1" class="delete"><i class="fas fa-trash" ></i></a></td>
                        </tr>
                        <?php
                        }
                        ?>
                    
                </tbody>
			</table>
        </div>
        <div class="footer">
            <span class="footer-title">TLU'S MUSIC GARDEN</span>
        </div>
    </div>
</body>
</html>