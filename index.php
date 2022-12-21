<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php Crud 3</title>
</head>
<body>
<div class="container mt-5">
    <a href="create.php"><button class="btn btn-primary mb-3">INSERT RECORD</button></a>
    <br>
    <?php
    if(isset($_GET['act']) && isset($_GET['msg'])){
        if($_GET['act']=="success"){ $color="bg-success"; }elseif($_GET['act']=="error"){ $color="bg-danger"; }elseif($_GET['act']=="warning"){ $color="bg-warning"; }
        ?>
        <p id="msg" class="text-white p-2 <?= $color; ?>">
            <?= $_GET['msg'];?>
        </p>
        <?php
    }
    ?>
    <br>
    <table class="table table-hover table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Product Title</th>
            <th scope="col">Product Description</th>
            <th scope="col">Product Sku</th>
            <th scope="col">Product Price</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
            <?php

                require_once 'config/dbc.php';
                $query = mysqli_query($connection,"SELECT * FROM channels")or die (mysqli_error($connection));
                while ($row = mysqli_fetch_array($query)){
            ?>
            <tr>
                <th scope="row"><?php echo $row['id']; ?></th>
                <td><?php echo $row['sony']; ?></td>
                <td><?php echo $row['bol']; ?></td>
                <td><?php echo $row['samaa']; ?></td>
                <td><?php echo $row['ptv']; ?></td>
                <td><a href="edit.php?id=<?php echo $row['id']; ?>"><button class="btn btn-primary">Edit</button></a></td>
                <td><a href="config/response.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are You Sure You Want to Delete this Todo')"><button class="btn btn-danger" name="delete">Delete</button></a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</body>
<script>
    setTimeout(function() {
        $('#msg').hide();
    }, 3000);
</script>
</html>