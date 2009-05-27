<?php
function procesarProyecto() {
    $objResponse = new xajaxResponse();
    $mensaje = '<div class="exito"><div class="textoMensaje">
                    Proyecto registrado con éxito
                </div></div>';
    $objResponse->addAssign("mensaje", "innerHTML", "$mensaje");
    return $objResponse;
}

?>
