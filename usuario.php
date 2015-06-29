<?php
include("./conexion.php");

$_empresa=1;
if ($_POST['user_agregar'])	{

	if( $_POST['user_pw'] == $_POST['user_pw2']){
		$conec = pg_connect("host=localhost port=5432 dbname=eccipos user=postgres password=3cc1.POS") or die("problemas de conexion " .pg_last_error());
		$query =	"INSERT INTO usuario(password,usuario,empresa,apellido1,apellido2,id_usuario,rol,nombre,estadopassword) 
					VALUES ('$_POST[user_pw]','$_POST[user_usuario]','$_empresa','$_POST[user_apellido1]','$_POST[user_apellido2]','$_POST[user_identificacion]' ,'$_POST[user_rol]','$_POST[user_nombre]','0')";
		pg_query($conec,$query) or die('No se pudo insertar usuario: ' . pg_last_error());
		$telf = "INSERT INTO telefono_usuario (id_usuario,telefono)
				VALUES ('$_POST[user_identificacion]','$_POST[user_telefono]');";
		pg_query($conec, $telf) or die('No se pudo insertar el telefono del usuario ' . pg_last_error());

		echo "Producto Agregado";
	}
	else{
		echo "Las contraseñas no coinciden";
	}
	header('Location:./usuarioform.php');
} 

if ($_POST['user_modificar'])	{	
	$conec = pg_connect("host=localhost port=5432 dbname=eccipos user=postgres password=3cc1.POS") or die("problemas de conexion " .pg_last_error());
	$query = "UPDATE usuario SET nombre = '$_POST[user_nombre]' , id_usuario = '$_POST[user_identificacion]', apellido1 = '$_POST[user_apellido1]', apellido2 = '$_POST[user_apellido2]', password = '$_POST[user_pw]', usuario = '$_POST[user_usuario]' , rol = $_POST[user_rol]
		WHERE id_usuario = '$_POST[user_identificacion]' /*AND empresa = '".$id_empresa."'*/";

	pg_query($conec,$query) or die('La consulta fallo: ' . pg_last_error());

	echo "Usuario Modificado";
	header('Location:./usuarioform.php');
}

if($_POST['user_restablecer']){
	echo "Entro a restabkecer contrase&ntilde;as";
	$conec = pg_connect("host=localhost port=5432 dbname=eccipos user=postgres password=3cc1.POS") or die("problemas de conexion " .pg_last_error());
	$query = "UPDATE usuario SET password = '$_POST[user_pw]' WHERE id_usuario = '$_POST[user_identificacion]'";
	pg_query($conec,$query) or die('La consulta fallo: ' . pg_last_error());

	echo "estoy despues de la declaracion";
	header('Location:./usuarioform.php');
}



pg_close($conec);
?>
