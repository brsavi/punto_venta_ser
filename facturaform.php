<!DOCTYPE html>
<html>
  <head>
    <title>factura</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <link href="resources/css/jquery-ui-themes.css" type="text/css" rel="stylesheet"/>
    <link href="resources/css/axure_rp_page.css" type="text/css" rel="stylesheet"/>
    <link href="data/styles.css" type="text/css" rel="stylesheet"/>
    <link href="files/factura/styles.css" type="text/css" rel="stylesheet"/>
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
    <script src="files/factura/data.js"></script>
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

          function fcrear() {

          $.ajax({     
             type: 'post',                                 
             url: 'crearfactura.php',                   
             data: {},                                     
            dataType: 'json',                   
            success: function(data)  {
              document.getElementById("nofactura").value  = data[0];              

            } 

          });

        }
		
		function fagregar() {

          $.ajax({     
             type: 'post',                                 
             url: 'agregarfactura.php',                   
             data: {idp: document.getElementById("u5_input").value,
					cant: document.getElementById("u8_input").value,
					fac: document.getElementById("nofactura").value}, 
                                    
            dataType: 'json',                   
            success: function(data)  {
				    document.getElementById("u18_input").value  = document.getElementById("u18_input").value + document.getElementById("u8_input").value * data[0];    
					document.getElementById("u20_input").value  = document.getElementById("u18_input").value * (1 - document.getElementById("u20_input").value/100 );    
						 
            } 

          });

        }
		
		function ffacturar() {

          $.ajax({     
             type: 'post',                                 
             url: 'pagarfactura.php',                   
             data: {sub: document.getElementById("u18_input").value,
					desc: document.getElementById("u19_input").value,
					fac: document.getElementById("nofactura").value,
					tot: document.getElementById("u20_input").value}, 
                                    
            dataType: 'json',                   
            success: function(data)  {
				    
            } 

          });

        }
		
		
		
        </script>
  
  <input type="hidden" name="nofactura" value="" id="nofactura">

  
  
    <div id="base" class="">

      <!-- Unnamed (Shape) -->
      <div id="u0" class="ax_paragraph">
        <img id="u0_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u1" class="text">
          <p><span>Factura</span></p>
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
          <p><span>Codigo de barra</span></p>
        </div>
      </div>

      <!-- fact_id_prod (Text Field) -->
      <div id="u5" class="ax_text_field" data-label="fact_id_prod">
        <input id="u5_input" type="text" value="" disabled/>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u6" class="ax_paragraph">
        <img id="u6_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u7" class="text">
          <p><span>Cantidad</span></p>
        </div>
      </div>

      <!-- fact_cantidad (Text Field) -->
      <div id="u8" class="ax_text_field" data-label="fact_cantidad">
        <input id="u8_input" type="text" value="" disabled/>
      </div>

      <!-- fact_agregar_prod (HTML Button) -->
      <div id="u9" class="ax_html_button" data-label="fact_agregar_prod">
        <input id="u9_input" type="button" value="Agregar" onclick="fagregar()" disabled/>
      </div>

      <!-- fact_list_prod (List Box) -->
      <div id="u10" class="ax_list_box" data-label="fact_list_prod">
        <select id="u10_input" size="2" disabled>
        </select>
      </div>

      <!-- fact_imprimir (HTML Button) -->
      <div id="u11" class="ax_html_button" data-label="fact_imprimir">
        <input id="u11_input" type="button" value="Imprimir" onclick="ffacturar()" disabled/>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u12" class="ax_paragraph">
        <img id="u12_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u13" class="text">
          <p><span>S</span><span>ub total</span></p>
        </div>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u14" class="ax_paragraph">
        <img id="u14_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u15" class="text">
          <p><span>D</span><span>escuento</span></p>
        </div>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u16" class="ax_paragraph">
        <img id="u16_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u17" class="text">
          <p><span>T</span><span>otal</span></p>
        </div>
      </div>

      <!-- fact_sub (Text Field) -->
      <div id="u18" class="ax_text_field" data-label="fact_sub">
        <input id="u18_input" type="text" value="" disabled/>
      </div>

      <!-- fact_desc (Text Field) -->
      <div id="u19" class="ax_text_field" data-label="fact_desc">
        <input id="u19_input" type="text" value="" disabled/>
      </div>

      <!-- fact_total (Text Field) -->
      <div id="u20" class="ax_text_field" data-label="fact_total">
        <input id="u20_input" type="text" value="" disabled/>
      </div>

      <!-- Unnamed (MasterAdmin) -->

      <!-- Unnamed (New Master 1) -->

      <!-- Unnamed (New Master 1) -->

      <!-- Unnamed (Shape) -->
      <div id="u24" class="ax_shape">
        <img id="u24_img" class="img " src="images/usuario/u36.png"/>
        <!-- Unnamed () -->
        <div id="u25" class="text">
          <p><span></span></p>
        </div>
      </div>

      <!-- Unnamed (Menu) -->
      <div id="u26" class="ax_menu">
        <img id="u26_menu" class="img " src="images/usuario/u38_menu.png" alt="u26_menu"/>

        <!-- Unnamed (Table) -->
        <div id="u27" class="ax_table">

          <!-- Unnamed (Menu Item) -->
          <div id="u28" class="ax_table_cell">
            <img id="u28_img" class="img " src="images/usuario/u40.png"/>
            <!-- Unnamed () -->
            <div id="u29" class="text">
              <p><span>Usuarios</span></p>
            </div>
          </div>

          <!-- Unnamed (Menu Item) -->
          <div id="u30" class="ax_table_cell">
            <img id="u30_img" class="img " src="images/usuario/u40.png"/>
            <!-- Unnamed () -->
            <div id="u31" class="text">
              <p><span>Proveedores</span></p>
            </div>
          </div>

          <!-- Unnamed (Menu Item) -->
          <div id="u32" class="ax_table_cell">
            <img id="u32_img" class="img " src="images/usuario/u40.png"/>
            <!-- Unnamed () -->
            <div id="u33" class="text">
              <p><span>Facturas</span></p>
            </div>
          </div>

          <!-- Unnamed (Menu Item) -->
          <div id="u34" class="ax_table_cell">
            <img id="u34_img" class="img " src="images/usuario/u40.png"/>
            <!-- Unnamed () -->
            <div id="u35" class="text">
              <p><span>Empresas</span></p>
            </div>
          </div>

          <!-- Unnamed (Menu Item) -->
          <div id="u36" class="ax_table_cell">
            <img id="u36_img" class="img " src="images/usuario/u40.png"/>
            <!-- Unnamed () -->
            <div id="u37" class="text">
              <p><span>Productos</span></p>
            </div>
          </div>

          <!-- Unnamed (Menu Item) -->
          <div id="u38" class="ax_table_cell">
            <img id="u38_img" class="img " src="images/usuario/u50.png"/>
            <!-- Unnamed () -->
            <div id="u39" class="text">
              <p><span>Opciones</span></p>
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
                <p><span>Visualizar</span></p>
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
                <p><span>Visualizar</span></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Unnamed (Menu) -->
        <div id="u56" class="ax_menu sub_menu">
          <img id="u56_menu" class="img " src="images/usuario/u52_menu.png" alt="u56_menu"/>

          <!-- Unnamed (Table) -->
          <div id="u57" class="ax_table">

            <!-- Unnamed (Menu Item) -->
            <div id="u58" class="ax_table_cell">
              <img id="u58_img" class="img " src="images/usuario/u54.png"/>
              <!-- Unnamed () -->
              <div id="u59" class="text">
                <p><span>Roles</span></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Unnamed (Menu) -->
        <div id="u60" class="ax_menu sub_menu">
          <img id="u60_menu" class="img " src="images/usuario/u52_menu.png" alt="u60_menu"/>

          <!-- Unnamed (Table) -->
          <div id="u61" class="ax_table">

            <!-- Unnamed (Menu Item) -->
            <div id="u62" class="ax_table_cell">
              <img id="u62_img" class="img " src="images/usuario/u54.png"/>
              <!-- Unnamed () -->
              <div id="u63" class="text">
                <p><span>Cancelar</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Unnamed (Image) -->
      <div id="u64" class="ax_image">
        <img id="u64_img" class="img " src="images/usuario/u76.png"/>
        <!-- Unnamed () -->
        <div id="u65" class="text">
          <p><span></span></p>
        </div>
      </div>

      <!-- Unnamed (Shape) -->
      <div id="u66" class="ax_paragraph">
        <img id="u66_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u67" class="text">
          <p><span>Nombre de Empresa</span></p>
        </div>
      </div>

      <!-- current_usuario_interfaz (Shape) -->
      <div id="u68" class="ax_paragraph" data-label="current_usuario_interfaz">
        <img id="u68_img" class="img " src="resources/images/transparent.gif"/>
        <!-- Unnamed () -->
        <div id="u69" class="text">
          <p><span>Current_User</span></p>
        </div>
      </div>

      <!-- salir (Shape) -->
      <div id="u70" class="ax_shape" data-label="salir">
        <img id="u70_img" class="img " src="images/login/login_button_u8.png"/>
        <!-- Unnamed () -->
        <div id="u71" class="text">
          <p><span>Salir</span></p>
        </div>
      </div>

      <!-- fact_crear (HTML Button) -->
      <div id="u72" class="ax_html_button" data-label="fact_crear">
        <input id="u72_input" type="button" value="Crear factura" onclick="fcrear()"/>
      </div>
    </div>
  </body>
</html>
