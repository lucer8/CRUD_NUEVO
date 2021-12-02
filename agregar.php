<div>
    <form>
        <label>Nombre:</label><br>
        <input type="text" name="txtnombre"><br>
        <label>Email:</label><br>
        <input type="text" name="txtcantidad"><br><br>
        <input type="submit" name="" value="Agregar">
        <a href="index.php">Regresar</a>
    </form>
</div>
<?php
    include 'conexion.php';
    $nombre=$_GET['txtnombre'] ??"";
    $cantidad=$_GET['txtcantidad'] ??"";
    if($nombre!=null || $cantidad!=null){
        $sql="insert into productos(nombre, cantidad) values('".$nombre."', '".$cantidad."')";
        mysqli_query($con,$sql);
        if ($nombre=1){
            header("location:index.php");
        }
    }
?>