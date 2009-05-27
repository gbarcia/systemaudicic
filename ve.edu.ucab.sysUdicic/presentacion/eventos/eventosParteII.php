<?php
function procesarProyecto() {
    $objResponse = new xajaxResponse();
    $mensaje = '<div class="exito"><div class="textoMensaje">
                    Proyecto registrado con éxito
                </div></div>';
    $objResponse->addAssign("mensaje", "innerHTML", "$mensaje");
    return $objResponse;
}

function procesarIngreso() {
    $objResponse = new xajaxResponse();
    $mensaje = '<div class="exito"><div class="textoMensaje">
                    Ingreso registrado con éxito
                </div></div>';
    $objResponse->addAssign("mensaje", "innerHTML", "$mensaje");
    return $objResponse;
}

?>
