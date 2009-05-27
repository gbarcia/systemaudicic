<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/ve.edu.ucab.sysUdicic/serviciotecnico/persistencia/Persistencia.class.php';
define("CCSTABLA", "");

function mostrarTablaClientes () {
    $objResponse = new xajaxResponse();
    $controlPersistencia = new Persistenciaclass();
    $recurso = $controlPersistencia->traerTodosLosClientes();
    $resultado = '<form id="formularioEditarMarcar"><fieldset class="fieldSet">
                    <legend class="legend">Listado</legend>';
    $resultado.= '<table id="dataTable" cellspacing="0" cellpadding="0">';
    $resultado.= '<thead>';
    $resultado.= '<tr>';
    $resultado.= '<th class="h">RIF</th>';
    $resultado.= '<th class="h">NOMBRE</th>';
    $resultado.= '<th class="h">TELEFONO</th>';
    $resultado.= '<th class="h">DIRECCION</th>';
    $resultado.= '<th class="h">EDITAR</th>';
    $resultado.= '</tr>';
    $resultado.= '</thead>';
    $color = false;
    while ($row = mysql_fetch_array($recurso)) {
        $resultado.= '<td class="cell">' . $row[rif] .'</td>';
        $resultado.= '<td class="cell">' . $row[nombre]. '</td>';
        $resultado.= '<td class="cell">' . $row[telefono]. '</td>';
        $resultado.= '<td class="cell">' . $row[direccion]. '</td>';
        $resultado.= '<td class="cell"><input type="button" value="EDITAR"
                      onclick="xajax_mostrarFormularioEditar
                      (\''. $row[rif] .'\')"/></td>';
        $resultado.= '</tr>';
    }
    $resultado.= '</table>';
    $resultado.= '</form>';
    $objResponse->addAssign("tablaClientes", "innerHTML", $resultado);
    return $objResponse;
}
function mostrarTablaClientesString () {
    $controlPersistencia = new Persistenciaclass();
    $recurso = $controlPersistencia->traerTodosLosClientes();
    $resultado = '<form id="formularioEditarMarcar"><fieldset class="fieldSet">
                    <legend class="legend">Listado</legend>';
    $resultado.= '<table id="dataTable" cellspacing="0" cellpadding="0">';
    $resultado.= '<thead>';
    $resultado.= '<tr>';
    $resultado.= '<th class="h">RIF</th>';
    $resultado.= '<th class="h">NOMBRE</th>';
    $resultado.= '<th class="h">TELEFONO</th>';
    $resultado.= '<th class="h">DIRECCION</th>';
    $resultado.= '<th class="h">EDITAR</th>';
    $resultado.= '</tr>';
    $resultado.= '</thead>';
    $color = false;
    while ($row = mysql_fetch_array($recurso)) {
        $resultado.= '<td class="cell">' . $row[rif] .'</td>';
        $resultado.= '<td class="cell">' . $row[nombre]. '</td>';
        $resultado.= '<td class="cell">' . $row[telefono]. '</td>';
        $resultado.= '<td class="cell">' . $row[direccion]. '</td>';
        $resultado.= '<td class="cell"><input type="button" value="EDITAR"
                      onclick="xajax_mostrarFormularioEditar
                      (\''. $row[rif] .'\')"/></td>';
        $resultado.= '</tr>';
    }
    $resultado.= '</table>';
    $resultado.= '</form>';
    return $resultado;
}

function mostrarFormularioNuevoCliente () {
    $objResponse = new xajaxResponse();
    $formulario = '<form id="formularioNuevoCliente" ><fieldset class="fieldSet">
                    <legend class="legend">Nuevo Cliente</legend>
  <table class="formTable" width="342" border="0" cellspacing="0" cellpadding="0">
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td class="formTd" width="139">R.I.F:</td>
      <td width="203"><input class="formTextField" name="rif" type="text" id="rif" size="20" /></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td class="formTd">Nombre:</td>
      <td><input class="formTextField" name="nombre" type="text" id="nombre" size="20" /></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td class="formTd">Clave:</td>
      <td><input class="formTextField" name="clave" type="text" id="clave" size="20" /></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td class="formTd">Teléfono:</td>
      <td><input class="formTextField" name="telefono" type="text" id="telefono" size="20" /></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td class="formTd">Dirección:</td>
      <td><textarea class="formTextField" name="direccion" cols="20" id="direccion"></textarea></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input type="button"id="button" value="Registrar" onclick= "xajax_procesarCliente(xajax.getFormValues(\'formularioNuevoCliente\'))" />
      </div></td>
    </tr>
  </table></fieldset></fieldset></form>';
    $objResponse->addAssign("formularioCliente", "innerHTML", "$formulario");
    return $objResponse;
}

function mostrarFormularioEditar($rif) {
    $objResponse = new xajaxResponse();
    $control = new Persistenciaclass();
    $recurso = $control->buscarCliente($rif);
    $row = mysql_fetch_array($recurso);
    $formulario = '<form id="formularioEditarCliente"><fieldset class="fieldSet">
                    <legend class="legend">Actualizar Cliente</legend>
  <table class="formTable" width="342" border="0" cellspacing="0" cellpadding="0">
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td class="formTd" width="139">R.I.F:</td>
      <td width="203"><input class="formTextField" name="rif" type="text" id="rif" size="20" value="'.$row[rif].'" readonly="true"/></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td class="formTd">Nombre:</td>
      <td><input class="formTextField" name="nombre" type="text" id="nombre" size="20" value="'.$row[nombre].'" /></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td class="formTd">Clave:</td>
      <td><input class="formTextField" name="clave" type="text" id="clave" size="20" value="'.$row[clave].'" readonly="true" /></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td class="formTd">Teléfono:</td>
      <td><input class="formTextField" name="telefono" type="text" id="telefono" size="20" value="'.$row[telefono].'" /></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td class="formTd">Dirección:</td>
      <td><textarea class="formTextField" name="direccion" cols="20" id="textfield">'.$row[direccion].'</textarea></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input type="button" name="button" id="button" value="Actualizar" onclick= "xajax_procesarClienteEditar(xajax.getFormValues(\'formularioEditarCliente\'))"/>
      </div></td>
    </tr>
  </table>
</form></legend>';
    $objResponse->addAssign("formularioCliente", "innerHTML", "$formulario");
    return $objResponse;
}

function procesarCliente ($datos) {
    $mensaje = "";
    $objResponse = new xajaxResponse();
    $control = new Persistenciaclass();
    $resultado = $control->agregarCliente($datos[rif], $datos[nombre],
        $datos[clave], $datos[telefono],
        $datos[direccion], $datos[descripcion]);
    if ($resultado) {
        $mensaje = '<div class="exito">
                          <div class="textoMensaje">Cliente ' . $datos[nombre] . ' registrado con éxito</div></div>';
    }
    else {
        $mensaje = '<div class="error"><div class="textoMensaje">Ocurrio un error durate la operacion. El servidor no se encuentra disponible.</div></div>';
    }
    $refrescar = mostrarTablaClientesString();
    $objResponse->addAssign("mensaje", "innerHTML", "$mensaje");
    $objResponse->addAssign("tablaClientes", "innerHTML", "$refrescar");
    return $objResponse;
}
function procesarClienteEditar ($datos) {
    $mensaje = "";
    $objResponse = new xajaxResponse();
    $control = new Persistenciaclass();
    $resultado = $control->editarCliente($datos[rif], $datos[nombre],
        $datos[clave], $datos[telefono],
        $datos[direccion], $datos[descripcion]);
    if ($resultado) {
        $mensaje = '<div class="exito">
                          <div class="textoMensaje">Cliente ' . $datos[nombre] . ' actualizado con éxito</div></div>';
    }
    else {
        $mensaje = '<div class="error"><div class="textoMensaje">Ocurrio un error durate la operacion. El servidor no se encuentra disponible.</div></div>';
    }
    $refrescar = mostrarTablaClientesString();
    $objResponse->addAssign("mensaje", "innerHTML", "$mensaje");
    $objResponse->addAssign("tablaClientes", "innerHTML", "$refrescar");
    return $objResponse;
}



?>
