<!DOCTYPE html>
<html lang="en">
<head>
    <title>Categorias</title>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--Mandamos llamar las dependencias-->
<?php require_once "dependencias.php"?>

</head>
<body  style="background: url('public/img/img18.jpg') no-repeat center center fixed;
              -webkit-background-size: cover;
              -moz-background-size: cover;
              background-size: cover;
              -o-background-size: cover;">

<?php require_once "header.php"?>
    <div class="container">

        
         <!--realizamos un boton para agregar categorias-->
        <div class="jumbotron jumbotron-fluid">
                <div class="container">
                <h1 class="display-4">Categorias de archivos</h1>
                <br>
                <button class="btn btn-warning" data-toggle="modal" data-target="#modalAgregarCategoria">
                   <span><i class="fas fa-user"></i></span> Agregar Categoria
                </button>
                <hr>

                <div id ="cargaTablaCategorias"></div>                
            </div>
           
        </div>
        <?php require_once "vistas/categorias/modalAgregar.php";
        ?>
    </div>
    <script src="public/js/categorias.js"></script>
   
</body>
</html>
