<?php
session_start();
$usuario = $_SESSION['usuario'] ?? 'Invitat';
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pàgina 2 - Informació</title>
</head>
<body>
    <>Benvingut/da, <?php echo htmlspecialchars($usuario); ?> | <a href="logout.php">Desconnectar</a></h2>
    <hr>
    
    <nav>
        <a href="pagina1.php">Pàgina 1</a> | 
        <a href="pagina2.php">Pàgina 2</a>
    </nav>
    
    <hr>
    
    <h1>Pàgina 2: Informació Tècnica</h1>
    
    <h3>Sessions PHP</h3>
    <p>
        Les sessions permeten emmagatzemar informació de l'usuari al servidor 
        durant la seva visita. En aquest cas, guardem el nom d'usuari i l'estat 
        d'autenticació per protegir les pàgines de contingut.
    </p>
    
    <h3>Protecció de pàgines</h3>
    <p>
        Cada pàgina protegida comprova al començament si existeix la sessió 
        i si l'usuari està autenticat. Si no és així, es redirigeix 
        automàticament a la pàgina de login.
    </p>
    
    <h3>Tancament de sessió</h3>
    <p>
        El botó "Tancar Sessió" destrueix la sessió PHP i redirigeix a la 
        pàgina de login, assegurant que l'usuari ha de tornar a autenticar-se 
        per accedir al contingut protegit.
    </p>
</body>
</html>