<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $majorEdat = $_POST['majoredat'] ?? 'no';
    $idioma = $_POST['idioma'] ?? 'ca';
    $moneda = $_POST['moneda'] ?? 'EUR';


    setcookie('majoredat', $majorEdat);
    setcookie('idioma', $idioma);
    setcookie('moneda', $moneda);

    header('Location: info.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Configuració de la Bodega</title>
</head>
<body>
    <h1>Configuració d'Accés i Preferències</h1>
    <form action="./php/info.php" method="POST">
        
        <div>
            <label>Ets major d'edat? (majoredat)</label>
            <input type="radio" name="majoredat" value="si" required> Sí
            <input type="radio" name="majoredat" value="no" required checked> No
        </div>

        <div>
            <label for="idioma">Idioma de la web (idioma)</label>
            <select name="idioma" id="idioma" required>
                <option value="ca">Català</option>
                <option value="es">Espanyol</option>
                <option value="en">Anglès</option>
            </select>
        </div>

        <div>
            <label for="moneda">Moneda per a transaccions (moneda)</label>
            <select name="moneda" id="moneda" required>
                <option value="EUR">Euros (€)</option>
                <option value="GBP">Lliures (£)</option>
                <option value="USD">Dòlars ($)</option>
            </select>
        </div>

        <button type="submit">Guardar Preferències i Accedir</button>
    </form>
</body>
</html>