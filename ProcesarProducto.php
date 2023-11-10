<?php
include('conexion.php');
$miconexion =new ConexionMysql();
$miconexion->CrearConexion();
$nombre=$_POST['Nombre'];
$precio=$_POST['Precio'];
$inventario=$_POST['Inventario'];
$categoria=$_POST['Categoria'];

//Insertar Registros:
if($_POST['btnRegistrar']){
    $sql="insert into producto(Nombre,Precio,Inventario,Categoria) values( '".$nombre."' ,'".$precio."', '".$inventario."', '".$categoria."')";
    $result=$miconexion->EjecutarSQL($sql);
    if($result){
        $numfila=$miconexion->ObtenerFilasAfectadas();
        if($numfila>0){
            echo"REgistro exitosos se agrego a la BD";
        }
        else{
            echo"NO se pudo insertar.";
        }

    }
}