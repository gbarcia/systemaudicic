<?php
function procesarTarea () {
    $objResponse = new xajaxResponse();
    $mensaje = '<div class="exito"><div class="textoMensaje">
                    Tarea registrada con éxito
                </div></div>';
    $objResponse->addAssign("mensaje", "innerHTML", "$mensaje");
    return $objResponse;
}
?>
