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
    
    <title>Homepage</title>
</head>
<body>
<div class = "container">
        <h3 class="text-center text-uppercase text-success my-3">Thể Loại</h3>
        <a href="<?= DOMAIN.'app/views/Sings/baiHat_them.php'; ?>" class = 'btn btn-success'>Thêm mới</a>
        <a href="" class="btn btn-success">Bài hát</a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên Thể Loại</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($theloais as $theloai){
                ?>
                        <tr>
                        <th scope="row"><?php echo $theloai->getId();?></th>
                        <td><?php echo $theloai->getTenTheLoai();?></td>
                        
                        <td>
                            <a href="<?= DOMAIN.'app/views/Sings/baiHat_Sua.php?id='.$theloai->getId(); ?>"><i class="bi bi-pencil-square"></i></a>
                        </td>
                        <td>
                                <a href="" data-bs-toggle="modal" data-bs-target="#deleteModal<?= $theloai->getId(); ?>">
                                    <i class="bi bi-trash3"></i>
                                </a>
                                <!-- Modal -->
                                <div class="modal fade" id="deleteModal<?= $baihat->getId(); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">DELETE User</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure detele the user have id: <?= $baihat->getId(); ?>?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <a href="Sings/baiHat_xoa_preocess.php?id='.$baihat->getId(); ?>" class="btn btn-success">OK</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </td>
                </tr>
                <?php
                    }
                ?>
                
            </tbody>
        </table>
    </div>
<script src="./libs/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>