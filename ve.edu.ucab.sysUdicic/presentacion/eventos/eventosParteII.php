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

function actualizarIngreso() {
    $objResponse = new xajaxResponse();
    $mensaje = '<div class="exito"><div class="textoMensaje">
                    Ingreso actualizado con éxito
                </div></div>';
    $objResponse->addAssign("mensaje", "innerHTML", "$mensaje");
    return $objResponse;
}

function actualizarEgreso() {
    $objResponse = new xajaxResponse();
    $mensaje = '<div class="exito"><div class="textoMensaje">
                    Egreso actualizado con éxito
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
    $formulario = '<form><fieldset class="fieldSet">
                    <legend class="legend">Actualizar Proyecto</legend>
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

function mostrarFormularioEditarIngreso($id) {
    if ($id==1){
        $nombre = "PRENSA DEL SIGLO XIX";
        $fecha = '2009-01-31';
        $monto = 1000;
        $formaPago = "TARJETA CREDITO";
        $descripcion = "CANCELACION PRIMERA CUOTA";
    }
    if ($id==2){
        $nombre = "PERIODICO VENEZUELA DEMOCRATICA";
        $fecha = '2009-03-09';
        $monto = 750;
        $formaPago = "EFECTIVO";
        $descripcion = "CANCELACION SEGUNDA CUOTA";
    }
    $objResponse = new xajaxResponse();
    $formulario = '<form><fieldset class="fieldSet">
                    <legend class="legend">Actualizar Ingreso</legend>
                    <table class="formTable" border="0">
                        <tr>
                            <td class="formTd">Monto</td>
                            <td><input class="formTextField" type="text" name="" value="'.$monto.'" /></td>
                        </tr>
                        <tr>
                            <td class="formTd">Fecha</td>
                            <td><input class="formTextField" type="text" name="" value="'.$fecha.'"/></td>
                        </tr>
                        <tr>
                            <td class="formTd">Forma de pago</td>
                            <td>
                                <select id="formaPago" name="formaPago"> ';
                                if($id==1){
                                $formulario .= '<option value="1">Efectivo</option>
                                    <option value="2"selected>Tarjeta Credito</option>
                                    <option value="3">Tarjeta Debito </option> ';
                                }
                                if($id==2){
                                    $formulario .= '<option value="1" selected>Efectivo</option>
                                    <option value="2">Tarjeta Credito</option>
                                    <option value="3">Tarjeta Debito </option> ';
                                }
                    $formulario .=  '</select>
                            </td>
                        </tr>
                        <tr>
                            <td class="formTd">Descripción</td>
                            <td>
                                <textarea class="formTextField" name="textarea" id="textarea" cols="25" rows="3">'.$descripcion.'</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp</td>
                            <td><input type="button" value="Actualizar" onclick="xajax_actualizarIngreso()"/></td>
                        </tr>
                    </table>
</form></legend>';
    $objResponse->addAssign("formularioIngreso", "innerHTML", "$formulario");
    return $objResponse;
}

function mostrarFormularioEditarEgreso() {
    $objResponse = new xajaxResponse();
    $formulario = '<form><fieldset class="fieldSet">
                    <legend class="legend">Actualizar Egreso</legend>
                    <table class="formTable" border="0">
                        <tr>
                            <td class="formTd">Monto</td>
                            <td><input class="formTextField" type="text" name="" value="1200" /></td>
                        </tr>
                        <tr>
                            <td class="formTd">A nombre de</td>
                            <td><input class="formTextField" type="text" name="" value="ELIANA" /></td>
                        </tr>
                        <tr>
                            <td class="formTd">Fecha</td>
                            <td><input class="formTextField" type="text" name="" value="2008-12-10" /></td>
                        </tr>
                        <tr>
                            <td class="formTd">Forma de pago</td>
                            <td>
                                <select id="formaPago" name="formaPago">
                                    <option value="1">Efectivo</option>
                                    <option value="2" selected>Tarjeta Credito</option>
                                    <option value="3">Tarjeta Debito </option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="formTd">Descripción</td>
                            <td>
                                <textarea class="formTextField" name="textarea" id="textarea" cols="23" rows="8">MANTENIMIENTO ESCANER</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp</td>
                            <td><input type="button" value="Actualizar" onclick="xajax_actualizarEgreso()"/></td>
                        </tr>
                    </table>
</form></legend>';
    $objResponse->addAssign("formularioEgreso", "innerHTML", "$formulario");
    return $objResponse;
}

?>
