<?php
require $_SERVER['DOCUMENT_ROOT'] .'/ve.edu.ucab.sysUdicic/serviciotecnico/utilidades/xajax/xajax.inc.php';
require $_SERVER['DOCUMENT_ROOT'] .'/ve.edu.ucab.sysUdicic/presentacion/eventos/eventosUsuario.php';
$xajax = new xajax();
$xajax->registerFunction("mostrarTablaUsuarios");
$xajax->registerFunction("mostrarFormularioNuevoUsuario");
$xajax->registerFunction("procesarUsuario");
$xajax->processRequests();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <?
        $xajax->printJavascript ("../serviciotecnico/utilidades/xajax/");
        ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>sysUDICIC | Usuarios</title>
        <link rel="stylesheet" type="text/css" href="css/styleMain.css" />
        <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
        <link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <?php
        include 'header.php';
        include 'menu.php';
        ?>
        <div class="content">
        <h3>Usuarios</h3>
        <div id="mensaje" class="mensajePanel"></div>
            <div id="tablaUsuarios" class="nuevoClienteLeft">
                <script language="javaScript">
                    xajax_mostrarTablaUsuarios();
                </script>
            </div>
            <div id="formularioUsuario"  class="nuevoClienteRight">
                <script language="javaScript">
                    xajax_mostrarFormularioNuevoUsuario();
                </script>
            </div>
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>