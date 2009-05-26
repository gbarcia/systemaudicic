<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/ve.edu.ucab.sysUdicic/serviciotecnico/persistencia/Persistencia.class.php';
define("CCSTABLA", "");

function mostrarTablaClientes () {
    $objResponse = new xajaxResponse();
    $controlPersistencia = new Persistenciaclass();
    $recurso = $controlPersistencia->traerTodosLosClientes();
    $resultado = '<form id="formularioEditarMarcar">';
    $resultado.= '<table cellspacing="0" class="'.CCSTABLA.'">';
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
                      ('.$row[rif].')"/></td>';
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
    $formulario = '<form id="formularioNuevoCliente" >
  <table width="342" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="2">Nuevo Cliente</td>
    </tr>
    <tr>
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
      <td><textarea name="textfield" cols="20" id="direccion"></textarea></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input type="submit" name="button" id="button" value="Registrar" />
      </div></td>
    </tr>
  </table>
</form>';
    $objResponse->addAssign("formularioCliente", "innerHTML", "$formulario");
    return $objResponse;
}

function mostrarFormularioEditar($rif) {
    $objResponse = new xajaxResponse();
    $control = new Persistenciaclass();
    $recurso = $control->buscarCliente($rif);
    $row = mysql_fetch_array($recurso);
    $formulario = '<form id="formularioEditarCliente">
  <table width="342" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="2">Actualizar Cliente</td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td width="139">R.I.F:</td>
      <td width="203"><input name="rif" type="text" id="rif" size="20" value="'.$row[rif].'" READONLY() /></td>
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
      <td><textarea name="textfield" cols="20" id="textfield"></textarea></td>
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
</form>';
    $objResponse->addAssign("formularioCliente", "innerHTML", "$formulario");
    return $objResponse;
}



?>
