<?php

    require_once 'config/dbc.php';
    $id = $_GET['id'];
    $query = mysqli_query($connection,"SELECT * FROM channels WHERE id=$id") or die(mysqli_error($connection));
    $row = mysqli_fetch_array($query);

?>
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
    <form name="formAdd" id="formAdd" method="post" action="config/response.php">
        <input id="id" name="id" type="hidden" value="<?php echo $id; ?>">
        <div class="form-group">
            <label for="sony">Sony</label>
            <input type="text" class="form-control" id="sony" name="sony" aria-describedby="sony" placeholder="Sony" value="<?php echo $row['sony']; ?>">
        </div>
        <div class="form-group">
            <label for="bol">Bol</label>
            <input type="text" class="form-control" id="bol" name="bol" placeholder="Bol" value="<?php echo $row['bol']; ?>">
        </div>
        <div class="form-group">
            <label for="samaa">Samaa</label>
            <input type="text" class="form-control" id="samaa" name="samaa" placeholder="Samaa" value="<?php echo $row['samaa']; ?>">
        </div>
        <div class="form-group">
            <label for="ptv">Ptv</label>
            <input type="text" class="form-control" id="ptv" name="ptv" placeholder="Ptv" value="<?php echo $row['ptv']; ?>">
        </div>
        <button type="submit" name="edit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>