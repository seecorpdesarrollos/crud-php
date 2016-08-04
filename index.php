<?php 
require 'conexion.php';

$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1 ;
$Paginas = 2;

$inicio = ($pagina > 1) ? ($pagina * $Paginas - $Paginas) : 0;

$articulos = $conexion->prepare("
	SELECT SQL_CALC_FOUND_ROWS * FROM usuario 
	LIMIT $inicio, $Paginas
");

$articulos->execute();
$articulos = $articulos->fetchAll(PDO::FETCH_OBJ);



$total = $conexion->query('SELECT FOUND_ROWS() as total');
$total = $total->fetch()['total'];

$numeroPaginas = ceil($total / $Paginas);

require 'views/index.view.php';
 ?>

