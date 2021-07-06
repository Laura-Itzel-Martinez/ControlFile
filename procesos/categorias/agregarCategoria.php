<?php 

	include "../../clases/categorias.php";
	$Categorias = new Categorias();

	$datos = array(
				"nombre" => $_POST['nombreCategoria'],
				"descripcion" => $_POST['descripcion']
					);
					
		echo $Categorias->agregarNuevaCategoria($datos);
 ?>