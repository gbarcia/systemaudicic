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



?>
