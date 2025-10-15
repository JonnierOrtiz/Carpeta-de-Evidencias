</main>

<footer>
    <div class="footer-container">
        <p>&copy; 2025 JorMotos, todos los derechos reservados.</p>
        
        <div class="footer-links">
            <a href="index.php">Inicio</a>
            <a href="tienda.php">Productos</a>
            <a href="contacto.php">Contacto</a>
        </div>

        <div class="footer-socials">
            <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
        </div>
    </div>
</footer>

<script>
const menu = document.querySelector('.menu-toggle');
const nav = document.querySelector('.nav-links');
menu.addEventListener('click', () => {
    nav.classList.toggle('active');
});
</script>


</body>

</html>