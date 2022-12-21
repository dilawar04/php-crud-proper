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
        <div class="form-group">
            <label for="sony">Sony</label>
            <input type="text" class="form-control" id="sony" name="sony" aria-describedby="sony" placeholder="Sony">
        </div>
        <div class="form-group">
            <label for="bol">Bol</label>
            <input type="text" class="form-control" id="bol" name="bol" placeholder="Bol">
        </div>
        <div class="form-group">
            <label for="samaa">Samaa</label>
            <input type="text" class="form-control" id="samaa" name="samaa" placeholder="Samaa">
        </div>
        <div class="form-group">
            <label for="ptv">Ptv</label>
            <input type="text" class="form-control" id="ptv" name="ptv" placeholder="Ptv">
        </div>
        <button type="submit" name="create" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>