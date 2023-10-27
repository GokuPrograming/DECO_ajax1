<?php
require_once '../model/usuario.php';
require_once '../model/conexion.php';

// Comprobar si se recibió una solicitud POST para iniciar sesión
if (isset($_POST['correo']) && isset($_POST['password'])) {
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $user = new Usuario(); // Asumiendo que tu clase se llama Usuario, ajusta según la tuya

    if ($user->autenticar($correo, $password)) {
        // Autenticación exitosa
        // Puedes redirigir al usuario a la página de inicio o realizar alguna otra acción
        //header('Location: ../index.html');
        echo 'nice'.$correo.$password;

        exit;
    } else {
        // Autenticación fallida
        echo 'chale'.$correo.$password;
        // Puedes mostrar un mensaje de error o redirigir al usuario nuevamente al formulario de inicio de sesión
       // header('Location: ../login.html'); // Ajusta la ruta según tu estructura de archivos
        exit;
    }
} else {
    // Si no se recibieron datos POST, puedes redirigir al usuario a la página de inicio de sesión
    // o mostrar un mensaje de error, según tus necesidades
    header('Location: ../login.html');
    exit;
}