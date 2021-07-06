<?php

require_once "conexion.php";

class Gestor extends Conexion{
    public function agregarNuevoArchivo ($datos){
        $conexion = Conexion ::conectar();
        $sql = "INSERT INTO t_archivos (id_categoria,
                                        nombre,
                                        ruta)
                                        VALUES (?, ? , ?)";
        $query = $conexion->prepare($sql);
        $query->bind_param("iss",$datos ['idCategoria'],
                                $datos['nombreArchivo'],
                                $datos['ruta']);
        $respuesta = $query->execute();
        $query->close();
        return $respuesta;


    }
    public function eliminarArchivo($idArchivo) {
        $conexion = Conexion::conectar();
        $sql = "DELETE FROM t_archivos WHERE id_archivo = ?";
        $query = $conexion->prepare($sql);
        $query->bind_param('i', $idArchivo);
        $respuesta = $query->execute();
        return $respuesta;
    }
    


}
 
