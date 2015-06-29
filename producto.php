<?php
include("./conexion.php");

$_empresa=1;
if ($_POST['prod_agregar'])	{

	$conec = pg_connect("host=localhost port=5432 dbname=eccipos user=postgres password=3cc1.POS") or die("problemas de conexion " .pg_last_error());
	$query =	"INSERT INTO producto(id_producto,nombre,marca,unidad,cantidad,minimo, precio, empresa) 
				VALUES ('$_POST[prod_id]' ,'$_POST[prod_nombre]' ,'$_POST[prod_marca]' ,'$_POST[prod_unidad]' ,'$_POST[prod_cantidad]' ,'$_POST[prod_minimo]','$_POST[prod_precio]','$_empresa')";
	pg_query($conec,$query) or die('La consulta fallo: ' . pg_last_error());

	echo "Producto Agregado";
	header('Location:./productoform.php');
} 

if ($_POST['prod_modificar'])	{	
	$conec = pg_connect("host=localhost port=5432 dbname=eccipos user=postgres password=3cc1.POS") or die("problemas de conexion " .pg_last_error());
	$query = 	"UPDATE producto SET nombre = '$_POST[prod_nombre]' , marca = '$_POST[prod_marca]' , 
						unidad = '$_POST[prod_unidad]' , cantidad = '$_POST[prod_cantidad]', precio = '$_POST[prod_precio]',minimo = '$_POST[prod_minimo]'
						WHERE id_producto = '$_POST[prod_id]'";

	pg_query($conec,$query) or die('La consulta fallo: ' . pg_last_error());

	echo "Producto Modificado";
	header('Location:./productoform.php');
}

pg_close($conec);
?>
