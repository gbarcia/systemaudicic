<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>sysUDICIC | Inicio</title>
        <link rel="stylesheet" type="text/css" href="css/styleMain.css" />
        <link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
        <link href="SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css">
        <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
        <script src="SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        include 'header.php';
        include 'menu.php';
        ?>
        <div class="content">
            <div class="proyectosPanel">
                <div id="CollapsiblePanel1" class="CollapsiblePanel">
                    <div class="CollapsiblePanelTab" tabindex="0">PROYECTOS</div>
                    <div class="CollapsiblePanelContent">
                        <ul>
                            <li class="proyectosPanelCliente">Academia Nacional de la Historia
                                <ul>
                                    <li class="proyectosPanelProyecto">Prensa del Siglo XIX

                                    </li>
                                </ul>
                            </li>
                            <li class="proyectosPanelCliente">Acción Democrática
                                <ul>
                                    <li class="proyectosPanelProyecto">Periódico Venezuela Democrática</li>
                                </ul>
                            </li>
                            <li class="proyectosPanelCliente">Universidad Católica Andrés Bello
                                <ul>
                                    <li class="proyectosPanelProyecto">Diario La Religión</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tareasReunionesPanel">
                <div id="CollapsiblePanel2" class="CollapsiblePanel">
                    <div class="CollapsiblePanelTab" tabindex="0">TAREAS</div>
                    <div class="CollapsiblePanelContent">
                        <ul>
                            <li class="proyectosPanelTarea"><a href="editarTarea.php">Digitalización</a> [5 días| Eliana Da Silva]
                                <ul>
                                    <li class="proyectosPanelTarea2">Prensa del Siglo XIX</li>
                                </ul>
                            </li>
                        </ul>
                        <ul>
                            <li class="proyectosPanelTarea"><a href="editarTarea.php">Edición</a> [10 días | Eliana Da Silva]
                                <ul>
                                    <li class="proyectosPanelTarea2">Periódico Venezuela Democrática</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="CollapsiblePanel3" class="CollapsiblePanel">
                    <div class="CollapsiblePanelTab" tabindex="0">PROXIMAS REUNIONES</div>
                    <div class="CollapsiblePanelContent">
                        <ul>
                            <li class="proyectosPanelTarea">Prensa del Siglo XIX [Academia Nacional de la Historia]
                                <ul>
                                    <li class="proyectosPanelTarea2">17-06-2009 : 10 AM</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="CollapsiblePanel4" class="CollapsiblePanel">
                    <div class="CollapsiblePanelTab" tabindex="0">INVENTARIOS</div>
                    <div class="CollapsiblePanelContent">
                        <ul>
                            <li class="proyectosPanelTarea">Prensa del Siglo XIX [Academia Nacional de la Historia]</li>
                            <ul>
                                <li class="proyectosPanelTarea2"><a href="devolucionInventario.php">La Voz de Valera</a>: 01-07-2009</li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'footer.php';
        ?>
        <script type="text/javascript">
            <!--
            var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1");
            var CollapsiblePanel2 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel2");
            var CollapsiblePanel3 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel3");
            var CollapsiblePanel4 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel4");
            //-->
        </script>
    </body>
</html>
