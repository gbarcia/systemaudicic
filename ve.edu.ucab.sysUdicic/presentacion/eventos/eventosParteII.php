<?php
function procesarProyecto() {
    $objResponse = new xajaxResponse();
    $mensaje = '<div class="exito"><div class="textoMensaje">
                    Proyecto registrado con éxito
                </div></div>';
    $objResponse->addAssign("mensaje", "innerHTML", "$mensaje");
    return $objResponse;
}

function procesarIngreso() {
    $objResponse = new xajaxResponse();
    $mensaje = '<div class="exito"><div class="textoMensaje">
                    Ingreso registrado con éxito
                </div></div>';
    $objResponse->addAssign("mensaje", "innerHTML", "$mensaje");
    return $objResponse;
}

function procesarEgreso() {
    $objResponse = new xajaxResponse();
    $mensaje = '<div class="exito"><div class="textoMensaje">
                    Egreso registrado con éxito
                </div></div>';
    $objResponse->addAssign("mensaje", "innerHTML", "$mensaje");
    return $objResponse;
}

function actualizarProyecto() {
    $objResponse = new xajaxResponse();
    $mensaje = '<div class="exito"><div class="textoMensaje">
                    Proyecto actualizado con éxito
                </div></div>';
    $objResponse->addAssign("mensaje", "innerHTML", "$mensaje");
    return $objResponse;
}

function mostrarFormularioEditar($id) {
    if ($id==1){
        $nombre = "PRENSA DEL SIGLO XIX";
        $cliente = 1;
        $descripcion = "DIGITALIZACION DE TODOS LOS TOMOS";
    }
    if ($id==2){
        $nombre = "PERIODICO VENEZUELA DEMOCRATICA";
        $cliente = 2;
        $descripcion = "MATERIAL EN REVISION";
    }
    if ($id==3){
        $nombre = "DIARIO LA RELIGION";
        $cliente = 3;
        $descripcion = "DIGITALIZACION 5 TOMOS";
    }
    $objResponse = new xajaxResponse();
    $formulario = '<form id="formularioEditarCliente"><fieldset class="fieldSet">
                    <legend class="legend">Actualizar Cliente</legend>
  <table class="formTable" width="342" border="0" cellspacing="0" cellpadding="0">
                        <td colspan="2">&nbsp;</td>
                        <tr>
                            <td class="formTd" width="139">Nombre:</td>
                            <td width="203"><input class="formTextField" name="nombre" type="text" id="nombre" value="'.$nombre.'" size="27"/></td>
                        </tr>
                        <tr>
                            <td colspan="2">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="formTd">Cliente:</td>
                            <td>
                                <select id="nuevoProyecto" name="nuevoProyecto"> ';
                                if ($cliente==1){
                   $formulario .= ' <option value="1" selected>Academia Nacional de la Historia</option>
                                    <option value="2">Acción Democrática</option>
                                    <option value="3">Universidad Católica Andrés Bello </option> ';
                                }
                                if ($cliente==2){
                   $formulario .= ' <option value="1">Academia Nacional de la Historia</option>
                                    <option value="2" selected>Acción Democrática</option>
                                    <option value="3">Universidad Católica Andrés Bello </option> ';
                                }
                                if ($cliente==3){
                   $formulario .= ' <option value="1">Academia Nacional de la Historia</option>
                                    <option value="2">Acción Democrática</option>
                                    <option value="3" selected>Universidad Católica Andrés Bello </option> ';
                                }
                   $formulario .= '</select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">&nbsp;</td>
                        </tr>
                        <tr>
                            <td class="formTd">Descripción:</td>
                            <td class="formTd">
                                <textarea class="formTextField" name="descripcion" id="descripcion" cols="25" rows="3" >'.$descripcion.'</textarea>
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
</form></legend>';
    $objResponse->addAssign("formularioProyecto", "innerHTML", "$formulario");
    return $objResponse;
}

?>
