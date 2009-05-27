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

?>
