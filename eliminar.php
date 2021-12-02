<?php
    include 'conexion.php';
    $codigo=$_GET['codigo'];
    $sql="delete from productos where codigo='".$codigo."'";
    mysqli_query($con,$sql);
    header('location:index.php');
?>