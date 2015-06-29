<?php
//	include("conexion.php");

	$_empresa = '1';
	
	if ($_POST['provee_agregar'])
	{
	
	if(isset($_POST['provee_nombre']) && !empty($_POST['provee_nombre']) && isset($_POST['provee_cedjur']) && !empty($_POST['provee_cedjur']) && isset($_POST['provee_webpage']) && !empty($_POST['provee_webpage']) &&
			($_POST['provee_tel']) && !empty($_POST['provee_tel']) && ($_POST['provee_contac_nombre']) && !empty($_POST['provee_contac_nombre']) && ($_POST['provee_contac_tel']) && !empty($_POST['provee_contac_tel']) && ($_POST['provee_contac_correo']) && !empty($_POST['provee_contac_correo'])){
			
			$con = pg_connect("host=localhost port=5432 dbname=eccipos user=postgres password=3cc1.POS") or die("problemas de conexion " .pg_last_error());
			$query = "INSERT INTO proveedor(nombre, cedula_juridica, empresa, correo_contacto, nombre_contacto, pagina_web) 
					VALUES ('$_POST[provee_nombre]', '$_POST[provee_cedjur]', '$_empresa', '$_POST[provee_contac_correo]', '$_POST[provee_contac_nombre]', '$_POST[provee_webpage]')";
			pg_query($con,$query) or die('La consulta fallo: ' . pg_last_error());
			$telf = "INSERT INTO telefono_proveedor (id_proveedor, telefono) VALUES ('$_POST[provee_cedjur]','$_POST[provee_tel]') ";
			$telfCon = "INSERT INTO telefono_contacto_proveedor (id_proveedortelefono) VALUES ('$_POST[provee_cedjur]',$_POST[provee_contac_tel]') ";	
			pg_query($con,$telf);
			pg_query($con,$telfCon);

				?> <script type="text/javascript">
				alert('Proveedor Agregado');
				</script> <?php			
		}
		else{
			echo "problemas al insertar datos"; 
		}
		header('Location:./proveedoresform.php');
	}
	if ($_POST['provee_modificar'])
	{
		
		$con = pg_connect("host=localhost port=5432 dbname=eccipos user=postgres password=3cc1.POS") or die("problemas de conexion " .pg_last_error());
		$query = $query = "UPDATE proveedor SET nombre = '$_POST[provee_nombre]' , cedula_juridica = '$_POST[provee_cedjur]', empresa = '$_empresa', correo_contacto = '$_POST[provee_contac_correo]', nombre_contacto = '$_POST[provee_contac_nombre]', pagina_web = '$_POST[provee_webpage]' 		WHERE cedula_juridica = '$_POST[provee_cedjur]'  OR nombre = '$_POST[provee_nombre]' AND empresa = '".$id_empresa."'";
		pg_query($con,$query) or die('La consulta fallo: ' . pg_last_error());

		$telf = "UPDATE telefono_proveedor SET telefono ='$_POST[provee_tel]' WHERE id_proveedor = '$_POST[provee_cedjur]' ";
		$telfCon = "UPDATE telefono_proveedor SET telefono ='$_POST[provee_tel]' WHERE id_proveedor = '$_POST[provee_cedjur]' ";
		pg_query($con,$telf);
		pg_query($con,$telfCon);

		echo "Proveedor Modificado";
		header('Location:./proveedoresform.php');
	}
	pg_close($conec);
	
?>




