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
          <option value="1">Proyecto Tal Cual</option>
          <option value="2">Proyecto Musea</option>
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
          <input type="submit" name="button" id="button" value="Registrar" />
      </div></td>
    </tr>
  </table></form></legend>';
    $objResponse->addAssign("formularioReunion", "innerHTML", "$formulario");
    return $objResponse;
}
?>