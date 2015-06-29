<!DOCTYPE html>
<html>
  <head>
    <title>roles</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link href="resources/css/jquery-ui-themes.css" type="text/css" rel="stylesheet"/>
    <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="files/roles/styles.css" type="text/css" rel="stylesheet"/>
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
    <script src="files/roles/data.js"></script>
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

          function rmod() {

          $.ajax({     
             type: 'post',                                 
             url: 'roles.php',                   
             data: {usag:document.getElementById("u82_input").checked , 
                    usbus:document.getElementById("u84_input").checked ,
                    usmod:document.getElementById("u86_input").checked ,
                    usel:document.getElementById("u88_input").checked ,

                    prag:document.getElementById("u72_input").checked ,
                    prbus:document.getElementById("u74_input").checked ,
                    prmod:document.getElementById("u76_input").checked ,
                    prel:document.getElementById("u78_input").checked ,

                    faag:document.getElementById("u92_input").checked ,
                    fabus:document.getElementById("u94_input").checked ,
                    famod:document.getElementById("u96_input").checked ,
                    fael:document.getElementById("u98_input").checked ,

                    empag:document.getElementById("u102_input").checked ,
                    empbus:document.getElementById("u104_input").checked ,
                    empmod:document.getElementById("u106_input").checked ,
                    empel:document.getElementById("u108_input").checked ,

                    proag:document.getElementById("u112_input").checked ,
                    probus:document.getElementById("u114_input").checked ,
                    promod:document.getElementById("u116_input").checked ,
                    proel:document.getElementById("u118_input").checked

                  },                                     
            dataType: 'json',                   
            success: function(data)  {
              document.getElementById("nofactura").value  = data[0];              

            } 

          });

        }

        function rbus() {

          $.ajax({     
             type: 'post',                                 
             url: 'roles.php',                   
             data: {nrol:document.getElementById("u5_input").value 
                  },                                     
            dataType: 'json',                   
            success: function(data)  {
              var filas = data[0];
              var i = 1;
              for (i = 1; i < filas ;i++){

                  switch (data[i]){
                    case 1:
                          document.getElementById("u82_input").checked = true;
                          break;
                    case 2:      
                          document.getElementById("u84_input").checked = true;
                          break;
                    case 3:      
                          document.getElementById("u86_input").checked  = true;
                          break;
                    case 4:      
                          document.getElementById("u88_input").checked  = true;
                          break;
                    case 5:      
                          document.getElementById("u72_input").checked = true ;
                          break;
                    case 6:      
                          document.getElementById("u74_input").checked = true ;
                          break;
                    case 7:      
                          document.getElementById("u76_input").checked  = true;
                          break;
                    case 8:
                          document.getElementById("u78_input").checked = true ;
                          break;
                    case 9:
                          document.getElementById("u92_input").checked  = true;
                          break;
                    case 10:      
                          document.getElementById("u94_input").checked = true ;
                          break;
                    case 11:
                          document.getElementById("u96_input").checked = true ;
                          break;
                    case 12:
                          document.getElementById("u98_input").checked  = true;
                          break;
                    case 13:      
                          document.getElementById("u102_input").checked  = true;
                          break;
                    case 14:      
                          document.getElementById("u104_input").checked = true ;
                          break;
                    case 15:
                          document.getElementById("u106_input").checked  = true;
                          break;
                    case 16:      
                          document.getElementById("u108_input").checked  = true;
                          break;
                    case 17:      
                          document.getElementById("u112_input").checked  = true;
                          break;
                    case 18:      
                          document.getElementById("u114_input").checked = true ;
                          break;
                    case 19:      
                          document.getElementById("u116_input").checked = true ;
                          break;
                    case 20:     
                          document.getElementById("u118_input").checked  = true;
                          break;
                  }

              }     

            } 

          });

        }

    </script>
    <form action = "roles.php" method = "post" name = "form">

    <div id="base" class="">

      <!-- Unnamed (Shape) -->
      <div id="u0" class="ax_h1">
        <img id="u0_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u1" class="text">
          <p><span>Roles</span></p>
        </div>
      </div>

      <!-- Unnamed (Horizontal Line) -->
      <div id="u2" class="ax_horizontal_line">
        <img id="u2_start" class="img " src="resources/images/transparent.gif" alt="u2_start"/>
        <img id="u2_end" class="img " src="resources/images/transparent.gif" alt="u2_end"/>
        <img id="u2_line" class="img " src="images/roles/u2_line.png" alt="u2_line"/>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u3" class="ax_paragraph">
        <img id="u3_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u4" class="text">
          <p><span>Escriba el nombre del Rol:</span></p><p><span>&nbsp;</span></p>
        </div>
      </div>

      <!-- Unnamed (Text Field) -->
      <div id="u5" class="ax_text_field">
        <input id="u5_input" type="text" value="" name="roles_nombre"/>
      </div>

      <!-- Unnamed (HTML Button) -->
      <div id="u6" class="ax_html_button">
        <input id="u6_input" type="submit" value="Guardar Cambios" name="roles_guardar"/>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u7" class="ax_paragraph">
        <img id="u7_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u8" class="text">
          <p><span>Seleccione los permisos</span><span>:</span></p>
        </div>
      </div>

      <!-- Unnamed (HTML Button) -->
      <div id="u9" class="ax_html_button">
        <input id="u9_input" type="button" value="Modificar" name="roles_modificar" onclick = "rbus()"/>
      </div>

      <!-- Unnamed (MasterAdmin) -->

      <!-- Unnamed (New Master 1) -->

      <!-- Unnamed (New Master 1) -->

      <!-- Unnamed (Shape) -->
      <div id="u13" class="ax_shape">
        <img id="u13_img" class="img " src="images/usuario/u36.png"/>
        <!-- Unnamed () -->
        <div id="u14" class="text">
          <p><span></span></p>
        </div>
      </div>

      <!-- Unnamed (Menu) -->
      <div id="u15" class="ax_menu">
        <img id="u15_menu" class="img " src="images/usuario/u38_menu.png" alt="u15_menu"/>

        <!-- Unnamed (Table) -->
        <div id="u16" class="ax_table">

          <!-- Unnamed (Menu Item) -->
          <div id="u17" class="ax_table_cell">
            <img id="u17_img" class="img " src="images/usuario/u40.png"/>
            <!-- Unnamed () -->
            <div id="u18" class="text">
              <p><span>Usuarios</span></p>
            </div>
          </div>

          <!-- Unnamed (Menu Item) -->
          <div id="u19" class="ax_table_cell">
            <img id="u19_img" class="img " src="images/usuario/u40.png"/>
            <!-- Unnamed () -->
            <div id="u20" class="text">
              <p><span>Proveedores</span></p>
            </div>
          </div>

          <!-- Unnamed (Menu Item) -->
          <div id="u21" class="ax_table_cell">
            <img id="u21_img" class="img " src="images/usuario/u40.png"/>
            <!-- Unnamed () -->
            <div id="u22" class="text">
              <p><span>Facturas</span></p>
            </div>
          </div>

          <!-- Unnamed (Menu Item) -->
          <div id="u23" class="ax_table_cell">
            <img id="u23_img" class="img " src="images/usuario/u40.png"/>
            <!-- Unnamed () -->
            <div id="u24" class="text">
              <p><span>Empresas</span></p>
            </div>
          </div>

          <!-- Unnamed (Menu Item) -->
          <div id="u25" class="ax_table_cell">
            <img id="u25_img" class="img " src="images/usuario/u40.png"/>
            <!-- Unnamed () -->
            <div id="u26" class="text">
              <p><span>Productos</span></p>
            </div>
          </div>

          <!-- Unnamed (Menu Item) -->
          <div id="u27" class="ax_table_cell">
            <img id="u27_img" class="img " src="images/usuario/u50.png"/>
            <!-- Unnamed () -->
            <div id="u28" class="text">
              <p><span>Opciones</span></p>
            </div>
          </div>
        </div>

        <!-- Unnamed (Menu) -->
        <div id="u29" class="ax_menu sub_menu">
          <img id="u29_menu" class="img " src="images/usuario/u52_menu.png" alt="u29_menu"/>

          <!-- Unnamed (Table) -->
          <div id="u30" class="ax_table">

            <!-- Unnamed (Menu Item) -->
            <div id="u31" class="ax_table_cell">
              <img id="u31_img" class="img " src="images/usuario/u54.png"/>
              <!-- Unnamed () -->
              <div id="u32" class="text">
                <p><span>Visualizar</span></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Unnamed (Menu) -->
        <div id="u33" class="ax_menu sub_menu">
          <img id="u33_menu" class="img " src="images/usuario/u52_menu.png" alt="u33_menu"/>

          <!-- Unnamed (Table) -->
          <div id="u34" class="ax_table">

            <!-- Unnamed (Menu Item) -->
            <div id="u35" class="ax_table_cell">
              <img id="u35_img" class="img " src="images/usuario/u54.png"/>
              <!-- Unnamed () -->
              <div id="u36" class="text">
                <p><span>Visualizar</span></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Unnamed (Menu) -->
        <div id="u37" class="ax_menu sub_menu">
          <img id="u37_menu" class="img " src="images/usuario/u52_menu.png" alt="u37_menu"/>

          <!-- Unnamed (Table) -->
          <div id="u38" class="ax_table">

            <!-- Unnamed (Menu Item) -->
            <div id="u39" class="ax_table_cell">
              <img id="u39_img" class="img " src="images/usuario/u54.png"/>
              <!-- Unnamed () -->
              <div id="u40" class="text">
                <p><span>Visualizar</span></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Unnamed (Menu) -->
        <div id="u41" class="ax_menu sub_menu">
          <img id="u41_menu" class="img " src="images/usuario/u52_menu.png" alt="u41_menu"/>

          <!-- Unnamed (Table) -->
          <div id="u42" class="ax_table">

            <!-- Unnamed (Menu Item) -->
            <div id="u43" class="ax_table_cell">
              <img id="u43_img" class="img " src="images/usuario/u54.png"/>
              <!-- Unnamed () -->
              <div id="u44" class="text">
                <p><span>Visualizar</span></p>
              </div>
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
                <p><span>Roles</span></p>
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
                <p><span>Cancelar</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Unnamed (Image) -->
      <div id="u53" class="ax_image">
        <img id="u53_img" class="img " src="images/usuario/u76.png"/>
        <!-- Unnamed () -->
        <div id="u54" class="text">
          <p><span></span></p>
        </div>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u55" class="ax_paragraph">
        <img id="u55_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u56" class="text">
          <p><span>Nombre de Empresa</span></p>
        </div>
      </div>

      <!-- current_usuario_interfaz (Shape) -->
      <div id="u57" class="ax_paragraph" data-label="current_usuario_interfaz">
        <img id="u57_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u58" class="text">
          <p><span>Current_User</span></p>
        </div>
      </div>

      <!-- salir (Shape) -->
      <div id="u59" class="ax_shape" data-label="salir">
        <img id="u59_img" class="img " src="images/login/login_button_u8.png"/>
        <!-- Unnamed () -->
        <div id="u60" class="text">
          <p><span>Salir</span></p>
        </div>
      </div>

      <!-- Unnamed (Table) -->
      <div id="u61" class="ax_table">

        <!-- Unnamed (Table Cell) -->
        <div id="u62" class="ax_table_cell">
          <img id="u62_img" class="img " src="images/roles/u62.png"/>
          <!-- Unnamed () -->
          <div id="u63" class="text">
            <p><span></span></p>
          </div>
        </div>

        <!-- Unnamed (Table Cell) -->
        <div id="u64" class="ax_table_cell">
          <img id="u64_img" class="img " src="images/roles/u62.png"/>
          <!-- Unnamed () -->
          <div id="u65" class="text">
            <p><span></span></p>
          </div>
        </div>

        <!-- Unnamed (Table Cell) -->
        <div id="u66" class="ax_table_cell">
          <img id="u66_img" class="img " src="images/roles/u62.png"/>
          <!-- Unnamed () -->
          <div id="u67" class="text">
            <p><span></span></p>
          </div>
        </div>

        <!-- Unnamed (Table Cell) -->
        <div id="u68" class="ax_table_cell">
          <img id="u68_img" class="img " src="images/roles/u62.png"/>
          <!-- Unnamed () -->
          <div id="u69" class="text">
            <p><span></span></p>
          </div>
        </div>

        <!-- Unnamed (Table Cell) -->
        <div id="u70" class="ax_table_cell">
          <img id="u70_img" class="img " src="images/roles/u70.png"/>
          <!-- Unnamed () -->
          <div id="u71" class="text">
            <p><span></span></p>
          </div>
        </div>
      </div>

      <!-- Unnamed (Checkbox) -->
      <div id="u72" class="ax_checkbox">
        <label for="u72_input">
          <!-- Unnamed () -->
          <div id="u73" class="text">
            <p><span>Agregar</span></p>
          </div>
        </label>
        <input id="u72_input" type="checkbox" value="checkbox" name="roles_chk_proveedor_agregar"/>
      </div>

      <!-- Unnamed (Checkbox) -->
      <div id="u74" class="ax_checkbox">
        <label for="u74_input">
          <!-- Unnamed () -->
          <div id="u75" class="text">
            <p><span>Buscar</span></p>
          </div>
        </label>
        <input id="u74_input" type="checkbox" value="checkbox" name="roles_chk_proveedor_buscar"/>
      </div>

      <!-- Unnamed (Checkbox) -->
      <div id="u76" class="ax_checkbox">
        <label for="u76_input">
          <!-- Unnamed () -->
          <div id="u77" class="text">
            <p><span>Modificar</span></p>
          </div>
        </label>
        <input id="u76_input" type="checkbox" value="checkbox" name="roles_chk_proveedor_modificar"/>
      </div>

      <!-- Unnamed (Checkbox) -->
      <div id="u78" class="ax_checkbox">
        <label for="u78_input">
          <!-- Unnamed () -->
          <div id="u79" class="text">
            <p><span>Eliminar</span></p>
          </div>
        </label>
        <input id="u78_input" type="checkbox" value="checkbox" name="roles_chk_prov_eliminar"/>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u80" class="ax_paragraph">
        <img id="u80_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u81" class="text">
          <p><span>Proveedores</span></p><p><span>&nbsp;</span></p>
        </div>
      </div>

      <!-- Unnamed (Checkbox) -->
      <div id="u82" class="ax_checkbox">
        <label for="u82_input">
          <!-- Unnamed () -->
          <div id="u83" class="text">
            <p><span>Agregar</span></p>
          </div>
        </label>
        <input id="u82_input" type="checkbox" value="checkbox" name="roles_chk_usuario_agregar"/>
      </div>

      <!-- Unnamed (Checkbox) -->
      <div id="u84" class="ax_checkbox">
        <label for="u84_input">
          <!-- Unnamed () -->
          <div id="u85" class="text">
            <p><span>Buscar</span></p>
          </div>
        </label>
        <input id="u84_input" type="checkbox" value="checkbox" name="roles_chk_usuario_buscar"/>
      </div>

      <!-- Unnamed (Checkbox) -->
      <div id="u86" class="ax_checkbox">
        <label for="u86_input">
          <!-- Unnamed () -->
          <div id="u87" class="text">
            <p><span>Modificar</span></p>
          </div>
        </label>
        <input id="u86_input" type="checkbox" value="checkbox" name="roles_chk_usuario_modificar"/>
      </div>

      <!-- Unnamed (Checkbox) -->
      <div id="u88" class="ax_checkbox">
        <label for="u88_input">
          <!-- Unnamed () -->
          <div id="u89" class="text">
            <p><span>Eliminar</span></p>
          </div>
        </label>
        <input id="u88_input" type="checkbox" value="checkbox" name="roles_chk_usuario_Eliminar"/>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u90" class="ax_paragraph">
        <img id="u90_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u91" class="text">
          <p><span>Usuarios</span></p>
        </div>
      </div>

      <!-- Unnamed (Checkbox) -->
      <div id="u92" class="ax_checkbox">
        <label for="u92_input">
          <!-- Unnamed () -->
          <div id="u93" class="text">
            <p><span>Agregar</span></p>
          </div>
        </label>
        <input id="u92_input" type="checkbox" value="checkbox" name="roles_chk_factura_agregar"/>
      </div>

      <!-- Unnamed (Checkbox) -->
      <div id="u94" class="ax_checkbox">
        <label for="u94_input">
          <!-- Unnamed () -->
          <div id="u95" class="text">
            <p><span>Buscar</span></p>
          </div>
        </label>
        <input id="u94_input" type="checkbox" value="checkbox" name="roles_chk_factura_buscar"/>
      </div>

      <!-- Unnamed (Checkbox) -->
      <div id="u96" class="ax_checkbox">
        <label for="u96_input">
          <!-- Unnamed () -->
          <div id="u97" class="text">
            <p><span>Modificar</span></p>
          </div>
        </label>
        <input id="u96_input" type="checkbox" value="checkbox" name="roles_chk_factura_modificar"/>
      </div>

      <!-- Unnamed (Checkbox) -->
      <div id="u98" class="ax_checkbox">
        <label for="u98_input">
          <!-- Unnamed () -->
          <div id="u99" class="text">
            <p><span>Eliminar</span></p>
          </div>
        </label>
        <input id="u98_input" type="checkbox" value="checkbox" name="roles_chk_factura_eliminar"/>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u100" class="ax_paragraph">
        <img id="u100_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u101" class="text">
          <p><span>Facturas</span></p>
        </div>
      </div>

      <!-- Unnamed (Checkbox) -->
      <div id="u102" class="ax_checkbox">
        <label for="u102_input">
          <!-- Unnamed () -->
          <div id="u103" class="text">
            <p><span>Agregar</span></p>
          </div>
        </label>
        <input id="u102_input" type="checkbox" value="checkbox" name="roles_chk_empresa_agregar"/>
      </div>

      <!-- Unnamed (Checkbox) -->
      <div id="u104" class="ax_checkbox">
        <label for="u104_input">
          <!-- Unnamed () -->
          <div id="u105" class="text">
            <p><span>Buscar</span></p>
          </div>
        </label>
        <input id="u104_input" type="checkbox" value="checkbox" name="roles_chk_empresa_buscar"/>
      </div>

      <!-- Unnamed (Checkbox) -->
      <div id="u106" class="ax_checkbox">
        <label for="u106_input">
          <!-- Unnamed () -->
          <div id="u107" class="text">
            <p><span>Modificar</span></p>
          </div>
        </label>
        <input id="u106_input" type="checkbox" value="checkbox" name="roles_chk_empresa_modificar"/>
      </div>

      <!-- Unnamed (Checkbox) -->
      <div id="u108" class="ax_checkbox">
        <label for="u108_input">
          <!-- Unnamed () -->
          <div id="u109" class="text">
            <p><span>Eliminar</span></p>
          </div>
        </label>
        <input id="u108_input" type="checkbox" value="checkbox" name="roles_chk_empresa_eliminar"/>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u110" class="ax_paragraph">
        <img id="u110_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u111" class="text">
          <p><span>Empresas</span></p>
        </div>
      </div>

      <!-- Unnamed (Checkbox) -->
      <div id="u112" class="ax_checkbox">
        <label for="u112_input">
          <!-- Unnamed () -->
          <div id="u113" class="text">
            <p><span>Agregar</span></p>
          </div>
        </label>
        <input id="u112_input" type="checkbox" value="checkbox" name="roles_chk_producto_agregar"/>
      </div>

      <!-- Unnamed (Checkbox) -->
      <div id="u114" class="ax_checkbox">
        <label for="u114_input">
          <!-- Unnamed () -->
          <div id="u115" class="text">
            <p><span>Buscar</span></p>
          </div>
        </label>
        <input id="u114_input" type="checkbox" value="checkbox" name="roles_chk_producto_buscar"/>
      </div>

      <!-- Unnamed (Checkbox) -->
      <div id="u116" class="ax_checkbox">
        <label for="u116_input">
          <!-- Unnamed () -->
          <div id="u117" class="text">
            <p><span>Modificar</span></p>
          </div>
        </label>
        <input id="u116_input" type="checkbox" value="checkbox" name="roles_chk_producto_modificar"/>
      </div>

      <!-- Unnamed (Checkbox) -->
      <div id="u118" class="ax_checkbox">
        <label for="u118_input">
          <!-- Unnamed () -->
          <div id="u119" class="text">
            <p><span>Eliminar</span></p>
          </div>
        </label>
        <input id="u118_input" type="checkbox" value="checkbox" name="roles_chk_producto_eliminar"/>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u120" class="ax_paragraph">
        <img id="u120_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u121" class="text">
          <p><span>Productos</span></p>
        </div>
      </div>
    </div>

  </form>
  </body>
</html>
