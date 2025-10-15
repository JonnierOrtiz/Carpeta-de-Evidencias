<?php include('includes/header.php') ?>

<section class="contacto">
    <div class="contacto-intro">
        <h2>Contáctanos</h2>
        <p>
            ¿Quieres sabes sobre mas ofertas de motocicletas, cotizar o realizar una simulación de crédito?, comunícate con nostros para asesorarte en el proceso de adquirir la moto de tus sueños.
        </p>
    </div>

    <div class="contacto-formulario">
        <form action="enviar.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre completo</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="email">Correo electrónico</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="asunto">Asunto</label>
                <input type="text" id="asunto" name="asunto" required>
            </div>

            <div class="form-group">
                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
            </div>

            <div class="form-boton">
                <button type="submit" class="btn">Enviar mensaje</button>
            </div>
        </form>
    </div>

    <div class="contacto-info">
        <h3>También puedes visitarnos</h3>
        <p>Calle 12 #34-56, Ibagué, Colombia</p>
        <p>Tel: +57 300 123 4567</p>
        <p>Email: jormotos@atencionalcliente.com</p>
    </div>
</section>

<?php include('includes/footer.php') ?>
