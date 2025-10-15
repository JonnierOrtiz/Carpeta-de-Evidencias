<?php include('includes/header.php'); ?>

<section class="banner-ofertas">
    <h2>🔥 Ofertas del Mes 🔥</h2>
    <p>Aprovecha nuestros descuentos en motos seleccionadas</p>
</section>

<section class="tienda">
    <h2>Nuestras Motocicletas</h2>

    <div class="busqueda">
        <input type="text" id="buscarProducto" placeholder="Buscar motocicleta...">
    </div>

    <div class="productos" id="listaProductos">
        <div class="card" data-nombre="xtz 125">
            <div class="imagen-container">
                <img src="img/xtz125.jpg" alt="XTZ 125">
            </div>
            <h3>XTZ 125</h3>
            <p class="precio">$10.500.000 COP</p>
            <form action="compra.php" method="POST">
                <input type="hidden" name="producto" value="xtz125">
                <input type="number" name="cantidad" min="1" value="1" class="cantidad">
                <button type="submit" class="btn">Comprar</button>
            </form>
        </div>

        <div class="card" data-nombre="xtz 150">
            <div class="imagen-container">
                <img src="img/xtz150.png" alt="XTZ 150">
            </div>
            <h3>XTZ 150</h3>
            <p class="precio">$14.500.000 COP</p>
            <form action="compra.php" method="POST">
                <input type="hidden" name="producto" value="xtz150">
                <input type="number" name="cantidad" min="1" value="1" class="cantidad">
                <button type="submit" class="btn">Comprar</button>
            </form>
        </div>


        <div class="card" data-nombre="xtz 250">
            <div class="imagen-container">
                <img src="img/xtz250.jpg" alt="XTZ 250">
            </div>
            <h3>XTZ 250</h3>
            <p class="precio">$25.500.000 COP</p>
            <form action="compra.php" method="POST">
                <input type="hidden" name="producto" value="xtz250">
                <input type="number" name="cantidad" min="1" value="1" class="cantidad">
                <button type="submit" class="btn">Comprar</button>
            </form>
        </div>


        <div class="card" data-nombre="xtz 660">
            <div class="imagen-container">
                <img src="img/xtz660.jpg" alt="XTZ 660">
            </div>
            <h3>XTZ 660</h3>
            <p class="precio">$32.500.000 COP</p>
            <form action="compra.php" method="POST">
                <input type="hidden" name="producto" value="xtz660">
                <input type="number" name="cantidad" min="1" value="1" class="cantidad">
                <button type="submit" class="btn">Comprar</button>
            </form>
        </div>
    </div>
</section>

<script>
    // 🔍 Filtro de búsqueda simple
    document.getElementById('buscarProducto').addEventListener('input', function() {
        const busqueda = this.value.toLowerCase();
        const productos = document.querySelectorAll('.card');

        productos.forEach(card => {
            const nombre = card.getAttribute('data-nombre').toLowerCase();
            card.style.display = nombre.includes(busqueda) ? 'block' : 'none';
        });
    });
</script>

<?php include('includes/footer.php'); ?>
