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

if($_GET['act'] == 'delete'){
    $id = $_GET['id'];
    $query = mysqli_query($connection, "DELETE FROM channels WHERE id=$id") or die(mysqli_error($connection));
    if($query){
        $msg = "Your Record Delete SuccessFully";
        $act = 'success';
        header("Location:../index.php?act=$act&msg=$msg");
    }
    else{
        $msg = 'Your Record Doesn\'\t Delete Added';
        $act = 'error';
        header("Location:../index.php?act=$act&msg=$msg");
    }
}

if(isset($_REQUEST['action']) && $_REQUEST['action']=="change_status"){
    extract($_REQUEST);

    if($status==1){
        $status=0;
    }else{
        $status=1;
    }
    $res = mysqli_query($connection,"UPDATE channels SET status='$status' WHERE id=$id ")or die(mysqli_error($connection));
    if($res){
        $msg="User Status Change Successfully..!";
        $status="success";
        header("location:../index.php?act=$status&msg=$msg");
    }else{
        $msg="Something wents wrong Please Check and try again..!";
        $status="error";
        header("location:../index.php?act=$status&msg=$msg");
    }
}

?>