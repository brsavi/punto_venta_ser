<!DOCTYPE html>
<html>
  <head>
    <title>proveedores</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link href="resources/css/jquery-ui-themes.css" type="text/css" rel="stylesheet"/>
    <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="files/proveedores/styles.css" type="text/css" rel="stylesheet"/>
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
    <script src="files/proveedores/data.js"></script>
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

          $.ajax({     
             type: 'post',                                 
             url: 'provee_query.php',                   
             data: {idq: document.getElementById("u8_input").value},             
                                        
            dataType: 'json',                   
            success: function(data)  {
              document.getElementById("u5_input").value   = data[0];              
              document.getElementById("u8_input").value   = data[1];     
              document.getElementById("u25_input").value  = data[2];              
              document.getElementById("u19_input").value  = data[3];              
              document.getElementById("u11_input").value  = data[4];
              document.getElementById("u14_input").value  = data[5];              
              document.getElementById("u22_input").value  = data[6];           

            } 

          });

        }
        </script>

    <form action = "proveedores.php" method = "post" name = "form">
      <div id="base" class="">

        <!-- Unnamed (Shape) -->
        <div id="u0" class="ax_paragraph">
          <img id="u0_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u1" class="text">
            <p><span>Proveedores</span></p>
          </div>
        </div>

        <!-- Unnamed (Horizontal Line) -->
        <div id="u2" class="ax_horizontal_line">
          <img id="u2_start" class="img " src="resources/images/transparent.gif" alt="u2_start"/>
          <img id="u2_end" class="img " src="resources/images/transparent.gif" alt="u2_end"/>
          <img id="u2_line" class="img " src="images/producto/u2_line.png" alt="u2_line"/>
        </div>

        <!-- Unnamed (Shape) -->
        <div id="u3" class="ax_paragraph">
          <img id="u3_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u4" class="text">
            <p><span>N</span><span>ombre de Proveedor</span><span>*</span><span>:</span></p>
          </div>
        </div>

        <!-- provee_nombre (Text Field) -->
        <div id="u5" class="ax_text_field" data-label="provee_nombre">
          <input id="u5_input" type="text" value="" name = "provee_nombre"/>
        </div>

        <!-- Unnamed (Shape) -->
        <div id="u6" class="ax_paragraph">
          <img id="u6_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u7" class="text">
            <p><span>Cedula Jurídica o Numero de Identificacion</span><span>*</span><span>: </span></p>
          </div>
        </div>

        <!-- provee_cedjur (Text Field) -->
        <div id="u8" class="ax_text_field" data-label="provee_cedjur">
          <input id="u8_input" type="text" value="" name ="provee_cedjur"/>
        </div>

        <!-- Unnamed (Shape) -->
        <div id="u9" class="ax_paragraph">
          <img id="u9_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u10" class="text">
            <p><span>Página Web: </span></p>
          </div>
        </div>

        <!-- provee_webpage (Text Field) -->
        <div id="u11" class="ax_text_field" data-label="provee_webpage">
          <input id="u11_input" type="url" value="" name ="provee_webpage"/>
        </div>

        <!-- Unnamed (Shape) -->
        <div id="u12" class="ax_paragraph">
          <img id="u12_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u13" class="text">
            <p><span>N</span><span>ú</span><span>mero Teléfonico</span><span> del Proveedor</span><span>*</span><span>:</span></p>
          </div>
        </div>

        <!-- provee_tel (Text Field) -->
        <div id="u14" class="ax_text_field" data-label="provee_tel">
          <input id="u14_input" type="text" value="" name = "provee_tel"/>
        </div>

        <!-- Unnamed (HTML Button) -->
        <div id="u15" class="ax_html_button">
          <input id="u15_input" type="submit" value="Agregar" name = "provee_agregar"/>
        </div>

        <!-- Unnamed (HTML Button) -->
        <div id="u16" class="ax_html_button">
          <input id="u16_input" type="submit" value="Modificar" name ="provee_modificar"/>
        </div>

        <!-- Unnamed (Shape) -->
        <div id="u17" class="ax_paragraph">
          <img id="u17_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u18" class="text">
            <p><span>Nombre de Contacto</span><span>*</span><span>:</span></p>
          </div>
        </div>

        <!-- provee_contac_nombre (Text Field) -->
        <div id="u19" class="ax_text_field" data-label="provee_contac_nombre">
          <input id="u19_input" type="text" value="" name = "provee_contac_nombre"/>
        </div>

        <!-- Unnamed (Shape) -->
        <div id="u20" class="ax_paragraph">
          <img id="u20_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u21" class="text">
            <p><span>Número Telefónico</span><span> de Contacto</span><span>*</span><span>:</span></p>
          </div>
        </div>

        <!-- provee_contac_tel (Text Field) -->
        <div id="u22" class="ax_text_field" data-label="provee_contac_tel">
          <input id="u22_input" type="text" value="" name ="provee_contac_tel"/>
        </div>

        <!-- Unnamed (Shape) -->
        <div id="u23" class="ax_paragraph">
          <img id="u23_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u24" class="text">
            <p><span>Correo electrónico</span><span> de Contacto</span><span>:</span></p>
          </div>
        </div>

        <!-- provee_contac_correo (Text Field) -->
        <div id="u25" class="ax_text_field" data-label="provee_contac_correo">
          <input id="u25_input" type="email" value="" name ="provee_contac_correo" />
        </div>

        <!-- Unnamed (MasterAdmin) -->

        <!-- Unnamed (New Master 1) -->

        <!-- Unnamed (New Master 1) -->

        <!-- Unnamed (Shape) -->
        <div id="u29" class="ax_shape">
          <img id="u29_img" class="img " src="images/usuario/u36.png"/>
          <!-- Unnamed () -->
          <div id="u30" class="text">
            <p><span></span></p>
          </div>
        </div>

        <!-- Unnamed (Menu) -->
        <div id="u31" class="ax_menu">
          <img id="u31_menu" class="img " src="images/usuario/u38_menu.png" alt="u31_menu"/>

          <!-- Unnamed (Table) -->
          <div id="u32" class="ax_table">

            <!-- Unnamed (Menu Item) -->
            <div id="u33" class="ax_table_cell">
              <img id="u33_img" class="img " src="images/usuario/u40.png"/>
              <!-- Unnamed () -->
              <div id="u34" class="text">
                <p><span>Usuarios</span></p>
              </div>
            </div>

            <!-- Unnamed (Menu Item) -->
            <div id="u35" class="ax_table_cell">
              <img id="u35_img" class="img " src="images/usuario/u40.png"/>
              <!-- Unnamed () -->
              <div id="u36" class="text">
                <p><span>Proveedores</span></p>
              </div>
            </div>

            <!-- Unnamed (Menu Item) -->
            <div id="u37" class="ax_table_cell">
              <img id="u37_img" class="img " src="images/usuario/u40.png"/>
              <!-- Unnamed () -->
              <div id="u38" class="text">
                <p><span>Facturas</span></p>
              </div>
            </div>

            <!-- Unnamed (Menu Item) -->
            <div id="u39" class="ax_table_cell">
              <img id="u39_img" class="img " src="images/usuario/u40.png"/>
              <!-- Unnamed () -->
              <div id="u40" class="text">
                <p><span>Empresas</span></p>
              </div>
            </div>

            <!-- Unnamed (Menu Item) -->
            <div id="u41" class="ax_table_cell">
              <img id="u41_img" class="img " src="images/usuario/u40.png"/>
              <!-- Unnamed () -->
              <div id="u42" class="text">
                <p><span>Productos</span></p>
              </div>
            </div>

            <!-- Unnamed (Menu Item) -->
            <div id="u43" class="ax_table_cell">
              <img id="u43_img" class="img " src="images/usuario/u50.png"/>
              <!-- Unnamed () -->
              <div id="u44" class="text">
                <p><span>Opciones</span></p>
              </div>
            </div>
          </div>

          <!-- Unnamed (Menu) -->
          <div id="u45" class="ax_menu sub_menu">
            <img id="u45_menu" class="img " src="images/usuario/u52_menu.png" alt="u45_menu"/>

            <!-- Unnamed (Table) -->
            <div id="u46" class="ax_table">

              <!-- Unnamed (Menu Item) -->
              <div id="u47" class="ax_table_cell">
                <img id="u47_img" class="img " src="images/usuario/u54.png"/>
                <!-- Unnamed () -->
                <div id="u48" class="text">
                  <p><span>Visualizar</span></p>
                </div>
              </div>
            </div>
          </div>

          <!-- Unnamed (Menu) -->
          <div id="u49" class="ax_menu sub_menu">
            <img id="u49_menu" class="img " src="images/usuario/u52_menu.png" alt="u49_menu"/>

            <!-- Unnamed (Table) -->
            <div id="u50" class="ax_table">

              <!-- Unnamed (Menu Item) -->
              <div id="u51" class="ax_table_cell">
                <img id="u51_img" class="img " src="images/usuario/u54.png"/>
                <!-- Unnamed () -->
                <div id="u52" class="text">
                  <p><span>Visualizar</span></p>
                </div>
              </div>
            </div>
          </div>

          <!-- Unnamed (Menu) -->
          <div id="u53" class="ax_menu sub_menu">
            <img id="u53_menu" class="img " src="images/usuario/u52_menu.png" alt="u53_menu"/>

            <!-- Unnamed (Table) -->
            <div id="u54" class="ax_table">

              <!-- Unnamed (Menu Item) -->
              <div id="u55" class="ax_table_cell">
                <img id="u55_img" class="img " src="images/usuario/u54.png"/>
                <!-- Unnamed () -->
                <div id="u56" class="text">
                  <p><span>Visualizar</span></p>
                </div>
              </div>
            </div>
          </div>

          <!-- Unnamed (Menu) -->
          <div id="u57" class="ax_menu sub_menu">
            <img id="u57_menu" class="img " src="images/usuario/u52_menu.png" alt="u57_menu"/>

            <!-- Unnamed (Table) -->
            <div id="u58" class="ax_table">

              <!-- Unnamed (Menu Item) -->
              <div id="u59" class="ax_table_cell">
                <img id="u59_img" class="img " src="images/usuario/u54.png"/>
                <!-- Unnamed () -->
                <div id="u60" class="text">
                  <p><span>Visualizar</span></p>
                </div>
              </div>
            </div>
          </div>

          <!-- Unnamed (Menu) -->
          <div id="u61" class="ax_menu sub_menu">
            <img id="u61_menu" class="img " src="images/usuario/u52_menu.png" alt="u61_menu"/>

            <!-- Unnamed (Table) -->
            <div id="u62" class="ax_table">

              <!-- Unnamed (Menu Item) -->
              <div id="u63" class="ax_table_cell">
                <img id="u63_img" class="img " src="images/usuario/u54.png"/>
                <!-- Unnamed () -->
                <div id="u64" class="text">
                  <p><span>Roles</span></p>
                </div>
              </div>
            </div>
          </div>

          <!-- Unnamed (Menu) -->
          <div id="u65" class="ax_menu sub_menu">
            <img id="u65_menu" class="img " src="images/usuario/u52_menu.png" alt="u65_menu"/>

            <!-- Unnamed (Table) -->
            <div id="u66" class="ax_table">

              <!-- Unnamed (Menu Item) -->
              <div id="u67" class="ax_table_cell">
                <img id="u67_img" class="img " src="images/usuario/u54.png"/>
                <!-- Unnamed () -->
                <div id="u68" class="text">
                  <p><span>Cancelar</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Unnamed (Image) -->
        <div id="u69" class="ax_image">
          <img id="u69_img" class="img " src="images/usuario/u76.png"/>
          <!-- Unnamed () -->
          <div id="u70" class="text">
            <p><span></span></p>
          </div>
        </div>

        <!-- Unnamed (Shape) -->
        <div id="u71" class="ax_paragraph">
          <img id="u71_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u72" class="text">
            <p><span>Nombre de Empresa</span></p>
          </div>
        </div>

        <!-- current_usuario_interfaz (Shape) -->
        <div id="u73" class="ax_paragraph" data-label="current_usuario_interfaz">
          <img id="u73_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u74" class="text">
            <p><span>Current_User</span></p>
          </div>
        </div>

        <!-- salir (Shape) -->
        <div id="u75" class="ax_shape" data-label="salir">
          <img id="u75_img" class="img " src="images/login/login_button_u8.png"/>
          <!-- Unnamed () -->
          <div id="u76" class="text">
            <p><span>Salir</span></p>
          </div>
        </div>

        <!-- prov_nomb_req (Shape) -->
        <div id="u77" class="ax_paragraph" data-label="prov_nomb_req">
          <img id="u77_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u78" class="text">
            <p><span>* Espacio Requerido</span></p>
          </div>
        </div>

        <!-- prov_ced_req (Shape) -->
        <div id="u79" class="ax_paragraph" data-label="prov_ced_req">
          <img id="u79_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u80" class="text">
            <p><span>* Espacio Requerido</span></p>
          </div>
        </div>

        <!-- prov_telef_req (Shape) -->
        <div id="u81" class="ax_paragraph" data-label="prov_telef_req">
          <img id="u81_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u82" class="text">
            <p><span>* Espacio Requerido</span></p>
          </div>
        </div>

        <!-- prov_nombcont_req (Shape) -->
        <div id="u83" class="ax_paragraph" data-label="prov_nombcont_req">
          <img id="u83_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u84" class="text">
            <p><span>* Espacio Requerido</span></p>
          </div>
        </div>

        <!-- prov_telefcont_req (Shape) -->
        <div id="u85" class="ax_paragraph" data-label="prov_telefcont_req">
          <img id="u85_img" class="img " src="resources/images/transparent.gif"/>
          <!-- Unnamed () -->
          <div id="u86" class="text">
            <p><span>* Espacio Requerido</span></p>
          </div>
        </div>

        <!-- Buscar (HTML Button) -->
        <div id="u87" class="ax_html_button" data-label="provee_buscar">
          <input id="u87_input" type="button" value="Buscar" name ="provee_buscar" onclick="buscar()"/>
        </div>        

      </div>
    </form>
  </body>
</html>
