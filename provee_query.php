<?php
            $conec = pg_connect('host=localhost port=5432 dbname=eccipos user=postgres password=3cc1.POS') or die('problemas de conexion' .pg_last_error());
            $query = "SELECT  p.nombre, p.cedula_juridica, p.correo_contacto, p.nombre_contacto, p.pagina_web, tp.telefono, tc.telefono
                      FROM    proveedor as p, telefono_proveedor as tp , telefono_contacto_proveedor as tc
                      WHERE   p.cedula_juridica = '$_POST[idq]' AND tp.id_proveedor = p.cedula_juridica AND tc.id_proveedor = p.cedula_juridica "; 

            $result = pg_query($conec,$query) or die('La consulta fallo: ' . pg_last_error());
            $row = pg_fetch_row($result);
            echo json_encode($row);

?>