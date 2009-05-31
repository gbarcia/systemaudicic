<?php
require $_SERVER['DOCUMENT_ROOT'] .'/ve.edu.ucab.sysUdicic/serviciotecnico/utilidades/xajax/xajax.inc.php';
require $_SERVER['DOCUMENT_ROOT'] .'/ve.edu.ucab.sysUdicic/presentacion/eventos/eventosParteII.php';
$xajax = new xajax();
$xajax->registerFunction("actualizarEgreso");
$xajax->registerFunction("mostrarFormularioEditarEgreso");
$xajax->processRequests();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <?
        $xajax->printJavascript ("../serviciotecnico/utilidades/xajax/");
        ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>sysUDICIC | Editar Proyecto</title>
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
            <h3>Egresos</h3>
            <div id="mensaje" class="mensajePanel"></div>
            <div class="nuevaTareaLeft">
                <fieldset class="fieldSet">
                    <legend class="legend">Listado</legend>
                    <table id="dataTable" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th class="h">A NOMBRE DE</th>
                                <th class="h">MONTO</th>
                                <th class="h">FECHA</th>
                                <th class="h">FORMA PAGO</th>
                                <th class="h">DESCRIPCION</th>
                                <th class="h">EDITAR</th>
                            </tr>
                        </thead>
                        <tr>
                            <td class="cell">ELIANA</td>
                            <td class="cell">1200</td>
                            <td class="cell">2008-12-10</td>
                            <td class="cell">TARJETA CREDITO</td>
                            <td class="cell">MANTENIMIENTO ESCANER</td>
                            <td class="cell"><input type="button" value="EDITAR" onclick="xajax_mostrarFormularioEditarEgreso()"/></td>
                        </tr>
                    </table>
                </fieldset>
            </div>

            <div class="nuevaTareaRight" id="formularioEgreso">
                <fieldset class="fieldSet">
                    <legend class="legend">Actualizar Egreso</legend>
                    <table class="formTable" border="0">
                        <tr>
                            <td class="formTd">Monto</td>
                            <td><input class="formTextField" type="text" name="" value="" /></td>
                        </tr>
                        <tr>
                            <td class="formTd">A nombre de</td>
                            <td><input class="formTextField" type="text" name="" value="" /></td>
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
                                <textarea class="formTextField" name="textarea" id="textarea" cols="23" rows="8"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp</td>
                            <td><input type="button" value="Actualizar" onclick="xajax_actualizarEgreso()"/></td>
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