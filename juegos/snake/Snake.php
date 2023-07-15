<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Diviértete, Aprende, Juega</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link href="estilo plantilla.css" rel="stylesheet" type="text/css" />
<link href="estilo.css" rel="stylesheet" type="text/css" />
<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>snake</title>
		<meta name="description" content="">
		<meta name="author" content="satur">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		
</head>
<body>
<!-- START PAGE SOURCE -->
<div class="body">
	<style>
		body{
			max-width: 1000px;
			width:100%;
			margin:0 auto;
			text-align:center;
		}
		canvas {
      border: 2px solid #3c3;
      background-image:url("snake.png");
      background-repeat:no-repeat;
      background-size:contain;
    }
    .button{
		text-align:center;
			margin-top:5px;
			padding: 20px;
			width:100%;
			width: 100%;
			height: 40px;
			text-align: center;
			border: none;
			background-color: #060d50;
		}
		a{	
			font-size: 30px;
			text-decoration: none;
			color: white;
			height: 100%;
			width: 100%;
			cursor: pointer;
		}
 	    </style>
	<body onkeydown="control(event);">
		<script src="snake.js"></script>
		<canvas id="canvas" width="600" height="600" ></canvas>
</div>
<div class="button">    
 <a href="../index.html">Inicio</a>
</div>
<!-- END PAGE SOURCE -->
</body>
</html>