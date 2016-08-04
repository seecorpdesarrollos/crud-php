<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CRUD</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/kickstart.js"></script> 
<link rel="stylesheet" href="css/kickstart.css" media="all" /> 
<link rel="stylesheet" href="css/estilos.css" media="all" /> 
</head>
<body>

<nav>
	<ul class="menu">
<li class=""><a href="agregar.php">Agregar Usuario</a></li>
<li><a href="index.php">Home</a></li>
<li><a href="#"><i class="fa fa-inbox"></i> Item 3</a>
	<ul>
	<li><a href="#"><i class="fa fa-cog"></i> Sub Item</a></li>
	<li><a href="#"><i class="fa fa-envelope"></i> Sub Item</a>
		<ul>
		<li><a href="#"><i class="fa fa-wrench"></i> Sub Item</a></li>
		<li><a href="#"><i class="fa fa-camera-retro"></i> Sub Item</a></li>
		<li><a href="#"><i class="fa fa-coffee"></i> Sub Item</a></li>
		<li><a href="#"><i class="fa fa-twitter"></i> Sub Item</a></li>
		</ul>
	</li>
	<li class="divider"><a href=""><i class="fa fa-trash"></i> li.divider</a></li>
	</ul>
</li>
<li><a href="">Item 4</a></li>
</ul>
</nav>



<br><br>

	
<h3 class="center"><i class="fa fa-user-md"> </i> Agregar Nuevos usuarios</h3>
<hr class="alt1"><br>
<form class="form" action="agregar.php" method="post">
	<div class="column col_4">
		<label for="text1"><i>D.N.I :</i></label>
	    <input id="text1" type="text" name="dni" />
  	</div>
  	<div class="col_4">
	    <label for="text2"><i>NOMBRE :</i></label>
	    <input id="text2" type="text" name="nombre" />
	</div>
	<div class="col_4">
	    <label for="text3"><i>APELLIDO :</i></label>
	    <input id="text3" type="text" name="apellido" />
    </div>

    <div class="col_4">
	    <label for="text4"><i>CORREO :</i></label>
	    <input id="text4" type="text" name="correo" />
	</div>

	<div class="col_4">
	    <label for="text5"><i>PAIS :</i></label>
	    <input id="text5" type="text" name="pais" />
	</div>    
<div class="col_12">
   <center><input type="submit" class="button orange" name="create" value="Agregar Usuario"></center>
</div>	
</form>
<hr class="alt1">

	<div class="col_12">
   <center><a href="index.php"  class="button blue">Volver Index</a> </center>
</div>


<br><br><footer>
	<small>
		<i>Creado por Diego Pennisi <a href="http://seecorpdesarrollos.esy.es/" target="_blank">SeecorpDesarrollos</a></i>
	</small>
</footer>

</body>
</html>