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
<li><a href="">Item 2</a></li>
<li><a href=""><i class="fa fa-inbox"></i> Item 3</a>
	<ul>
	<li><a href=""><i class="fa fa-cog"></i> Sub Item</a></li>
	<li><a href=""><i class="fa fa-envelope"></i> Sub Item</a>
		<ul>
		<li><a href=""><i class="fa fa-wrench"></i> Sub Item</a></li>
		<li><a href=""><i class="fa fa-camera-retro"></i> Sub Item</a></li>
		<li><a href=""><i class="fa fa-coffee"></i> Sub Item</a></li>
		<li><a href=""><i class="fa fa-twitter"></i> Sub Item</a></li>
		</ul>
	</li>
	<li class="divider"><a href=""><i class="fa fa-trash"></i> li.divider</a></li>
	</ul>
</li>
<li><a href="">Item 4</a></li>
</ul>
</nav>

<center><h1>Listado de usuarios</h1></center>


<br><br>
<table class="sortable " id="tabla">
<thead>
	<th>D.N.I</th>
	<th>NOMBRE</th>
	<th>APELLIDO</th>
	<th>CORREO</th>
	<th>PAIS ORIGEN</th>
	<th>ACCION</th>
</thead>
<?php foreach($articulos as $resultados): ?>
<tbody>
	<td><?php echo $resultados->dni; ?></td>
	<td><?php echo $resultados->nombre; ?></td>
	<td><?php echo $resultados->apellido; ?></td>
	<td><?php  echo $resultados->correo; ?></td>
	<td><?php  echo $resultados->pais; ?></td>
	<td><a href="editar.php?id=<?php echo $resultados->id?>"><i class="fa fa-pencil fa-2x "></i></a> &nbsp; &nbsp; <a href="delete.php?id=<?php echo $resultados->id ?>" onclick="confirm('Decea Eliminar?')"> <i class="fa fa-times-circle fa-2x"></i></a></td>
</tbody>
<?php endforeach; ?>
</table>

<br>
<?php require 'paginacion.php'; ?>

<br><br><footer>
	<small>
		<i>Creado por Diego Pennisi <a href="http://seecorpdesarrollos.esy.es/" target="_blank">SeecorpDesarrollos</a></i>
	</small>
</footer>
</body>
</html>