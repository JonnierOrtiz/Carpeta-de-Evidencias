<?php include('includes/header.php'); ?>

<?php
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];

$precio = [
    "xtz125" => 10500000,
    "xtz150" => 13500000,
    "xtz250" => 25500000,
    "xtz660" => 32500000,
];

$total = $precio[$producto] * $cantidad;
?>

<section class="compra">
    <div class="contenedor-compra">
        <h2>Resumen de tu Compra</h2>
        <div class="resumen">
            <p><strong>Producto:</strong> <?php echo strtoupper($producto); ?></p>
            <p><strong>Cantidad:</strong> <?php echo $cantidad; ?></p>
            <p class="total"><strong>Total a pagar:</strong> $<?php echo number_format($total, 0, '.', ','); ?> COP</p>
        </div>

        <div class="acciones">
            <a href="tienda.php" class="btn volver">⬅ Volver a la Tienda</a>
            <a href="#" class="btn pagar">💳 Proceder al Pago</a>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>
