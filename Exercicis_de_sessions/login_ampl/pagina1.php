<?php
session_start();
$usuario = $_SESSION['usuario'] ?? 'Invitat';
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pàgina 1 - Informació</title>
</head>
<body>
    <>Benvingut/da, <?php echo htmlspecialchars($usuario); ?> | <a href="logout.php">Desconnectar</a></h2>
    <hr>
    
    <nav>
        <a href="pagina1.php">Pàgina 1</a> | 
        <a href="pagina2.php">Pàgina 2</a>
    </nav>
    
    <hr>
    
    <h1>Pàgina 1: Informació General</h1>
    
    <h3>Sobre aquest sistema</h3>
    <p>
        Aquesta és una aplicació web amb sistema d'autenticació bàsic 
        desenvolupada amb PHP i sessions. El sistema valida que l'usuari 
        i la contrasenya siguin idèntics per permetre l'accés.
    </p>
    
    <h3>Seguretat</h3>
    <p>
        Les sessions PHP permeten mantenir l'estat d'autenticació de l'usuari 
        durant la seva navegació. Cada pàgina protegida comprova que l'usuari 
        estigui correctament autenticat abans de mostrar el contingut.
    </p>
    
    <h3>Funcionalitats</h3>
    <ul>
        <li>Login amb validació usuari/contrasenya</li>
        <li>Pàgines protegides amb sessions</li>
        <li>Navegació entre pàgines autenticades</li>
        <li>Logout per tancar sessió de forma segura</li>
    </ul>
</body>
</html>