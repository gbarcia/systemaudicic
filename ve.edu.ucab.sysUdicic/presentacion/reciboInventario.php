<?php
require $_SERVER['DOCUMENT_ROOT'] .'/ve.edu.ucab.sysUdicic/serviciotecnico/utilidades/xajax/xajax.inc.php';
require $_SERVER['DOCUMENT_ROOT'] .'/ve.edu.ucab.sysUdicic/presentacion/eventos/eventosParteI.php';
$xajax = new xajax();
$xajax->registerFunction("procesarInventario");
$xajax->processRequests();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <?
        $xajax->printJavascript ("../serviciotecnico/utilidades/xajax/");
        ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>sysUDICIC | Recepción de Inventario</title>
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
            <h3>Recepción de Inventario</h3>
            <div id="mensaje" class="mensajePanel"></div>
            <div class="nuevaTareaLeft">
                <fieldset class="fieldSet">
                    <legend class="legend">Información</legend>
                    <table class="formTable" border="0">
                        <tr>
                            <td class="formTd">Fecha de Recepción</td>
                            <td><input class="formTextField" type="text" name="" value="" size="" /></td>
                        </tr>
                        <tr>
                            <td class="formTd" colspan="2">Sobre la naturaleza de los materiales:</td>
                        </tr>
                        <tr>
                            <td class="formTd">Titulo</td>
                            <td><input class="formTextField" type="text" name="" value="" size="50"/></td>
                        </tr>
                        <tr>
                            <td class="formTd">Autor</td>
                            <td><input class="formTextField" type="text" name="" value="" size="50" /></td>
                        </tr>
                        <tr>
                            <td class="formTd">Fecha</td>
                            <td><input class="formTextField" type="text" name="" value="" /></td>
                        </tr>
                        <tr>
                            <td class="formTd">N° de Tomo</td>
                            <td><input class="formTextField" type="text" name="" value="" /></td>
                        </tr>
                        <tr>
                            <td class="formTd">N° de Páginas</td>
                            <td><input class="formTextField" type="text" name="" value="" /></td>
                        </tr>
                        <tr>
                            <td class="formTd">Observaciones relevantes</td>
                            <td>
                                <textarea class="formTextField" name="textarea" id="textarea" cols="50" rows="8"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="formTd">&nbsp;</td>
                            <td>
                                <input type="button" value="Registrar" onclick="xajax_procesarInventario()"/>
                            </td>
                        </tr>
                    </table>
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
