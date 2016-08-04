<?php 
require 'conexion.php';

if (isset($_POST['create'])) {
		$dni = $_POST['dni'];
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$correo = $_POST['correo'];
		$pais = $_POST['pais'];

		$sql = "INSERT INTO usuario (dni, nombre ,apellido ,correo ,pais) VALUES ( :dni , :nombre , :apellido , :correo , :pais)";
		$insertar = $conexion->prepare($sql);
		$insertar->execute(array(':dni'=>$dni,
			                     ':nombre'=>$nombre,
			                     ':apellido'=>$apellido,
			                     ':correo'=>$correo,
			                     ':pais'=>$pais  ));
		
		header('location:index.php');

}






require 'views/agregar.view.php';
 ?>