<?php
require $_SERVER['DOCUMENT_ROOT'] .'/ve.edu.ucab.sysUdicic/serviciotecnico/utilidades/xajax/xajax.inc.php';
require $_SERVER['DOCUMENT_ROOT'] .'/ve.edu.ucab.sysUdicic/presentacion/eventos/eventosReunion.php';
$xajax = new xajax();
$xajax->registerFunction("mostrarFormularioNuevaReunion");
$xajax->processRequests();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <?
        $xajax->printJavascript ("../serviciotecnico/utilidades/xajax/");
        ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>sysUDICIC | Nombre</title>
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
            <div id="formularioReunion" class="nuevoClienteLeft">
                <script language="javaScript">
                    xajax_mostrarFormularioNuevaReunion();
                </script>
            </div>
            <div id="formularioReuniondf"  class="nuevoClienteRight">
                <script language="javaScript">
                    //xajax_mostrarFormularioNuevoCliente();
                </script>
            </div>
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>