<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <script src="../assets/js/jquery-3.7.1.min.js"></script>
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
            <p>TOTAL A PAGAR: <span id="pagar-value"></span></p>
            <a class="Comprar" href="../Controladores/ComprasCarrito.php">
                <img src="../assets/img/tarjeta-de-debito.png" alt=""> COMPRAR
            </a>
        </div>

        <div id="borrarCarrito">
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
                
                // Carga la tabla del carrito al cargar la página
                $(document).ready(function() {
                    $.ajax({
                        type: "GET",
                        url: "../controller/ctrlMostrarTodo.php?opc=3",
                        data: {},
                        success: function(data) {
                            $('#mostrarCarro').html(data);
                        }
                    });
                });
            </script>
        </div>
    </main>
</body>

</html>
3