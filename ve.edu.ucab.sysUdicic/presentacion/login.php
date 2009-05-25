<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>sysUDICIC | Inicio de sesión</title>
        <link rel="stylesheet" type="text/css" href="css/styleMain.css" />
        <link rel="stylesheet" type="text/css" href="css/styleLogin.css" />
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        <div class="content">
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
                            <td><input class="loginTextField" type="text" name="login" value="" size="20"/></td>
                        </tr>
                        <tr>
                            <td><label class="loginLabel" for="login">Contraseña</label></td>
                        </tr>
                        <tr>
                            <td><input class="loginTextField" type="password" name="password" value="" size="20"/></td>
                        </tr>
                        <tr>
                            <td align="center"><input type="submit" value="Entrar" /></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
