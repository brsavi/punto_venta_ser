<html>
	<body>
 

      <select id="u0_input" size="10">
      	<?php
      		$conec = pg_connect('host=localhost port=5432 dbname=eccipos user=postgres password=3cc1.POS') or die('problemas de conexion' .pg_last_error());
            $query = "SELECT  *
                      FROM    producto "; 

            $result = pg_query($conec,$query) or die('La consulta fallo: ' . pg_last_error());
            
            while($row = pg_fetch_row($result)){
            	echo"<option>".$row[0]."-".$row[1]."-".$row[2]."-".$row[3]."</option>";

            }
            

      	?>
      </select>

   </body>
 </html>