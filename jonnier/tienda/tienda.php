<?php

include('includes/header.php')

?>



<section class="tienda">
    <h2>Nuestros Productos</h2>

    <div class="productos">
        <div class="card">
            <img src="img/xtz125.jpg" alt="xtz125">
            <h3>XTZ 125</h3>
            <p class="precio">$10.500.000COP</p>
            <form action="compra.php" method="POST">
                <input type="hidden" name="producto" value="xtz125">
                <input type="number" name="cantidad" min="1" value="1">
                <button type="submit" class="btn">Comprar</button>
            </form>
            </div>
            
            <div class="card">
                <img src="img/xtz150.png" alt="xtz150">
                <h3>XTZ 150</h3>
                <p class="precio">$14.500.000</p>
                <form action="compra.php" method="POST">
                    <input type="hidden" name="producto" value="xtz150">
                    <input type="number" name="cantidad" min="1" value="1">
                    <button class="btn">Comprar<button>
                </form>
            </div>
        </div>

    </div>
</section>



<?php

include('includes/footer.php')

?>