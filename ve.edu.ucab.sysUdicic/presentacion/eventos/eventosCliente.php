<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/ve.edu.ucab.sysUdicic/serviciotecnico/persistencia/Persistencia.class.php';
define("CCSTABLA", "");

function mostrarTablaClientes () {
    $objResponse = new xajaxResponse();
    $controlPersistencia = new Persistenciaclass();
    $recurso = $controlPersistencia->traerTodosLosClientes();
    $resultado = '<form id="formularioEditarMarcar"><fieldset class="fieldSet">
                    <legend class="legend">Clientes</legend>';
    $resultado.= '<table cellspacing="0" border="1" class="'.CCSTABLA.'">';
    $resultado.= '<thead>';
    $resultado.= '<tr>';
    $resultado.= '<th>RIF</th>';
    $resultado.= '<th>NOMBRE</th>';
    $resultado.= '<th>TELEFONO</th>';
    $resultado.= '<th>DIRECCION</th>';
    $resultado.= '<th>DESCRIPCION</th>';
    $resultado.= '<th>EDITAR</th>';
    $resultado.= '</tr>';
    $resultado.= '</thead>';
    $color = false;
    while ($row = mysql_fetch_array($recurso)) {
        if ($color){
            $resultado.= '<tr class="r0">';
        } else {
            $resultado.= '<tr class="r1">';
        }
        $resultado.= '<td>' . $row[rif] .'</td>';
        $resultado.= '<td>' . $row[nombre]. '</td>';
        $resultado.= '<td>' . $row[telefono]. '</td>';
        $resultado.= '<td>' . $row[direccion]. '</td>';
        $resultado.= '<td>' . $row[descripcion]. '</td>';
        $resultado.= '<td><input type="button" value="EDITAR"
                      onclick="xajax_mostrarFormularioEditar
                      (\''. $row[rif] .'\')"/></td>';
        $resultado.= '</tr>';
        $color = !$color;
    }
    $resultado.= '</table>';
    $resultado.= '</form>';
    $objResponse->addAssign("tablaClientes", "innerHTML", $resultado);
    return $objResponse;
}

function mostrarFormularioNuevoCliente () {
    $objResponse = new xajaxResponse();
    $formulario = '<form id="formularioNuevoCliente" ><fieldset class="fieldSet">
                    <legend class="legend">Nuevo Cliente</legend>
  <table width="342" border="0" cellspacing="0" cellpadding="0">
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td width="139">R.I.F:</td>
      <td width="203"><input name="rif" type="text" id="rif" size="20" /></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>Nombre:</td>
      <td><input name="nombre" type="text" id="nombre" size="20" /></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>Clave:</td>
      <td><input name="clave" type="text" id="clave" size="20" /></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>Teléfono:</td>
      <td><input name="telefono" type="text" id="telefono" size="20" /></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>Dirección:</td>
      <td><textarea name="direccion" cols="20" id="direccion"></textarea></td>
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
  <table width="342" border="0" cellspacing="0" cellpadding="0">
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td width="139">R.I.F:</td>
      <td width="203"><input name="rif" type="text" id="rif" size="20" value="'.$row[rif].'" readonly="true"/></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>Nombre:</td>
      <td><input name="nombre" type="text" id="nombre" size="20" value="'.$row[nombre].'" /></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>Clave:</td>
      <td><input name="clave" type="text" id="clave" size="20" value="'.$row[clave].'" readonly="true" /></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>Teléfono:</td>
      <td><input name="telefono" type="text" id="telefono" size="20" value="'.$row[telefono].'" /></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>Dirección:</td>
      <td><textarea name="textfield" cols="20" id="textfield">'.$row[descripcion].'</textarea></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input type="submit" name="button" id="button" value="Actualizar" />
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
        $mensaje = 'Ocurrio un error durate la operacion. El servidor no se encuentra disponible.';
    }
    $objResponse->addAssign("mensaje", "innerHTML", "$mensaje");
    return $objResponse;
}



?>
