<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form id="login-form" method="POST" action="../controller/ctrlLogin.php">
        <input type="text" id="correo" name="correo" placeholder="Correo">
        <input type="password" id="password" name="password" placeholder="Contraseña">
        <button type="submit">Iniciar Sesión</button>
    </form>
    <p id="login-status"></p>

    <!-- Agrega jQuery (asegúrate de incluir la biblioteca jQuery) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        function iniciarSesion() {
            var formData = $('#login-form').serialize();///toma los valores del formulario
            $.ajax({
                type: "POST",// como lo va a mandar 
                url: "../controller/ctrlLogin.php",// al controlador a donde va
                data: formData,
                success: function (data) {
                    if (data === "success") {// si recibe un "success" lo manda a location
                        window.location.href = "../index.html";// lo manda a un index
                    } else {/// si fallla
                        $('#login-status').text('Inicio de sesión fallido. Verifica tus credenciales.');
                    }
                }
            });
        }
    </script>
</body>
</html>
