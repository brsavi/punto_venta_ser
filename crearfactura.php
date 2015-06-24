<?php
            $conec = pg_connect('host=localhost port=5432 dbname=eccipos user=postgres password=3cc1.POS') or die('problemas de conexion' .pg_last_error());
            $query = "INSERT INTO factura_venta(
						fecha, empresa)
						VALUES ( current_date, 1);"

            pg_query($conec,$query) or die('La consulta fallo: ' . pg_last_error());
			
			$query = "SELECT MAX(no_factura) FROM factura_venta;"

            $result = pg_query($conec,$query) or die('La consulta fallo: ' . pg_last_error());
			
            $row = pg_fetch_row($result);
            echo json_encode($row);

?>