<?php
session_start();

$usuario = $_POST['usuario'];
$password = $_POST['password'];

if (!empty($usuario) && !empty($password) && $usuario === $password) {
    $_SESSION['usuario'] = $usuario;
    $_SESSION['logged_in'] = true;
    
    header("Location: pagina1.php");
    exit();
} else {
    $_SESSION['error'] = "Error: L'usuari i la contrasenya no coincideixen o estan buits.";
    header("Location: index.html");
    exit();
}
?>