<?php

$majorEdat = $_COOKIE['majoredat'] ?? 'no';
$idioma = $_COOKIE['idioma'] ?? 'ca';
$moneda = $_COOKIE['moneda'] ?? 'EUR';

$productes = [
    'producte1' => [
        'ca' => 'vi "Les Terrasses"',
        'es' => 'vino "Las Terrazas"',
        'en' => 'wine "Les Terrasses"',
        'preu_eur' => 39.00
    ],
    'producte2' => [
        'ca' => 'Cervesa artesana "Black Hops"',
        'es' => 'Cerveza artesana "Black Hops"',
        'en' => 'Craft Beer "Black Hops"',
        'preu_eur' => 5.50
    ]
];

$tipusCanvi = [
    'EUR' => ['factor' => 1.0, 'simbol' => '€'],
    'GBP' => ['factor' => 0.85, 'simbol' => '£'], 
    'USD' => ['factor' => 1.10, 'simbol' => '$']  
];

function obtenirMissatgeRestriccio($idioma) {
    switch ($idioma) {
        case 'ca':
            return "❌ No et podem vendre alcohol si ets menor d'edat.";
        case 'es':
            return "❌ No podemos venderte alcohol si eres menor de edad.";
        case 'en':
            return "❌ We cannot sell you alcohol if you are underage.";
        default:
            return "❌ Sale restricted to adults.";
    }
}

function obtenirMissatgeBenvinguda($idioma) {
    switch ($idioma) {
        case 'ca':
            return "✅ Benvingut! Aquí tens la nostra selecció:";
        case 'es':
            return "✅ ¡Bienvenido! Aquí tienes nuestra selección:";
        case 'en':
            return "✅ Welcome! Here is our selection:";
        default:
            return "✅ Welcome! Here is our selection:";
    }
}

$canviActual = $tipusCanvi[$moneda] ?? $tipusCanvi['EUR'];
$factorCanvi = $canviActual['factor'];
$simbolMoneda = $canviActual['simbol'];

?>
<!DOCTYPE html>
<html lang="<?= $idioma ?>">
<head>
    <meta charset="UTF-8">
    <title>Informació de la Bodega</title>
</head>
<body>
    <h1>Informació de Productes</h1>
    
    <p>
        <?php
            echo "Les teves preferències (cookies) són: Major d'edat: <strong>$majorEdat</strong> | Idioma: <strong>$idioma</strong> | Moneda: <strong>$moneda</strong>.";
        ?>
    </p>

    <h2>Productes i Preus</h2>

    <?php if ($majorEdat === 'no'): ?>
        <p class="alert">
            <?= obtenirMissatgeRestriccio($idioma); ?>
        </p>
    <?php else: ?>
        <p><?= obtenirMissatgeBenvinguda($idioma); ?></p>
        
        <?php foreach ($productes as $producteKey => $dades): 
            
            $nomProducte = $dades[$idioma] ?? $dades['ca'];
            $preuFinal = $dades['preu_eur'] * $factorCanvi;
            $preuFormatat = number_format($preuFinal, 2, ',', '.'); 
            
            $missatge = '';
            switch ($idioma) {
                case 'ca':
                    $missatge = "T'oferim el $nomProducte a un preu de $preuFormatat $simbolMoneda.";
                    break;
                case 'es':
                    $missatge = "Te ofrecemos el $nomProducte a un precio de $preuFormatat $simbolMoneda.";
                    break;
                case 'en':
                    $missatge = "We offer you the $nomProducte at a price of $preuFormatat $simbolMoneda.";
                    break;
                default:
                    $missatge = "Product offered: $nomProducte at $preuFormatat $simbolMoneda.";
            }
        ?>
        <div class="producte">
            <?= $missatge; ?>
        </div>
        <?php endforeach; ?>

    <?php endif; ?>
</body>
</html>