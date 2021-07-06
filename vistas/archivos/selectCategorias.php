<?php 
	
	require_once "../../clases/conexion.php";
	$con = new Conexion();
	$conexion = $con->conectar();

	$sql = "SELECT id_categoria,
					nombre 
			FROM t_categorias 
			ORDER BY nombre";

	$result = mysqli_query($conexion, $sql);
 ?>
 	<label for="idCategoriaSelect">Selecciona una categoria</label>
 	<select id="idCategoriaSelect" name="idCategoriaSelect" class="form-control">
	 <hr>
	 <hr>
 		<option value="0">Selecciona una categoria</option>
 	<?php while($ver = mysqli_fetch_row($result)): ?>
 		<option value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>
 	<?php endwhile; ?> 
 	</select>