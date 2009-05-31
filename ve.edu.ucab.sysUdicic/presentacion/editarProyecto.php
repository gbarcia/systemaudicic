<?php
require $_SERVER['DOCUMENT_ROOT'] .'/ve.edu.ucab.sysUdicic/serviciotecnico/utilidades/xajax/xajax.inc.php';
require $_SERVER['DOCUMENT_ROOT'] .'/ve.edu.ucab.sysUdicic/presentacion/eventos/eventosParteII.php';
$xajax = new xajax();
$xajax->registerFunction("actualizarProyecto");
$xajax->registerFunction("mostrarFormularioEditar");
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
            <h3>Proyectos</h3>
            <div id="mensaje" class="mensajePanel"></div>
            <div class="nuevaTareaLeft">
                <fieldset class="fieldSet">
                    <legend class="legend">Listado</legend>
                    <table id="dataTable" cellspacing="0" cellpadding="0">
                        <thead>
                            <tr>
                                <th class="h">NOMBRE</th>
                                <th class="h">CLIENTE</th>
                                <th class="h">DESCRIPCION</th>
                                <th class="h">EDITAR</th>
                            </tr>
                        </thead>
                        <tr>
                            <td class="cell">PRENSA DEL SIGLO XIX</td>
                            <td class="cell">ACADEMIA NACIONAL DE LA HISTORIA</td>
                            <td class="cell">DIGITALIZACION DE TODOS LOS TOMOS</td>
                            <td class="cell"><input type="button" value="EDITAR" onclick="xajax_mostrarFormularioEditar(1)"/></td>
                        </tr>
                        <tr>
                            <td class="cell">PERIODICO VENEZUELA DEMOCRATICA</td>
                            <td class="cell">ACCION DEMOCRATICA</td>
                            <td class="cell">MATERIAL EN REVISION</td>
                            <td class="cell"><input type="button" value="EDITAR" onclick="xajax_mostrarFormularioEditar(2)"/></td>
                        </tr>
                        <tr>
                            <td class="cell">DIARIO LA RELIGION</td>
                            <td class="cell">UNIVERSIDAD CATOLICA ANDRES BELLO</td>
                            <td class="cell">DIGITALIZACION 5 TOMOS</td>
                            <td class="cell"><input type="button" value="EDITAR" onclick="xajax_mostrarFormularioEditar(3)"/></td>
                        </tr>
                    </table>
                </fieldset>
            </div>

            <div class="nuevaTareaRight" id="formularioProyecto">
                <fieldset class="fieldSet">
                    <legend class="legend">Actualizar Proyecto</legend>
                    <table class="formTable" width="342" border="0" cellspacing="0" cellpadding="0">
                        <td colspan="2">&nbsp;</td>
                        <tr>
                            <td class="formTd" width="139">Nombre:</td>
                            <td width="203"><input class="formTextField" name="rif" type="text" id="nombre" size="27"/></td>
                        </tr>
                        <tr>
                            <td colspan="2">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="formTd">Cliente:</td>
                            <td>
                                <select id="nuevoProyecto" name="nuevoProyecto">
                                    <option value="1">Academia Nacional de la Historia</option>
                                    <option value="2">Acción Democrática</option>
                                    <option value="3">Universidad Católica Andrés Bello </option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="formTd">Descripción:</td>
                            <td class="formTd">
                                <textarea class="formTextField" name="descripcion" id="descripcion" cols="25" rows="3" ></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp</td>
                            <td colspan="2">
                                <input type="button" name="button" id="button" value="Actualizar" onclick= "xajax_actualizarProyecto()"/>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
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
