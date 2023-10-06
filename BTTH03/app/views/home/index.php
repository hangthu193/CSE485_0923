<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Homepage</title>
</head>
<body>
<div class = "container">
        <h3 class="text-center text-uppercase text-success my-3">Quản lý bài hát</h3>
        <a href="<?php echo DOMAIN . "/public/index.php?action=create" ?>" class = 'btn btn-success'>Thêm mới</a>
        <a href="theloai.php" class="btn btn-success">Thể loại</a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên Bài hát</th>
                <th scope="col">Ca sĩ</th>
                <th scope="col">ID Thể Loại</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($BaiHats as $data){
                ?>
                    <tr>
                        <th scope="row"><?php echo $data->getId();?></th>
                        <td><?php echo $data->getTenBaiHat();?></td>
                        <td><?php echo $data->getCaSi();?></td>
                        <td><?php echo $data->getIdTheLoai();?></td>
                        <td>
                            <a href="<?= DOMAIN . '/public/index.php?action=edit&id='.$data->getId(); ?> "><i class="bi bi-pencil-square"></i></a>
                        </td>
                        <td>
                            <a href="<?= DOMAIN . '/public/index.php?action=delete&id='.$data->getId(); ?>" <?= $data->getId(); ?> onclick=" return confirm('Bạn có chắc chắn muốn xoá?');">
                                    <i class="bi bi-trash3"></i>
                            </a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
                
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</body>
</html>