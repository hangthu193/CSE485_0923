<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
</head>
<body>
<div class="container-fluid">
    <div class="row">
        
        <div class="col-md-9 main">

            <div class="main-content vh-100 p-3">
                <h3 class=" text-center text-uppercase">Sửa thông tin bài hát</h3>
                <a class="btn btn-primary mb-3" href="<?php echo DOMAIN."/public"?>">Trở về trang chủ</a>
                <form action="<?php echo DOMAIN ."/public/index.php?action=update"?>" method="post">
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            ID
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="id" id="id" class="form-control" value="<?php echo $baihat->getId() ?>">
                        </div>
                    </div>
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            Tên bài hát
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="singname" id="singname" class="form-control" value="<?php echo $baihat->getTenBaiHat() ?>" required>
                        </div>
                    </div>
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            Ca sĩ
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="peoplename" id="peoplename" class="form-control" value="<?php echo $baihat->getCaSi() ?>" required>
                        </div>
                    </div>
                    <div class="row input-group mb-3">
                        <div class="col-md-4 ">
                            ID thể loại
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="idtheloai" id="idtheloai" class="form-control" value="<?php echo $baihat->getIdTheLoai() ?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-success" name="sbmSave">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>