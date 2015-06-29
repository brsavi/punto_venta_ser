<?php
include("./conexion.php");

$_empresa=1;

if ($_POST['roles_guardar']){
	$conec = pg_connect("host=localhost port=5432 dbname=eccipos user=postgres password=3cc1.POS") or die("problemas de conexion " .pg_last_error());
	$query =	"INSERT INTO rol(nombre,empresa) VALUES ('$_POST[roles_nombre]' ,'$_empresa');";
	pg_query($conec,$query) or die('La consulta fallo: ' . pg_last_error());

	$query_rol = "SELECT MAX(id_rol) FROM rol;";
	$row =  pg_query($conec,$query_rol) or die('La consulta fallo: ' . pg_last_error());
	$rol1 = pg_fetch_row($row);
	$rol = $rol1[0];

	if($_POST['roles_chk_usuario_agregar']){
		$usuario_agregar =1;
		$query2 =	"INSERT INTO rol_permiso (id_rol , id_permiso) VALUES ('$rol' , '$usuario_agregar');";
		pg_query($conec,$query2) or die('La consulta fallo: ' . pg_last_error());
	}

	if($_POST['roles_chk_usuario_buscar']){
		$usuario_agregar =2;
		$query2 =	"INSERT INTO rol_permiso (id_rol , id_permiso) VALUES ('$rol' , '$usuario_agregar');";
		pg_query($conec,$query2) or die('La consulta fallo: ' . pg_last_error());
	}

	if($_POST['roles_chk_usuario_modificar']){
		$usuario_agregar =3;
		$query2 =	"INSERT INTO rol_permiso (id_rol , id_permiso) VALUES ('$rol' , '$usuario_agregar');";
		pg_query($conec,$query2) or die('La consulta fallo: ' . pg_last_error());
	}

	if($_POST['roles_chk_usuario_eliminar']){
		$usuario_agregar =4;
		$query2 =	"INSERT INTO rol_permiso (id_rol , id_permiso) VALUES ('$rol' , '$usuario_agregar');";
		pg_query($conec,$query2) or die('La consulta fallo: ' . pg_last_error());
	}

	if($_POST['roles_chk_proveedor_agregar']){
		$usuario_agregar =5;
		$query2 =	"INSERT INTO rol_permiso (id_rol , id_permiso) VALUES ('$rol' , '$usuario_agregar');";
		pg_query($conec,$query2) or die('La consulta fallo: ' . pg_last_error());
	}

	if($_POST['roles_chk_proveedor_buscar']){
		$usuario_agregar =6;
		$query2 =	"INSERT INTO rol_permiso (id_rol , id_permiso) VALUES ('$rol' , '$usuario_agregar');";
		pg_query($conec,$query2) or die('La consulta fallo: ' . pg_last_error());
	}

	if($_POST['roles_chk_proveedor_modificar']){
		$usuario_agregar =7;
		$query2 =	"INSERT INTO rol_permiso (id_rol , id_permiso) VALUES ('$rol' , '$usuario_agregar');";
		pg_query($conec,$query2) or die('La consulta fallo: ' . pg_last_error());
	}

	if($_POST['roles_chk_proveedor_eliminar']){
		$usuario_agregar =8;
		$query2 =	"INSERT INTO rol_permiso (id_rol , id_permiso) VALUES ('$rol' , '$usuario_agregar');";
		pg_query($conec,$query2) or die('La consulta fallo: ' . pg_last_error());
	}

	if($_POST['roles_chk_factura_agregar']){
		$usuario_agregar =9;
		$query2 =	"INSERT INTO rol_permiso (id_rol , id_permiso) VALUES ('$rol' , '$usuario_agregar');";
		pg_query($conec,$query2) or die('La consulta fallo: ' . pg_last_error());
	}

	if($_POST['roles_chk_factura_buscar']){
		$usuario_agregar =10;
		$query2 =	"INSERT INTO rol_permiso (id_rol , id_permiso) VALUES ('$rol' , '$usuario_agregar');";
		pg_query($conec,$query2) or die('La consulta fallo: ' . pg_last_error());
	}

	if($_POST['roles_chk_factura_modificar']){
		$usuario_agregar =11;
		$query2 =	"INSERT INTO rol_permiso (id_rol , id_permiso) VALUES ('$rol' , '$usuario_agregar');";
		pg_query($conec,$query2) or die('La consulta fallo: ' . pg_last_error());
	}

	if($_POST['roles_chk_factura_eliminar']){
		$usuario_agregar =12;
		$query2 =	"INSERT INTO rol_permiso (id_rol , id_permiso) VALUES ('$rol' , '$usuario_agregar');";
		pg_query($conec,$query2) or die('La consulta fallo: ' . pg_last_error());
	}

	if($_POST['roles_chk_empresa_agregar']){
		$usuario_agregar =13;
		$query2 =	"INSERT INTO rol_permiso (id_rol , id_permiso) VALUES ('$rol' , '$usuario_agregar');";
		pg_query($conec,$query2) or die('La consulta fallo: ' . pg_last_error());
	}

	if($_POST['roles_chk_empresa_buscar']){
		$usuario_agregar =14;
		$query2 =	"INSERT INTO rol_permiso (id_rol , id_permiso) VALUES ('$rol' , '$usuario_agregar');";
		pg_query($conec,$query2) or die('La consulta fallo: ' . pg_last_error());
	}

	if($_POST['roles_chk_empresa_modificar']){
		$usuario_agregar =15;
		$query2 =	"INSERT INTO rol_permiso (id_rol , id_permiso) VALUES ('$rol' , '$usuario_agregar');";
		pg_query($conec,$query2) or die('La consulta fallo: ' . pg_last_error());
	}

	if($_POST['roles_chk_empresa_eliminar']){
		$usuario_agregar =16;
		$query2 =	"INSERT INTO rol_permiso (id_rol , id_permiso) VALUES ('$rol' , '$usuario_agregar');";
		pg_query($conec,$query2) or die('La consulta fallo: ' . pg_last_error());
	}

	if($_POST['roles_chk_producto_agregar']){
		$usuario_agregar =17;
		$query2 =	"INSERT INTO rol_permiso (id_rol , id_permiso) VALUES ('$rol' , '$usuario_agregar');";
		pg_query($conec,$query2) or die('La consulta fallo: ' . pg_last_error());
	}

	if($_POST['roles_chk_producto_buscar']){
		$usuario_agregar =18;
		$query2 =	"INSERT INTO rol_permiso (id_rol , id_permiso) VALUES ('$rol' , '$usuario_agregar');";
		pg_query($conec,$query2) or die('La consulta fallo: ' . pg_last_error());
	}

	if($_POST['roles_chk_producto_modificar']){
		$usuario_agregar =19;
		$query2 =	"INSERT INTO rol_permiso (id_rol , id_permiso) VALUES ('$rol' , '$usuario_agregar');";
		pg_query($conec,$query2) or die('La consulta fallo: ' . pg_last_error());
	}

	if($_POST['roles_chk_producto_eliminar']){
		$usuario_agregar =20;
		$query2 =	"INSERT INTO rol_permiso (id_rol , id_permiso) VALUES ('$rol' , '$usuario_agregar');";
		pg_query($conec,$query2) or die('La consulta fallo: ' . pg_last_error());
	}

	echo "Rol Agregado a la BD";
	header('Location:./rolesform.php');

}

if ($_POST['roles_modificar']){

	
}

?>
