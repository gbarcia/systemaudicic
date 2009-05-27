<?php
require $_SERVER['DOCUMENT_ROOT'] .'/ve.edu.ucab.sysUdicic/serviciotecnico/utilidades/xajax/xajax.inc.php';
require $_SERVER['DOCUMENT_ROOT'] .'/ve.edu.ucab.sysUdicic/presentacion/eventos/eventosParteII.php';
$xajax = new xajax();
$xajax->registerFunction("procesarEgreso");
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
            <h3>Nuevo Egreso</h3>
            <div id="mensaje" class="mensajePanel"></div>
            <div>
                <fieldset class="fieldSet">
                    <legend class="legend">Información</legend>
                    <table class="formTable" border="0">
                        <tr>
                            <td class="formTd">Monto</td>
                            <td><input class="formTextField" type="text" name="" value="" size="67" /></td>
                        </tr>
                        <tr>
                            <td class="formTd">A nombre de</td>
                            <td><input class="formTextField" type="text" name="" value="" size="67" /></td>
                        </tr>
                        <tr>
                            <td class="formTd">Fecha</td>
                            <td><input class="formTextField" type="text" name="" value="" /></td>
                        </tr>
                        <tr>
                            <td class="formTd">Forma de pago</td>
                            <td>
                                <select id="formaPago" name="formaPago">
                                    <option value="1">Efectivo</option>
                                    <option value="2">Tarjeta Credito</option>
                                    <option value="3">Tarjeta Debito </option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="formTd">Descripción</td>
                            <td>
                                <textarea class="formTextField" name="textarea" id="textarea" cols="65" rows="8"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp</td>
                            <td><input type="button" value="Crear" onclick="xajax_procesarEgreso()"/></td>
                        </tr>
                    </table>
                </fieldset>
            </div>
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
