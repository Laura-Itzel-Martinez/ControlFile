<?php 
	require_once "../../clases/Conexion.php";
	$con = new Conexion();
	$conexion = $con->conectar();

    $sql="SELECT t_archivos.nombre,t_categorias.nombre, id_archivo
    FROM t_archivos INNER JOIN t_categorias WHERE t_archivos.id_categoria=t_categorias.id_categoria";
					
					
	$result = mysqli_query($conexion, $sql);
 ?>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-condensed" id="tablaCategoriasDT">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Categoria</th>
                        <th>Descargar</th>
                        <th>Abrir</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                <?php
					while($mostrar = mysqli_fetch_row($result)) {  
                        

                        $rutaDescarga= "../../almacenar/".$mostrar[0];
                        $nombreArchivo =$mostrar[0];
                        
						
				?>
                    <tr>
                    <td><?php echo $mostrar[0] ?></td>
                    <td><?php echo $mostrar[1] ?></td>

                    <td><a href="<?php echo $rutaDescarga?>"
                    download="<?php echo $nombreArchivo?>" 
                    class="btn btn-info btn-sm">Descargar Archivo</a></td>

                    <td><span class="btn btn-success">Abrir Archivo</span></td>
                    <td><span class="btn btn-danger" onclick="eliminarArchivo(<?php echo $mostrar[2] ?>)">Eliminar</span></td>
                    </tr>
                    <?php 
					}
				 ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaCategoriasDT').DataTable();
	});
</script>