<?php
require $_SERVER['DOCUMENT_ROOT'] .'/ve.edu.ucab.sysUdicic/serviciotecnico/utilidades/xajax/xajax.inc.php';
require $_SERVER['DOCUMENT_ROOT'] .'/ve.edu.ucab.sysUdicic/presentacion/eventos/eventosParteI.php';
$xajax = new xajax();
$xajax->registerFunction("actualizarTarea");
$xajax->processRequests();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <?
        $xajax->printJavascript ("../serviciotecnico/utilidades/xajax/");
        ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>sysUDICIC | Editar Tarea</title>
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
            <h3>Nueva Tarea</h3>
            <div id="mensaje" class="mensajePanel"></div>
            <div class="nuevaTareaLeft">
                <fieldset class="fieldSet">
                    <legend class="legend">Información</legend>
                    <table class="formTable" border="0">
                        <tr>
                            <td class="formTd">Resumen</td>
                            <td><input class="formTextField" type="text" name="" value="Digitalización" size="65" /></td>
                        </tr>
                        <tr>
                            <td class="formTd">Descripción</td>
                            <td>
                                <textarea class="formTextField" name="textarea" id="textarea" cols="65" rows="8">Digitalización de la primera parte del material de la Prensa del Siglo XIX.</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="formTd">Comentario</td>
                            <td>
                                <textarea class="formTextField" name="textarea" id="textarea" cols="65" rows="8">Material medianamente deteriorado.</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp</td>
                            <td>
                                <select>
                                    <option selected="selected">Dejar abierta</option>
                                    <option>Poner En Progreso</option>
                                    <option>Cerrar</option>
                                    <option>Poner como Sin Solución</option>
                                    <option>Poner como Inválida</option>
                                    <option>Poner como Duplicada</option>
                                <option value="6">Esperar</option></select>
                                <input type="button" value="Guardar" onclick="xajax_actualizarTarea()"/>
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
                            <td class="formTd">Asignada a</td>
                            <td><select name="">
                                    <option>Da Silva, Eliana</option>
                                    <option>Barcia, Gerardo</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td class="formTd">Prioridad</td>
                            <td>
                                <select>
                                    <option>Crítica</option>
                                    <option>Urgente</option>
                                    <option>Alta</option>
                                    <option selected="selected">Normal</option>
                                    <option>Baja</option>
                                    <option>Muy baja</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="formTd">Importancia</td>
                            <td>
                                <select>
                                    <option>La más alta</option>
                                    <option>Crítica</option>
                                    <option>Mayor</option>
                                    <option selected="selected">Normal</option>
                                    <option>Menor</option>
                                    <option>Mínima</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="formTd">Fecha Limite</td>
                            <td>
                                <input class="formTextField" type="text" name="" value="10-06-2009" />
                            </td>
                        </tr>
                    </table>
                </fieldset>
                <fieldset class="fieldSet">
                    <legend class="legend">Dependencias</legend>
                    <table class="formTable" border="0">
                        <tr>
                            <td class="formTd">Depende de</td>
                            <td>
                                <select>
                                    <option selected>Ninguna</option>
                                    <optgroup label="Prensa del Siglo XIX">
                                        <option>Digitalización</option>
                                    </optgroup>
                                    <optgroup label="Periódico Venezuela Democrática">
                                        <option>Digitalización</option>
                                        <option>Edición</option>
                                    </optgroup>
                                    <optgroup label="Universidad Católica Andrés Bello">
                                        <option>Diario La Religión</option>
                                    </optgroup>
                                </select>
                            </td>
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
