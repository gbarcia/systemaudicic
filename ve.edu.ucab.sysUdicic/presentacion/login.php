<?php
require $_SERVER['DOCUMENT_ROOT'] .'/ve.edu.ucab.sysUdicic/serviciotecnico/utilidades/xajax/xajax.inc.php';
require $_SERVER['DOCUMENT_ROOT'] .'/ve.edu.ucab.sysUdicic/presentacion/eventos/eventosLogin.php';
$xajax = new xajax();
$xajax->registerFunction("accesoAutorizado");
$xajax->processRequests();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <?
        $xajax->printJavascript ("../serviciotecnico/utilidades/xajax/");
        ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>sysUDICIC | Inicio de sesión</title>
        <link rel="stylesheet" type="text/css" href="css/styleMain.css" />
    </head>
    <body><form id="formularioEntrada">
        <?php
        include 'header.php';
        ?>
        <div class="content" align="center">
            <div id="mensaje" class="mensajePanel"></div>
            <div class="loginPanel">
                <table cellspacing="0" cellpadding="2" border="0">
                    <tbody>
                        <tr>
                            <td align="center"><h4>Inicio de sesión</h4></td>
                        </tr>
                        <tr>
                            <td><label class="loginLabel" for="login">Nombre de usuario</label></td>
                        </tr>
                        <tr>
                            <td><input class="loginTextField" type="text" name="nombre" value="" size="20"/></td>
                        </tr>
                        <tr>
                            <td><label class="loginLabel" for="login">Contraseña</label></td>
                        </tr>
                        <tr>
                            <td><input class="loginTextField" type="password" name="clave" value="" size="20"/></td>
                        </tr>
                        <tr>
                            <td align="center"><input type="button" value="Entrar" onclick="xajax_accesoAutorizado(xajax.getFormValues('formularioEntrada'))" /></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php
        include 'footer.php';
        ?>
    </form></body>
</html>
