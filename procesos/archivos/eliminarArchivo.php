<?php 

require_once "../../clases/archivos.php";

$idArchivo = $_POST['idArchivo'];

$Categorias = new Gestor();
echo $Categorias->eliminarArchivo($idArchivo);