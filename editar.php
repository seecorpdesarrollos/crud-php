<?php 
require 'conexion.php';



if (!isset($_POST['create'])) {
$id = $_GET['id'];
$sql = $conexion->prepare("SELECT * FROM usuario WHERE id = $id");
$resultado = $sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_OBJ);

}else{
	$id = $_POST['id'];
	$dni = $_POST['dni'];	
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];	
	$correo = $_POST['correo'];
	$pais = $_POST['pais'];

	
	$update = $conexion->prepare( "UPDATE usuario SET dni = :dni, nombre = :nombre, apellido = :apellido, correo = :correo, pais = :pais WHERE id = :id  ");
	$update->execute(array(':id' =>$id,
		                   ':dni' =>$dni,
		                   ':nombre' =>$nombre,
		                   ':apellido'=>$apellido,
		                   ':correo' =>$correo,
		                    ':pais' =>$pais ));

	header('location:index.php');
}










require 'views/editar.view.php';
 ?>