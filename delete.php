<?php

    require_once 'config/dbc.php';
    $id = $_GET['id'];
    $query = mysqli_query($connection,"SELECT * FROM channels WHERE id=$id") or die (mysqli_error($connection));
    $row = mysqli_fetch_array($query);

    mysqli_query($connection,"DELETE FROM channels WHERE id=$id") or die (mysqli_error($connection));

    header("Location:index.php");

?>