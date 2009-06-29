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
?>
<div class="tapita">
</div>
<div class="content">
<div class="proyectosPanel">
    <div id="CollapsiblePanel1" class="CollapsiblePanel">
        <div class="CollapsiblePanelTab" tabindex="0">PROYECTOS</div>
        <div class="CollapsiblePanelContent">
            <ul>
                <li class="proyectosPanelCliente">Academia Nacional de la Historia
                <ul>
                    <li class="proyectosPanelProyecto">Prensa del Siglo XIX [Progreso: 73%]

                    </li>
                </ul>
            </ul>
        </div>
    </div>
	<div id="CollapsiblePanel5" class="CollapsiblePanel">
	  <div class="CollapsiblePanelTab" tabindex="0">BUZON DE ENTRADA</div>
	  <div class="CollapsiblePanelContent">
	    <ul>
	      <li class="proyectosPanelTarea"><a href="#">Asuntos a discutir en la proxima reunion</a> [20-06-2009 09:39 AM]</li>
        </ul>
	  </div>
    </div>
    <div id="CollapsiblePanel6" class="CollapsiblePanel">
      <div class="CollapsiblePanelTab" tabindex="0">ENVIAR MENSAJE</div>
      <div class="CollapsiblePanelContent">
        
          <label>
            <textarea name="textarea" id="textarea" cols="45" rows="5"></textarea>
          </label>
        <br>
        <label>
            <input type="submit" name="button" id="button" value="Enviar">
          </label>
        
      </div>
    </div>
</div>

<div class="tareasReunionesPanel">
<div id="CollapsiblePanel2" class="CollapsiblePanel">
  <div class="CollapsiblePanelTab" tabindex="0">PROXIMAS REUNIONES</div>
  <div class="CollapsiblePanelContent">
    <ul>
      <li class="proyectosPanelProyecto">20-08-2009</li>
    </ul>
  </div>
</div>
  <div id="CollapsiblePanel3" class="CollapsiblePanel">
<div class="CollapsiblePanelTab" tabindex="0">REUNIONES PASADAS</div>
<div class="CollapsiblePanelContent">
<ul>

    <li class="proyectosPanelProyecto">17-06-2009 : 10 AM
      <ul>
        <li>Asunto: Discusión de costos, estado del material</li>
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
                <li class="proyectosPanelTarea2">La Voz de Valera: 01-07-2009</li>
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
    var CollapsiblePanel3 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel3");
    var CollapsiblePanel4 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel4");
var CollapsiblePanel2 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel2");
var CollapsiblePanel5 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel5");
var CollapsiblePanel6 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel6");
//-->
</script>
</body>
</html>
