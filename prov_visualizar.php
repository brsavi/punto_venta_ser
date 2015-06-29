<!DOCTYPE html>
<html>
  <head>
    <title>prov_visualizar</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link href="resources/css/jquery-ui-themes.css" type="text/css" rel="stylesheet"/>
    <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="files/prov_visualizar/styles.css" type="text/css" rel="stylesheet"/>
    <script src="resources/scripts/jquery-1.7.1.min.js"></script>
    <script src="resources/scripts/jquery-ui-1.8.10.custom.min.js"></script>
    <script src="resources/scripts/axure/axQuery.js"></script>
    <script src="resources/scripts/axure/globals.js"></script>
    <script src="resources/scripts/axutils.js"></script>
    <script src="resources/scripts/axure/annotation.js"></script>
    <script src="resources/scripts/axure/axQuery.std.js"></script>
    <script src="resources/scripts/axure/doc.js"></script>
    <script src="data/document.js"></script>
    <script src="resources/scripts/messagecenter.js"></script>
    <script src="resources/scripts/axure/events.js"></script>
    <script src="resources/scripts/axure/action.js"></script>
    <script src="resources/scripts/axure/expr.js"></script>
    <script src="resources/scripts/axure/geometry.js"></script>
    <script src="resources/scripts/axure/flyout.js"></script>
    <script src="resources/scripts/axure/ie.js"></script>
    <script src="resources/scripts/axure/model.js"></script>
    <script src="resources/scripts/axure/repeater.js"></script>
    <script src="resources/scripts/axure/sto.js"></script>
    <script src="resources/scripts/axure/utils.temp.js"></script>
    <script src="resources/scripts/axure/variables.js"></script>
    <script src="resources/scripts/axure/drag.js"></script>
    <script src="resources/scripts/axure/move.js"></script>
    <script src="resources/scripts/axure/visibility.js"></script>
    <script src="resources/scripts/axure/style.js"></script>
    <script src="resources/scripts/axure/adaptive.js"></script>
    <script src="resources/scripts/axure/tree.js"></script>
    <script src="resources/scripts/axure/init.temp.js"></script>
    <script src="files/prov_visualizar/data.js"></script>
    <script src="resources/scripts/axure/legacy.js"></script>
    <script src="resources/scripts/axure/viewer.js"></script>
    <script type="text/javascript">
      $axure.utils.getTransparentGifPath = function() { return 'resources/images/transparent.gif'; };
      $axure.utils.getOtherPath = function() { return 'resources/Other.html'; };
      $axure.utils.getReloadPath = function() { return 'resources/reload.html'; };
    </script>
  </head>
  <body>
    <script language="javascript" type="text/javascript" src="jquery.js"></script>
    <script> 
      function filtrar() {

          $.ajax({     
             type: 'post',                                 
             url: 'prov_visualizar_query.php',                   
             data: {idq: document.getElementById("u1_input").value, param: document.getElementById("u56_input")},             
                                        
            dataType: 'json',                   
            success: function(data)  {
              document.getElementById("u17_input").value  = data[0];              
              document.getElementById("u8_input").value   = data[1];     
              document.getElementById("u11_input").value  = data[2];              
              document.getElementById("u14_input").value  = data[3];              
              document.getElementById("u20_input").value  = data[4];          

            } 

          });
    </script>

    <div id="base" class="">

      <!-- Unnamed (List Box) -->
      <div id="u0" class="ax_list_box">
        <select id="u0_input" size="10">
          <?php
          $conec = pg_connect('host=localhost port=5432 dbname=eccipos user=postgres password=3cc1.POS') or die('problemas de conexion' .pg_last_error());
            $query = "SELECT  *
                      FROM    proveedor "; 
                      
            $result = pg_query($conec,$query) or die('La consulta fallo: ' . pg_last_error());
            
            echo"<option> Nombre&emsp;&emsp;Cedula_jurídica&emsp;&emsp;Empresa&emsp;&emsp;Correo_contacto&emsp;&emsp;Nombre_Contacto&emsp;&emsp;PaginaWeb</option>";
            while($row = pg_fetch_row($result)){
              echo"<option>".$row[0]."-".$row[1]."-".$row[2]."-".$row[3]."-".$row[4]."-".$row[5]."</option>";

            }
        ?>

        </select>
      </div>

      <!-- user_busq_field (Text Field) -->
      <div id="u1" class="ax_text_field" data-label="user_busq_field">
        <input id="u1_input" type="text" value=""/>
      </div>

      <!-- Unnamed (HTML Button) -->
      <div id="u2" class="ax_html_button">
        <input id="u2_input" type="button" value="Filtrar" onclick="filtrar()"/>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u3" class="ax_paragraph">
        <img id="u3_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u4" class="text">
          <p><span>Proveedores</span></p>
        </div>
      </div>

      <!-- Unnamed (New Master 1) -->

      <!-- Unnamed (New Master 1) -->

      <!-- Unnamed (Shape) -->
      <div id="u7" class="ax_shape">
        <img id="u7_img" class="img " src="images/usuario/u36.png"/>
        <!-- Unnamed () -->
        <div id="u8" class="text">
          <p><span></span></p>
        </div>
      </div>

      <!-- Unnamed (Menu) -->
      <div id="u9" class="ax_menu">
        <img id="u9_menu" class="img " src="images/usuario/u38_menu.png" alt="u9_menu"/>

        <!-- Unnamed (Table) -->
        <div id="u10" class="ax_table">

          <!-- Unnamed (Menu Item) -->
          <div id="u11" class="ax_table_cell">
            <img id="u11_img" class="img " src="images/usuario/u40.png"/>
            <!-- Unnamed () -->
            <div id="u12" class="text">
              <p><span>Usuarios</span></p>
            </div>
          </div>

          <!-- Unnamed (Menu Item) -->
          <div id="u13" class="ax_table_cell">
            <img id="u13_img" class="img " src="images/usuario/u40.png"/>
            <!-- Unnamed () -->
            <div id="u14" class="text">
              <p><span>Proveedores</span></p>
            </div>
          </div>

          <!-- Unnamed (Menu Item) -->
          <div id="u15" class="ax_table_cell">
            <img id="u15_img" class="img " src="images/usuario/u40.png"/>
            <!-- Unnamed () -->
            <div id="u16" class="text">
              <p><span>Facturas</span></p>
            </div>
          </div>

          <!-- Unnamed (Menu Item) -->
          <div id="u17" class="ax_table_cell">
            <img id="u17_img" class="img " src="images/usuario/u40.png"/>
            <!-- Unnamed () -->
            <div id="u18" class="text">
              <p><span>Empresas</span></p>
            </div>
          </div>

          <!-- Unnamed (Menu Item) -->
          <div id="u19" class="ax_table_cell">
            <img id="u19_img" class="img " src="images/usuario/u40.png"/>
            <!-- Unnamed () -->
            <div id="u20" class="text">
              <p><span>Productos</span></p>
            </div>
          </div>

          <!-- Unnamed (Menu Item) -->
          <div id="u21" class="ax_table_cell">
            <img id="u21_img" class="img " src="images/usuario/u50.png"/>
            <!-- Unnamed () -->
            <div id="u22" class="text">
              <p><span>Opciones</span></p>
            </div>
          </div>
        </div>

        <!-- Unnamed (Menu) -->
        <div id="u23" class="ax_menu sub_menu">
          <img id="u23_menu" class="img " src="images/usuario/u52_menu.png" alt="u23_menu"/>

          <!-- Unnamed (Table) -->
          <div id="u24" class="ax_table">

            <!-- Unnamed (Menu Item) -->
            <div id="u25" class="ax_table_cell">
              <img id="u25_img" class="img " src="images/usuario/u54.png"/>
              <!-- Unnamed () -->
              <div id="u26" class="text">
                <p><span>Visualizar</span></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Unnamed (Menu) -->
        <div id="u27" class="ax_menu sub_menu">
          <img id="u27_menu" class="img " src="images/usuario/u52_menu.png" alt="u27_menu"/>

          <!-- Unnamed (Table) -->
          <div id="u28" class="ax_table">

            <!-- Unnamed (Menu Item) -->
            <div id="u29" class="ax_table_cell">
              <img id="u29_img" class="img " src="images/usuario/u54.png"/>
              <!-- Unnamed () -->
              <div id="u30" class="text">
                <p><span>Visualizar</span></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Unnamed (Menu) -->
        <div id="u31" class="ax_menu sub_menu">
          <img id="u31_menu" class="img " src="images/usuario/u52_menu.png" alt="u31_menu"/>

          <!-- Unnamed (Table) -->
          <div id="u32" class="ax_table">

            <!-- Unnamed (Menu Item) -->
            <div id="u33" class="ax_table_cell">
              <img id="u33_img" class="img " src="images/usuario/u54.png"/>
              <!-- Unnamed () -->
              <div id="u34" class="text">
                <p><span>Visualizar</span></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Unnamed (Menu) -->
        <div id="u35" class="ax_menu sub_menu">
          <img id="u35_menu" class="img " src="images/usuario/u52_menu.png" alt="u35_menu"/>

          <!-- Unnamed (Table) -->
          <div id="u36" class="ax_table">

            <!-- Unnamed (Menu Item) -->
            <div id="u37" class="ax_table_cell">
              <img id="u37_img" class="img " src="images/usuario/u54.png"/>
              <!-- Unnamed () -->
              <div id="u38" class="text">
                <p><span>Visualizar</span></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Unnamed (Menu) -->
        <div id="u39" class="ax_menu sub_menu">
          <img id="u39_menu" class="img " src="images/usuario/u52_menu.png" alt="u39_menu"/>

          <!-- Unnamed (Table) -->
          <div id="u40" class="ax_table">

            <!-- Unnamed (Menu Item) -->
            <div id="u41" class="ax_table_cell">
              <img id="u41_img" class="img " src="images/usuario/u54.png"/>
              <!-- Unnamed () -->
              <div id="u42" class="text">
                <p><span>Roles</span></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Unnamed (Menu) -->
        <div id="u43" class="ax_menu sub_menu">
          <img id="u43_menu" class="img " src="images/usuario/u52_menu.png" alt="u43_menu"/>

          <!-- Unnamed (Table) -->
          <div id="u44" class="ax_table">

            <!-- Unnamed (Menu Item) -->
            <div id="u45" class="ax_table_cell">
              <img id="u45_img" class="img " src="images/usuario/u54.png"/>
              <!-- Unnamed () -->
              <div id="u46" class="text">
                <p><span>Cancelar</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Unnamed (Image) -->
      <div id="u47" class="ax_image">
        <img id="u47_img" class="img " src="images/usuario/u76.png"/>
        <!-- Unnamed () -->
        <div id="u48" class="text">
          <p><span></span></p>
        </div>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u49" class="ax_paragraph">
        <img id="u49_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u50" class="text">
          <p><span>Nombre de Empresa</span></p>
        </div>
      </div>

      <!-- current_usuario_interfaz (Shape) -->
      <div id="u51" class="ax_paragraph" data-label="current_usuario_interfaz">
        <img id="u51_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u52" class="text">
          <p><span>Current_User</span></p>
        </div>
      </div>

      <!-- salir (Shape) -->
      <div id="u53" class="ax_shape" data-label="salir">
        <img id="u53_img" class="img " src="images/login/login_button_u8.png"/>
        <!-- Unnamed () -->
        <div id="u54" class="text">
          <p><span>Salir</span></p>
        </div>
      </div>

      <!-- Unnamed (Horizontal Line) -->
      <div id="u55" class="ax_horizontal_line">
        <img id="u55_start" class="img " src="resources/images/transparent.gif" alt="u55_start"/>
        <img id="u55_end" class="img " src="resources/images/transparent.gif" alt="u55_end"/>
        <img id="u55_line" class="img " src="images/usuario/u2_line.png" alt="u55_line"/>
      </div>

      <!-- Unnamed (Droplist) -->
      <div id="u56" class="ax_droplist">
        <select id="u56_input">
          <option value="Nombre">Nombre</option>
          <option value="Cédula Juridica">Cédula Juridica</option>
        </select>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u57" class="ax_paragraph">
        <img id="u57_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u58" class="text">
          <p><span>B</span><span>ú</span><span>squeda de </span><span>Proveedor</span><span>(</span><span>e</span><span>s):</span></p>
        </div>
      </div>
    </div>
  </body>
</html>
