<?phprequire $_SERVER['DOCUMENT_ROOT'] .'/ve.edu.ucab.sysUdicic/serviciotecnico/utilidades/xajax/xajax.inc.php';require $_SERVER['DOCUMENT_ROOT'] .'/ve.edu.ucab.sysUdicic/presentacion/eventos/eventosCliente.php';$xajax = new xajax();$xajax->registerFunction("mostrarTablaClientes");$xajax->registerFunction("mostrarFormularioNuevoCliente");$xajax->registerFunction("mostrarFormularioEditar");$xajax->registerFunction("procesarCliente");$xajax->registerFunction("procesarClienteEditar");$xajax->processRequests();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>    <head>        <?        $xajax->printJavascript ("../serviciotecnico/utilidades/xajax/");        ?>        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        <title>sysUDICIC | Nombre</title>        <link rel="stylesheet" type="text/css" href="css/styleMain.css" />        <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>        <link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />    </head>    <body>        <?php        include 'header.php';        include 'menu.php';        ?>        <div id="mensaje" class="mensajePanel"></div>        <div class="content">        <h3>Clientes</h3>            <div id="tablaClientes" class="nuevoClienteLeft">                <script language="javaScript">                    xajax_mostrarTablaClientes();                </script>            </div>            <div id="formularioCliente"  class="nuevoClienteRight">                <script language="javaScript">                    xajax_mostrarFormularioNuevoCliente();                </script>            </div>        </div>        <?php        include 'footer.php';        ?>    </body></html>