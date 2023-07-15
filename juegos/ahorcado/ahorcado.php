<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Juegos</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="estilo-ahorcado.css" rel="stylesheet" type="text/css" />

</head>
<body>
<!-- START PAGE SOURCE -->

    <div class="titulo"><center> ¡Juguemos al Ahorcado!</center></div></div>
         <h2 align="center">Genera una pista y completa los espacios.</h2>  

    
     <div class="main-container">
        <h1 id="msg-final"></h1>
        <h3 id="acierto"></h3>
        <div class="flex-row no-wrap">
          <h2 class="palabra" id="palabra"></h2>
          <picture>
            <img src="img/ahorcado_6.png" alt="" id="image6">
            <img src="img/ahorcado_5.gif" alt="" id="image5">
            <img src="img/ahorcado_4.png" alt="" id="image4">
            <img src="img/ahorcado_3.png" alt="" id="image3">
            <img src="img/ahorcado_2.png" alt="" id="image2">
            <img src="img/ahorcado_1.png" alt="" id="image1">
            <img src="img/ahorcado_0.gif" alt="" id="image0">
          </picture>
        </div>
        <div class="flex-row" id="turnos">
          <div class="col">
            <h3>Intentos restantes: <span id="intentos">6</span></h3>
          </div>
          <div class="col">
          <div class="boton">  <button onclick="inicio()" id="reset">Otra palabra</button>
            <button onclick="pista()" id="pista">Pista</button></div><br>
            <span id="hueco-pista"></span>

          </div>
          </div>
        
        <div class="flex-row">
          <div class="col">
          <div class="clear"></div>
            <div class="flex-row" id="abcdario">
            </div>
          </div>


      </div><div class="clr"></div>
       <a href="../index.html" ><b class="text-success">Volver...</b></a>
    <script src="ahorcado.js"></script>
     
    </div>
</div>  
  </div></div>    
</div>
  </div>
  
<!-- END PAGE SOURCE -->
</body>
</html>