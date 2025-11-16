<?php
session_start();

if (!isset($_SESSION['cistella'])) {
    $_SESSION['cistella'] = array();
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Resum de la Compra</title>
</head>
<body>
    <h1>Resum de la Compra</h1>

    <?php if (empty($_SESSION['cistella'])): ?>
        <p>La cistella està buida</p>
        <p><a href="index.html">Tornar a la botiga</a></p>
    <?php else: ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Producte</th>
                    <th>Preu Unitari</th>
                    <th>Quantitat</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                foreach ($_SESSION['cistella'] as $item):
                    $subtotal = $item['preu'] * $item['quantitat'];
                    $total += $subtotal;
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($item['nom']); ?></td>
                    <td><?php echo number_format($item['preu'], 2, ',', '.'); ?>€</td>
                    <td><?php echo $item['quantitat']; ?></td>
                    <td><?php echo number_format($subtotal, 2, ',', '.'); ?>€</td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3"><strong>TOTAL:</strong></td>
                    <td><strong><?php echo number_format($total, 2, ',', '.'); ?>€</strong></td>
                </tr>
            </tfoot>
        </table>

        <p><a href="index.html">Continuar comprant</a></p>
        <form action="cistella_compra.php" method="POST">
            <input type="hidden" name="accio" value="confirmar">
            <button type="submit">Confirmar Compra</button>
        </form>
    <?php endif; ?>
</body>
</html>