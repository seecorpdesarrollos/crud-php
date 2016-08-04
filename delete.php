<?php 
require 'conexion.php';
	
	$id = $_GET['id'];
	$sql = $conexion->prepare("DELETE  FROM usuario WHERE id = :id");

	$resultado = $sql->execute(array(':id' =>$id));

	header('location:index.php');

 ?>