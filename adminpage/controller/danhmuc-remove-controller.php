<?php
session_start();
include_once '../ketnoisql/ketnoi.php';
if($_SESSION['user_name']){
    $id_dm_sp=$_GET["id_dm_sp"];
    
    $conn=mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
    $sql = "DELETE FROM danhmucsp WHERE id_dm_sp = '$id_dm_sp'";
    $query = mysqli_query($conn, $sql);
    header('location:../quantri.php?page_layout=quanlydanhmucsanpham');
}
else{
    header('location:../index.php');
}
?>
