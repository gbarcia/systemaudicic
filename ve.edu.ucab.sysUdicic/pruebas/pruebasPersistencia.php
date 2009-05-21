<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/ve.edu.ucab.sysUdicic/serviciotecnico/persistencia/Persistencia.class.php';

//$persistencia = new Persistenciaclass();
//$resultado = $persistencia->agregarCliente('J-123', 'Museo Art', '123', '2345681', 'Las Acacias', 'museo de arte');
//print $resultado;
//
//$persistencia = new Persistenciaclass();
//$resultado = $persistencia->editarCliente('J-123', 'Nombre', 'clave', 'telf', 'direccion', 'descripcion');
//print $resultado;
//
//$persistencia = new Persistenciaclass();
//
//$persistencia = new Persistenciaclass();
//$resultado = $persistencia->agregarReunion('2009-12-06', '3:00 PM', 'Detalles', 1);
//print $resultado;
////
//$persistencia = new Persistenciaclass();
//$resultado = $persistencia->editarReunion(1,'2009-12-06', '3:00 PM', 'Detalles', 1);
//print $resultado;
$persistencia = new Persistenciaclass();
$resultado = $persistencia->login('Eliana', '1234');
print $resultado;
?>
