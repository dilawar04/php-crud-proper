<?php

require_once 'dbc.php';

if (isset($_REQUEST['create']))
{
    extract($_REQUEST);

    $query = mysqli_query($connection,"INSERT INTO channels(sony,bol,samaa,ptv)
        VALUES ('$sony','$bol','$samaa','$ptv')")or die (mysqli_error($connection));
    if($query){
        $msg = 'Your Record Added Successfully';
        $status = 'success';
        header("Location:../index.php?act=$status&msg=$msg");
    }else{
        $msg = "SomeThing Went Wrong";
        $status = 'error';
        header("Location:../index.php?act=$status&msg=$msg");
    }
}

if (isset($_REQUEST['edit']))
{
    extract($_REQUEST);

   $query = mysqli_query($connection,"UPDATE channels SET sony='$sony', bol='$bol', samaa='$samaa', ptv='$ptv' WHERE id=$id")or die (mysqli_error($connection));

    if($query){
        $msg = 'Your Record Edit Successfully';
        $status = 'success';
        header("Location:../index.php?act=$status&msg=$msg");
    }else{
        $msg = "SomeThing Went Wrong";
        $status = 'error';
        header("Location:../index.php?act=$status&msg=$msg");
    }

}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = mysqli_query($connection,"SELECT * FROM channels WHERE id=$id") or die (mysqli_error($connection));
    $row = mysqli_fetch_array($query);

    $delete = mysqli_query($connection,"DELETE FROM channels WHERE id=$id") or die (mysqli_error($connection));

    if($delete){
        $msg = 'Your Record Delete Successfully';
        $status = 'success';
        header("Location:../index.php?act=$status&msg=$msg");
    }else{
        $msg = "SomeThing Went Wrong";
        $status = 'error';
        header("Location:../index.php?act=$status&msg=$msg");
    }
    
}

?>