<?php
//include '../controller/ctrlMostrarTodo.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos los productos</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- Asegúrate de especificar la ruta correcta al archivo CSS -->
    <script src="../assets/js/jquery-3.7.1.min.js"></script>
</head>

<body>
    <a href="../html/carrito.php">ir a carrito</a>
    <div id="tbMensajes">
        <script>
        //obtener el id
        function agregarACarrito(id_lista_cursos) {
           //agrega a carrito 
            $.ajax({
                type: "POST",
                url: "../controller/ctrlMostrarTodo.php?opc=2",
                data: {
                    id_lista_cursos: id_lista_cursos
                },
                success: function(data) {
                    $('#tbMensajes').html(data);
                },
            })
        }
        </script>
    </div>
    <div></div>
    <h1 class="display-3 text-center titulo-sc p-3 p-md-5">Todos los productos</h1>
    <!-- MUESTRA TODOS LOS PRODUCTOS DEL CATALOGO-->
    <div class="container" id="app">
        <div class="row align-items-start">
            <script>
            $(document).ready(function() {
                $.ajax({
                    type: "GET",
                    url: "../controller/ctrlMostrarTodo.php?opc=1",
                    data: {},
                    success: function(data) {
                        $('#app').html(data);
                    }
                });
            });
            </script>
        </div>
    </div>




</body>

</html>