<?php 

require_once "../../clases/categorias.php";

$idCategoria = $_POST['idCategoria'];

$Categorias = new Categorias();
echo $Categorias->eliminaCategoria($idCategoria);