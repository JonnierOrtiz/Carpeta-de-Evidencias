<?php

include('includes/header.php')

?>


<?php

$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];

$precio = [
    "xtz125" => 10500000,
    "xtz150" => 13500000,
];

$total = $precio[$producto] * $cantidad;

?>


<section class="compra">
    <h2>Resumen de la Compra</h2>
    <div class="Resumen">
        <p><strong>Producto: </strong><?php echo $producto; ?></p>
        <p><strong>Cantidad: </strong><?php echo $cantidad; ?></p>
        <p><strong>Total a pagar: </strong><?php echo number_format($total, 0, '.', ',') ?></p>
    </div>

    <a href="tienda.php" class="btn">Volver a la Tienda</a>
</section>


<?php

include('includes/footer.php')

?>