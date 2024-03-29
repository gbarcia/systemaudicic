<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/ve.edu.ucab.sysUdicic/serviciotecnico/persistencia/Persistencia.class.php';

function mostrarTablaUsuarios () {
    $objResponse = new xajaxResponse();
    $controlPersistencia = new Persistenciaclass();
    $recurso = $controlPersistencia->traerTodosUsuarios();
    $resultado = '<form id="formularioEditarMarcar"><fieldset class="fieldSet">
                    <legend class="legend">Listado</legend>';
    $resultado.= '<table id="dataTable" cellspacing="0" cellpadding="0">';
    $resultado.= '<thead>';
    $resultado.= '<tr>';
    $resultado.= '<th class="h">NOMBRE</th>';
    $resultado.= '<th class="h">APELLIDO</th>';
    $resultado.= '<th class="h">CLAVE</th>';
    $resultado.= '<th class="h">ROL</th>';
    $resultado.= '</tr>';
    $resultado.= '</thead>';
    $color = false;
    while ($row = mysql_fetch_array($recurso)) {
        $resultado.= '<td class="cell">' . $row[nombre]. '</td>';
        $resultado.= '<td class="cell">' . $row[apellido] .'</td>';
        $resultado.= '<td class="cell">' . $row[clave]. '</td>';
        if ($row[rol] == 'A')
        $cargo = 'Administrador';
        else{
            $cargo = 'Asistente';
        }
        $resultado.= '<td class="cell">' . $cargo. '</td>';
        $resultado.= '</tr>';
    }
    $resultado.= '</table>';
    $resultado.= '</form>';
    $objResponse->addAssign("tablaUsuarios", "innerHTML", $resultado);
    return $objResponse;
}
function mostrarTablaUsuariosString () {
    $controlPersistencia = new Persistenciaclass();
    $recurso = $controlPersistencia->traerTodosUsuarios();
    $resultado = '<form id="formularioEditarMarcar"><fieldset class="fieldSet">
                    <legend class="legend">Listado</legend>';
    $resultado.= '<table id="dataTable" cellspacing="0" cellpadding="0">';
    $resultado.= '<thead>';
    $resultado.= '<tr>';
    $resultado.= '<th class="h">NOMBRE</th>';
    $resultado.= '<th class="h">APELLIDO</th>';
    $resultado.= '<th class="h">CLAVE</th>';
    $resultado.= '<th class="h">ROL</th>';
    $resultado.= '</tr>';
    $resultado.= '</thead>';
    $color = false;
    while ($row = mysql_fetch_array($recurso)) {
        $resultado.= '<td class="cell">' . $row[nombre]. '</td>';
        $resultado.= '<td class="cell">' . $row[apellido] .'</td>';
        $resultado.= '<td class="cell">' . $row[clave]. '</td>';
        if ($row[rol] == 'A')
        $cargo = 'Administrador';
        else{
            $cargo = 'Asistente';
        }
        $resultado.= '<td class="cell">' . $cargo. '</td>';
        $resultado.= '</tr>';
    }
    $resultado.= '</table>';
    $resultado.= '</form>';
    return $resultado;
}

function mostrarFormularioNuevoUsuario () {
    $objResponse = new xajaxResponse();
    $formulario = '<form id="formularioNuevoUsuario" ><fieldset class="fieldSet">
                    <legend class="legend">Nuevo Usuario</legend>
  <table width="342" border="0" cellspacing="0" cellpadding="0">
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td class="formTd" width="139">Nombre:</td>
      <td width="203"><input class="formTextField" name="nombre" type="text" id="nombre" size="20" /></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td class="formTd">Apellido:</td>
      <td><input class="formTextField" name="apellido" type="text" id="apellido" size="20" /></td>
    </tr>
    <tr>
      <td class="formTd" colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td class="formTd">Clave:</td>
      <td><input class="formTextField" name="clave" type="password" id="clave" size="20" /></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td class="formTd">Rol:</td>
      <td><input class="formTextField" name="rol" type="text" id="rol" size="20" /></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
      <td colspan="2"><div align="center">
          <input type="button"id="button" value="Registrar" onclick= "xajax_procesarUsuario(xajax.getFormValues(\'formularioNuevoUsuario\'))" />
      </div></td>
    </tr>
  </table></fieldset></fieldset></form>';
    $objResponse->addAssign("formularioUsuario", "innerHTML", "$formulario");
    return $objResponse;
}

function procesarUsuario ($datos) {
    $mensaje = "";
    $objResponse = new xajaxResponse();
    $control = new Persistenciaclass();
    $resultado = $control->agregarUsuario($datos[nombre], $datos[apellido], $datos[clave], $datos[rol]);
    if ($resultado) {
        $mensaje = '<div class="exito">
                          <div class="textoMensaje">Usuario ' . $datos[nombre] . ' registrado con éxito</div></div>';
    }
    else {
        $mensaje = '<div class="error"><div class="textoMensaje">Ocurrio un error durate la operacion. El servidor no se encuentra disponible.</div></div>';
    }
    $refrescar = mostrarTablaUsuariosString();
    $objResponse->addAssign("mensaje", "innerHTML", "$mensaje");
    $objResponse->addAssign("tablaUsuarios", "innerHTML", "$refrescar");
    return $objResponse;
}

?>
