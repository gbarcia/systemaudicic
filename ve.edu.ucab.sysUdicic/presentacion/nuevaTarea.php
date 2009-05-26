<?php require_once "Jmaki.php"; ?>
<?php
require $_SERVER['DOCUMENT_ROOT'] .'/ve.edu.ucab.sysUdicic/serviciotecnico/utilidades/xajax/xajax.inc.php';
require $_SERVER['DOCUMENT_ROOT'] .'/ve.edu.ucab.sysUdicic/presentacion/eventos/eventosParteI.php';
$xajax = new xajax();
$xajax->registerFunction("procesarTarea");
$xajax->processRequests();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <?
        $xajax->printJavascript ("../serviciotecnico/utilidades/xajax/");
        ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>sysUDICIC | Nueva Tarea</title>
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
                            <td><input class="formTextField" type="text" name="" value="" size="65" /></td>
                        </tr>
                        <tr>
                            <td class="formTd">Descripción</td>
                            <td>
                                <textarea class="formTextField" name="textarea" id="textarea" cols="65" rows="8"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td class="formTd">Comentario</td>
                            <td>
                                <textarea class="formTextField" name="textarea" id="textarea" cols="65" rows="8"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp</td>
                            <td><input type="button" value="Crear" onclick="xajax_procesarTarea()"/></td>
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
                                <?php
                                addWidget( array("name" => "jquery.datepicker" ));
                                ?>
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
                                    <optgroup label="Prensa del Siglo XIX">
                                        <option selected>Digitalización</option>
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
