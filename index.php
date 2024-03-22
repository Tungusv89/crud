<?php
include 'foo.php';
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3c104d61cf.js" crossorigin="anonymous"></script>
    <title>CRUD lite</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <button class="btn btn-success mt-2" data-bs-toggle="modal" data-bs-target="#create"><i class="fa fa-plus"></i></button>
            <table class="table table-striped table-hover mt-2">
                <thead class="th-dark">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
                </thead>
                <tbody>
                <?php foreach ($result as $item) { ?>
                    <tr>
                        <td><?php echo $item->id; ?></td>
                        <td><?php echo $item->name; ?></td>
                        <td><?php echo $item->email; ?></td>
                        <td>
                            <a href="?id=<?php echo $item->id; ?>" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit<?php echo $item->id; ?>"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?php echo $item->id; ?>"><i class="fa fa-trash-alt"></i></a>
                        </td>
                    </tr>
                    <!-- Modal edit -->
                    <div class="modal fade" id="edit<?php echo $item->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Изменить запись</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="?id=<?php echo $item->id; ?>" method="post">
                                        <div class="form-group">
                                            <small>Имя</small>
                                            <input type="text" class="form-control" name="name" value="<?php echo $item->name; ?>">
                                        </div>
                                        <div class="form-group">
                                            <small>Email</small>
                                            <input type="text" class="form-control" name="email" value="<?php echo $item->email; ?>">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                                            <button type="submit" class="btn btn-primary" name="edit">Сохранить</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Modal delete -->
                    <div class="modal fade" id="delete<?php echo $item->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Удалить запись №<?php echo $item->id; ?></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="?id=<?php echo $item->id; ?>" method="post">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                                    <button type="submit" class="btn btn-danger" name="delete">Удалить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal create -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Добавить запись</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <small>Имя</small>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <small>Email</small>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn btn-primary" name="add">Сохранить</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>
