<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/ve.edu.ucab.sysUdicic/serviciotecnico/persistencia/Persistencia.class.php';

function mostrarFormularioNuevaReunion () {
    $objResponse = new xajaxResponse();
    $formulario = '<form id="formularioNuevaReunion"><fieldset class="fieldSet">
                    <legend class="legend">Nueva Reunion</legend>
  <table width="342" border="0" cellspacing="0" cellpadding="0">
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td width="139">Objetivo:</td>
      <td width="203"><select name="proyecto" id="proyecto">
        <optgroup label="Academia Nacional de la Historia ">
         <option value="1" selected>Prensa del Siglo XIX</option>
         </optgroup>
         <optgroup label="Acción Democrática ">
          <option value ="2">Periódico Venezuela Democrática</option>
          </optgroup>
          <optgroup label="Universidad Católica Andrés Bello ">
           <option>Diario La Religión</option>
           </optgroup>
        </select>
      </td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>Fecha:</td>
      <td><input name="fecha" type="text" id="fecha" size="10" maxlength="10" /></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td> Hora:</td>
      <td><input name="hora" type="text" id="hora" size="10" maxlength="10" /></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>Detalles:</td>
      <td><textarea name="detalles" rows="5" id="textfield"></textarea></td>
    </tr>
    <tr>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input type="button" name="button" id="button" value="Registrar" onclick= "xajax_procesarReunion(xajax.getFormValues(\'formularioNuevaReunion\'))"/>
      </div></td>
    </tr>
  </table></form></legend>';
    $objResponse->addAssign("formularioReunion", "innerHTML", "$formulario");
    return $objResponse;
}

function procesarReunion ($datos) {
    $mensaje = "";
    $objResponse = new xajaxResponse();
    $control = new Persistenciaclass();
    $resultado = $control->agregarReunion($datos[fecha], $datos[hora], $datos[detalles], $datos[proyecto]);
    if ($resultado) {
        $mensaje = '<div class="exito">
                          <div class="textoMensaje">Reunión registrada con éxito</div></div>';
    }
    else {
        $mensaje = '<div class="error"><div class="textoMensaje">Ocurrio un error durate la operacion. El servidor no se encuentra disponible.</div></div>';
    }
    $objResponse->addAssign("mensaje", "innerHTML", "$mensaje");
    return $objResponse;
}
?>