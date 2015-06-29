<?php
include("./conexion.php");

$_empresa=1;
$conec = pg_connect('host=localhost port=5432 dbname=eccipos user=postgres password=3cc1.POS') or die('problemas de conexion' .pg_last_error());
            $query = "SELECT id_rol FROM rol WHERE nombre = '$_POST[nrol]'";
            $result = pg_query($conec,$query) or die('La consulta fallo: ' . pg_last_error());
            $row = pg_fetch_row($result);

            $query = "SELECT id_permiso FROM rol_permiso WHERE id_rol = '$row' ";
            $result = pg_query($conec,$query) or die('La consulta fallo: ' . pg_last_error());
            $response = array('0');
            $i = 0;


            while($row = pg_fetch_row($result)){
            	$response = array_merge($response, $row);
            	$i = $i + 1;
            }

            $response[0] = $i;
            echo json_encode($response);


?>
