<!DOCTYPE html>
<html>
  <head>
    <title>usu_visualizar</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link href="resources/css/jquery-ui-themes.css" type="text/css" rel="stylesheet"/>
    <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="files/usu_visualizar/styles.css" type="text/css" rel="stylesheet"/>
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
    <script src="files/usu_visualizar/data.js"></script>
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
          function buscar() {
            alert("entro a buscar");


          $.ajax({     
             type: 'post',                                 
             url: 'user_query.php',                   
             data: {idq: document.getElementById("u8_input").value},             
                                        
            dataType: 'json',                   
            success: function(data)  {
              document.getElementById("u8_input").value  = data[0];       

            } 
          });
        }

        function filtrar() {
          alert("entro a filtrar");

          $.ajax({     
             type: 'post',                                 
             url: 'user_visualizar_query.php',                   
             data: {valor: document.getElementById("u8_input").value, atributo: document.getElementById("u10_input")},             
                                        
            dataType: 'json',                   
            success: function(data)  {
              document.getElementById("u7_input").value  = data[0];       

            } 
          });
        }
        </script>
  
    <div id="base" class="">

      <!-- Unnamed (Shape) -->
      <div id="u0" class="ax_paragraph">
        <img id="u0_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u1" class="text">
          <p><span>Nombre de Empresa</span></p>
        </div>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u2" class="ax_paragraph">
        <img id="u2_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u3" class="text">
          <p><span>Current_User</span></p>
        </div>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u4" class="ax_shape">
        <img id="u4_img" class="img " src="images/login/login_button_u8.png"/>
        <!-- Unnamed () -->
        <div id="u5" class="text">
          <p><span>Salir</span></p>
        </div>
      </div>

      <!-- agregar (HTML Button) -->
      <div id="u6" class="ax_html_button" data-label="agregar">
        <input id="u6_input" type="submit" value="Regresar"/>
      </div>

      <!-- Unnamed (List Box) -->
      <div id="u7" class="ax_list_box">
        <select id="u7_input" size="2">
        </select>
      </div>

      <!-- user_busq_field (Text Field) -->
      <div id="u8" class="ax_text_field" data-label="user_busq_field">
        <input id="u8_input" type="text" value=""/>
      </div>

      <!-- Unnamed (HTML Button) -->
      <div id="u9" class="ax_html_button">
        <input id="u9_input" type="button" value="Filtrar"/ onclick-"filtrar()">
      </div>


      <!-- Unnamed (Droplist) -->
      <div id="u10" class="ax_droplist">
        <select id="u10_input">
          <option value="Nombre">Nombre</option>
          <option value="Apellido">Apellido</option>
          <option value="Rol">Rol</option>
        </select>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u11" class="ax_paragraph">
        <img id="u11_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u12" class="text">
          <p><span>B</span><span>ú</span><span>squeda de Usuario(s):</span></p>
        </div>
      </div>

      <!-- Unnamed (MasterAdmin) -->

      <!-- Unnamed (New Master 1) -->

      <!-- Unnamed (New Master 1) -->

      <!-- Unnamed (Shape) -->
      <div id="u16" class="ax_shape">
        <img id="u16_img" class="img " src="images/usuario/u36.png"/>
        <!-- Unnamed () -->
        <div id="u17" class="text">
          <p><span></span></p>
        </div>
      </div>

      <!-- Unnamed (Menu) -->
      <div id="u18" class="ax_menu">
        <img id="u18_menu" class="img " src="images/usuario/u38_menu.png" alt="u18_menu"/>

        <!-- Unnamed (Table) -->
        <div id="u19" class="ax_table">

          <!-- Unnamed (Menu Item) -->
          <div id="u20" class="ax_table_cell">
            <img id="u20_img" class="img " src="images/usuario/u40.png"/>
            <!-- Unnamed () -->
            <div id="u21" class="text">
              <p><span>Usuarios</span></p>
            </div>
          </div>

          <!-- Unnamed (Menu Item) -->
          <div id="u22" class="ax_table_cell">
            <img id="u22_img" class="img " src="images/usuario/u40.png"/>
            <!-- Unnamed () -->
            <div id="u23" class="text">
              <p><span>Proveedores</span></p>
            </div>
          </div>

          <!-- Unnamed (Menu Item) -->
          <div id="u24" class="ax_table_cell">
            <img id="u24_img" class="img " src="images/usuario/u40.png"/>
            <!-- Unnamed () -->
            <div id="u25" class="text">
              <p><span>Facturas</span></p>
            </div>
          </div>

          <!-- Unnamed (Menu Item) -->
          <div id="u26" class="ax_table_cell">
            <img id="u26_img" class="img " src="images/usuario/u40.png"/>
            <!-- Unnamed () -->
            <div id="u27" class="text">
              <p><span>Empresas</span></p>
            </div>
          </div>

          <!-- Unnamed (Menu Item) -->
          <div id="u28" class="ax_table_cell">
            <img id="u28_img" class="img " src="images/usuario/u40.png"/>
            <!-- Unnamed () -->
            <div id="u29" class="text">
              <p><span>Productos</span></p>
            </div>
          </div>

          <!-- Unnamed (Menu Item) -->
          <div id="u30" class="ax_table_cell">
            <img id="u30_img" class="img " src="images/usuario/u50.png"/>
            <!-- Unnamed () -->
            <div id="u31" class="text">
              <p><span>Opciones</span></p>
            </div>
          </div>
        </div>

        <!-- Unnamed (Menu) -->
        <div id="u32" class="ax_menu sub_menu">
          <img id="u32_menu" class="img " src="images/usuario/u52_menu.png" alt="u32_menu"/>

          <!-- Unnamed (Table) -->
          <div id="u33" class="ax_table">

            <!-- Unnamed (Menu Item) -->
            <div id="u34" class="ax_table_cell">
              <img id="u34_img" class="img " src="images/usuario/u54.png"/>
              <!-- Unnamed () -->
              <div id="u35" class="text">
                <p><span>Visualizar</span></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Unnamed (Menu) -->
        <div id="u36" class="ax_menu sub_menu">
          <img id="u36_menu" class="img " src="images/usuario/u52_menu.png" alt="u36_menu"/>

          <!-- Unnamed (Table) -->
          <div id="u37" class="ax_table">

            <!-- Unnamed (Menu Item) -->
            <div id="u38" class="ax_table_cell">
              <img id="u38_img" class="img " src="images/usuario/u54.png"/>
              <!-- Unnamed () -->
              <div id="u39" class="text">
                <p><span>Visualizar</span></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Unnamed (Menu) -->
        <div id="u40" class="ax_menu sub_menu">
          <img id="u40_menu" class="img " src="images/usuario/u52_menu.png" alt="u40_menu"/>

          <!-- Unnamed (Table) -->
          <div id="u41" class="ax_table">

            <!-- Unnamed (Menu Item) -->
            <div id="u42" class="ax_table_cell">
              <img id="u42_img" class="img " src="images/usuario/u54.png"/>
              <!-- Unnamed () -->
              <div id="u43" class="text">
                <p><span>Visualizar</span></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Unnamed (Menu) -->
        <div id="u44" class="ax_menu sub_menu">
          <img id="u44_menu" class="img " src="images/usuario/u52_menu.png" alt="u44_menu"/>

          <!-- Unnamed (Table) -->
          <div id="u45" class="ax_table">

            <!-- Unnamed (Menu Item) -->
            <div id="u46" class="ax_table_cell">
              <img id="u46_img" class="img " src="images/usuario/u54.png"/>
              <!-- Unnamed () -->
              <div id="u47" class="text">
                <p><span>Visualizar</span></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Unnamed (Menu) -->
        <div id="u48" class="ax_menu sub_menu">
          <img id="u48_menu" class="img " src="images/usuario/u52_menu.png" alt="u48_menu"/>

          <!-- Unnamed (Table) -->
          <div id="u49" class="ax_table">

            <!-- Unnamed (Menu Item) -->
            <div id="u50" class="ax_table_cell">
              <img id="u50_img" class="img " src="images/usuario/u54.png"/>
              <!-- Unnamed () -->
              <div id="u51" class="text">
                <p><span>Roles</span></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Unnamed (Menu) -->
        <div id="u52" class="ax_menu sub_menu">
          <img id="u52_menu" class="img " src="images/usuario/u52_menu.png" alt="u52_menu"/>

          <!-- Unnamed (Table) -->
          <div id="u53" class="ax_table">

            <!-- Unnamed (Menu Item) -->
            <div id="u54" class="ax_table_cell">
              <img id="u54_img" class="img " src="images/usuario/u54.png"/>
              <!-- Unnamed () -->
              <div id="u55" class="text">
                <p><span>Cancelar</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Unnamed (Image) -->
      <div id="u56" class="ax_image">
        <img id="u56_img" class="img " src="images/usuario/u76.png"/>
        <!-- Unnamed () -->
        <div id="u57" class="text">
          <p><span></span></p>
        </div>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u58" class="ax_paragraph">
        <img id="u58_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u59" class="text">
          <p><span>Nombre de Empresa</span></p>
        </div>
      </div>

      <!-- current_usuario_interfaz (Shape) -->
      <div id="u60" class="ax_paragraph" data-label="current_usuario_interfaz">
        <img id="u60_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u61" class="text">
          <p><span>Current_User</span></p>
        </div>
      </div>

      <!-- salir (Shape) -->
      <div id="u62" class="ax_shape" data-label="salir">
        <img id="u62_img" class="img " src="images/login/login_button_u8.png"/>
        <!-- Unnamed () -->
        <div id="u63" class="text">
          <p><span>Salir</span></p>
        </div>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u64" class="ax_paragraph">
        <img id="u64_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u65" class="text">
          <p><span>Usuario</span></p><p><span>&nbsp;</span></p>
        </div>
      </div>

      <!-- Unnamed (Horizontal Line) -->
      <div id="u66" class="ax_horizontal_line">
        <img id="u66_start" class="img " src="resources/images/transparent.gif" alt="u66_start"/>
        <img id="u66_end" class="img " src="resources/images/transparent.gif" alt="u66_end"/>
        <img id="u66_line" class="img " src="images/usuario/u2_line.png" alt="u66_line"/>
      </div>

      <!-- Unnamed (HTML Button) -->
      <div id="u67" class="ax_html_button">
        <input id="u67_input" type="button" value="Llenar"/ onclick-"buscar()">
      </div>

    </div>
  </body>
</html>
