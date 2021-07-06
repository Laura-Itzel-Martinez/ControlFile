<?php
session_start();

require_once "../../clases/archivos.php";
$Gestor =new Gestor();

    $idCategoria = $_POST['idCategoriaSelect'];
    $fichero = $_FILES['archivo'];

    if($_FILES['archivo']['size'] > 0 ){

        $totalArchivos = count($_FILES['archivo']['name']);
        for ($i=0; $i < $totalArchivos; $i++) { 

            $nombreArchivo = $_FILES['archivo']['name'][$i];
            $explode= explode('.' , $nombreArchivo);
            $tipoArchivo=array_pop($explode);

            $rutaAlmacenamiento = $_FILES['archivo']['tmp_name'][$i];
            $carpeta = '../../almacenar/';
            $rutaFinal=$carpeta.$nombreArchivo;

            $datos=array(
                "idCategoria"=>$idCategoria,
                "nombreArchivo"=>$nombreArchivo,
                "ruta"=>$rutaFinal

            );


            if(move_uploaded_file($rutaAlmacenamiento,$rutaFinal)){
                $respuesta = $Gestor->agregarNuevoArchivo($datos);

            }

        }
        echo $respuesta;
        
    }else{
        echo 0;
    }
