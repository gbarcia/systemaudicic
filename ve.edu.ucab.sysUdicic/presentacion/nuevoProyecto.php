<?php
require $_SERVER['DOCUMENT_ROOT'] .'/ve.edu.ucab.sysUdicic/serviciotecnico/utilidades/xajax/xajax.inc.php';
require $_SERVER['DOCUMENT_ROOT'] .'/ve.edu.ucab.sysUdicic/presentacion/eventos/eventosParteII.php';
$xajax = new xajax();
$xajax->registerFunction("procesarProyecto");
$xajax->processRequests();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <?
        $xajax->printJavascript ("../serviciotecnico/utilidades/xajax/");
        ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>sysUDICIC | Nuevo Proyecto</title>
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
            <h3>Nuevo Proyecto</h3>
            <div id="mensaje" class="mensajePanel"></div>
            <fieldset class="fieldSet">
            <legend class="legend">Información</legend>
            <table width="342" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td class="formTd">&nbsp;</td>
                </tr>
                <tr>
                    <td class="formTd">Nombre:</td>
                    <td><input class="formTextField" name="nombre" type="text" id="nombre" size="65"/></td>
                </tr>
                <tr>
                    <td class="formTd">&nbsp;</td>
                </tr>
                <tr>
                    <td class="formTd">Cliente:</td>
                    <td>
                        <select id="nuevoProyecto" name="nuevoProyecto">
                            <option value="1">*  Academia Nacional de la Historia</option>
                            <option value="2">* Acción Democrática</option>
                            <option value="3">* Universidad Católica Andrés Bello </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="formTd">&nbsp;</td>
                </tr>
                <tr>
                    <td class="formTd">Descripcion:</td>
                    <td class="formTd">
                        <textarea class="formTextField" name="descripcion" id="descripcion" cols="65" rows="8"></textarea>
                    </td>
                </tr>
                <tr>
                    <td class="formTd">&nbsp;</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="formTd">
                        <input type="button" value="Registrar" onclick="xajax_procesarProyecto()"/>
                    </td>
                </tr>
            </table>
            </fieldset>
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
