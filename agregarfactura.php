<?php
			$conec = pg_connect('host=localhost port=5432 dbname=eccipos user=postgres password=3cc1.POS') or die('problemas de conexion' .pg_last_error());
            $query = "INSERT INTO factura_producto(
						empresa, no_factura, id_producto, cantidad)
						VALUES (1, '$_POST[fac]',  '$_POST[idp]',  '$_POST[cant]');";


            pg_query($conec,$query) or die('La consulta fallo: ' . pg_last_error());
			
			$query = " UPDATE producto
						SET  cantidad=cantidad - '$_POST[cant]'
						WHERE id_producto='$_POST[idp]';";

            pg_query($conec,$query) or die('La consulta fallo: ' . pg_last_error());
			
			$query = "SELECT 'Precio'
						FROM producto
						WHERE id_producto='$_POST[idp]';";

            $result = pg_query($conec,$query) or die('La consulta fallo: ' . pg_last_error());
            $row = pg_fetch_row($result);
            echo json_encode($row);
			
?>