<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lenguaje Programación</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">

</head>

	<body class="text-center">

		<div class="titulo">
			<h1>Interprete Compiladores</h1>
		</div>
		
		<div class="area1">
			<textarea class="resultado1" id="textInicio" cols="60" rows="12" style="resize: both;">
			<?php
			 if(isset( $_GET['codex'])){
				echo $_GET['codex'];
			 }
			 ?>
			</textarea>
		</div>

<div id="openModal" class="modalDialog">
	<div>
		<a href="#close" title="Close" class="close">X</a>
		<h2>Ejemplos</h2>
		<p class="modalText">Ciclo</p>
		<p>hasta(10 () => { <br> 
			imprimirConcadenados(10) <br>
			})
		</p>
		<p class="modalText">Condicionales</p>
		<p>siFunciona(siMayor(4 5) () => { <br>
			imprimir("salioverdadero") <br>
			} () => { <br>
			imprimir("saliofalso") <br>
			})
		</p>
		<p class="modalText">Sumas y Restas</p>
		<p>
		a ?> 5 <br>
		b ?> 10 <br>
		imprimirConcadenados(sumar(5 10)) <br>
		imprimirConcadenados(restar(5 10)) <br>
		</p>
	</div>
</div>
		<div>
			<button type="button" id="inicio" class="btn btn-success">Compilar</button>
			<a href="#openModal" class="btn btn-danger" id= "ejemplos"role="button">Ejemplos</a>
		</div>

		<div>
			<h3 id="res" >Resultado</h3>
		</div>

		<div class="area2">
			 <textarea class="resultado2" id="textFinal"  cols="60" rows="12" editable="false" style="resize: both;"></textarea>
		</div>	

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script src="interprete.js"></script>
		<script src="codigoInterprete.js"></script>
	</body>

</html>