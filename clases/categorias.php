<?php 

	require_once "conexion.php";

	class Categorias extends Conexion {
		public function agregarNuevaCategoria($datos) {
			$conexion = Conexion::conectar();

			$sql = "INSERT INTO t_categorias (nombre, descripcion) 
					VALUES (?, ?)";

			$query = $conexion->prepare($sql);
			$query->bind_param('ss', $datos['nombre'],
									 $datos['descripcion']);
			$respuesta = $query->execute();
			return $respuesta;
		}
		public function eliminaCategoria($idCategoria) {
			$conexion = Conexion::conectar();
			$sql = "DELETE FROM t_categorias WHERE id_categoria = ?";
			$query = $conexion->prepare($sql);
			$query->bind_param('i', $idCategoria);
			$respuesta = $query->execute();
			return $respuesta;
		}
		

	}
 ?>