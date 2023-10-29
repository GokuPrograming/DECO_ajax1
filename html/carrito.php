<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <!-- Asegúrate de que las rutas a los archivos JavaScript sean correctas -->
    <script src="../assets/js/jquery-3.7.1.min.js"></script>
    <script>
        // Función para borrar un elemento del carrito
        function borrarDeCarrito(id_lista_cursos) {
            $.ajax({
                type: "POST",
                url: "../controller/ctrlMostrarTodo.php?opc=4",
                data: {
                    id_lista_cursos: id_lista_cursos
                },
                success: function(data) {
                    $('#mostrarCarro').html(data); // Actualiza la tabla del carrito
                },
            });
        }

        // Carga la tabla del carrito y el valor total a pagar al cargar la página
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "../controller/ctrlMostrarTodo.php?opc=3",
                data: {},
                success: function(data) {
                    $('#mostrarCarro').html(data);
                }
            });

            // actualiza el valor total a pagar
            $.ajax({
                type: "GET",
                url: "../controller/ctrlMostrarTodo.php?opc=5",
                data: {},
                success: function(data) {
                    $('#pagar').html(data);
                }
            });
        });
    </script>
    <script>
    //obtener el id
    function comprarCarrito() {
        //agrega a carrito 
        $.ajax({
            type: "POST",
            url: "../controller/ctrlMostrarTodo.php?opc=6",
            data: {
            },
            success: function(data) {
                $('#mostrarCarro').html(data);
            },
        });
        //actualiza la caja de pago
        $.ajax({
                type: "GET",
                url: "../controller/ctrlMostrarTodo.php?opc=5",
                data: {},
                success: function(data) {
                    $('#pagar').html(data);
                }
            });

    }
    </script>
</head>
<body>
    <header class="cheader" id="a">
        <h1>CARRITO <img src="../assets/img/carrito-de-compras.png" width="50px" height="auto"></h1>
        <div><a href="../html/main.php"><img src="../assets/img/izquierda.png" alt="" width="50px" height="auto"></a></div>
    </header>

    <main id="objetoBorrado">
        <div class="container1">
            <table id="mostrarCarro"></table>
        </div>

        <div class="container1">
            <span id="pagar"></span>
        </div>
    </main>
    <div id="ntfCompras"></div>
</body>
</html>
