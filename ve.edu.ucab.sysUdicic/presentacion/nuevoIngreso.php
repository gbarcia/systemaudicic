<?php
require $_SERVER['DOCUMENT_ROOT'] .'/ve.edu.ucab.sysUdicic/serviciotecnico/utilidades/xajax/xajax.inc.php';
require $_SERVER['DOCUMENT_ROOT'] .'/ve.edu.ucab.sysUdicic/presentacion/eventos/eventosParteII.php';
$xajax = new xajax();
$xajax->registerFunction("procesarIngreso");
$xajax->processRequests();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <?
        $xajax->printJavascript ("../serviciotecnico/utilidades/xajax/");
        ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>sysUDICIC | Nuevo Ingreso</title>
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
            <h3>Nuevo Ingreso</h3>
            <div id="mensaje" class="mensajePanel"></div>
            <div class="nuevaTareaLeft">
                <fieldset class="fieldSet">
                    <legend class="legend">Información</legend>
                </fieldset>
            </div>
            
            <div class="nuevaTareaRight">
                <fieldset class="fieldSet">
                    <legend class="legend">Objetivo</legend>
                    <table class="formTable" border="0">
                        <tr>
                            <td class="formTd">Proyecto</td>
                            <td>
                                <select>
                                    <optgroup label="Academia Nacional de la Historia">
                                        <option selected>Prensa del Siglo XIX</option>
                                    </optgroup>
                                    <optgroup label="Acción Democrática">
                                        <option>Periódico Venezuela Democrática</option>
                                    </optgroup>
                                    <optgroup label="Universidad Católica Andrés Bello">
                                        <option>Diario La Religión</option>
                                    </optgroup>
                                </select>
                            </td>
                        </tr>
                        <tr>
                    </table>
                </fieldset>
            </div>
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
