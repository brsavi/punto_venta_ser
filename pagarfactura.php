<?php
            $conec = pg_connect('host=localhost port=5432 dbname=eccipos user=postgres password=3cc1.POS') or die('problemas de conexion' .pg_last_error());
            $query = "UPDATE factura_venta
						SET  sub_total='$_POST[sub]', total='$_POST[tot]', descuento='$_POST[desc]'
						WHERE no_factura == '$_POST[fac]';";

            $result = pg_query($conec,$query) or die('La consulta fallo: ' . pg_last_error());
			
			            $query = "INSERT INTO cierre_diario(
									fecha, total, empresa)
									VALUES (current_date,'$_POST[tot]' , 1)
									ON DUPLICATE ;";

            //$result = pg_query($conec,$query) or die('La consulta fallo: ' . pg_last_error());
			//investigo como hacer funcionar el on duplicate 
?>