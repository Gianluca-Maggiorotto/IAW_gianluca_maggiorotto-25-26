<?php
session_start();

if (!isset($_SESSION['cistella'])) {
    $_SESSION['cistella'] = array();
}

$accio = isset($_POST['accio']) ? $_POST['accio'] : '';

if ($accio === 'afegir' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom_producte'];
    $preu = floatval($_POST['preu_producte']);
    $quantitat = intval($_POST['quantitat']);
    
    $trobat = false;
    foreach ($_SESSION['cistella'] as &$item) {
        if ($item['nom'] === $nom) {
            $item['quantitat'] += $quantitat;
            $trobat = true;
            break;
        }
    }
    
    if (!$trobat) {
        $_SESSION['cistella'][] = array(
            'nom' => $nom,
            'preu' => $preu,
            'quantitat' => $quantitat
        );
    }
    
    header("Location: index.html");
    exit();
}

if ($accio === 'confirmar' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    header("Location: confirmacio.php");
    exit();
}

header("Location: index.html");
exit();
?>