<?php
    include 'conexion.php';
    $codigo=$_GET['codigo'];
    $sql="select * from productos where codigo='".$codigo."'";
    $resultado=mysqli_query($con,$sql);
        while($fila=mysqli_fetch_assoc($resultado)){
?>
<div>
    <form>
        <input type="hidden" name="txtcodigo" value="<?php echo $fila['codigo'] ?>">
        <label>Usuario:</label><br>
        <input type="text" name="txtnombre" value="<?php echo $fila['nombre'] ?>"><br>
        <label>Cantidad:</label><br>
        <input type="text" name="txtcantidad" value="<?php echo $fila['cantidad'] ?>"><br><br>
        <input type="submit" name="" value="Actualizar">
    </form>
    <?php } ?>
</div>
<?php
    $codigo=$_GET['txtcodigo'] ??"";
    $nombre=$_GET['txtnombre'] ??"";
    $cantidad=$_GET['txtcantidad'] ??"";
    if($nombre!=null || $cantidad!=null){
        $sql2="update productos set nombre='".$nombre."', cantidad='".$cantidad."' where codigo='".$codigo."'";
        mysqli_query($con,$sql2);
        if($nombre=1){
            header("location:index.php");
        }
    }

?>