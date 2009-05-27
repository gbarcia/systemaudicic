<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/ve.edu.ucab.sysUdicic/serviciotecnico/persistencia/Persistencia.class.php';


function accesoAutorizado ($datos) {
    $objResponse = new xajaxResponse();
    $controlPersistencia = new Persistenciaclass();
    $cantidad = $controlPersistencia->login($datos[nombre], $datos[clave]);
    if ($cantidad > 0)
    $objResponse->addRedirect('inicio.php');
    else {
        $mensaje ='<div class="error"><div class="textoMensaje">Acceso no autorizado</div></div>';
        $objResponse->addAssign("mensaje", "innerHTML", "$mensaje");
    }
    return $objResponse;
}

?>
