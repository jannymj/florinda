<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encabezado y Footer - La Fonda de Doña Florinda</title>
    <link rel="stylesheet" href="inicio.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

    <div class="navbar">
        <div class="header-logo-icons">
            <a href="inicio.php">
                <img src="images/logo fdf.png" alt="Logo" class="logo">
                </a>
                <div class="menu-options">
                    <div class="dropdown">
                        <a href="#">Menú</a>
                        <div class="dropdown-content">
                            <a href="desayunos.php">Desayunos</a>
                            <a href="comidaycena.php">Comida y Cena</a>
                            <a href="bebidas.php">Bebidas</a>
                            <a href="postres.php">Postres</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="#">Nosotros</a>
                        <div class="dropdown-content">
                            <a href="quienes_somos.php">Quiénes somos</a>
                            <a href="galeria.php">Galería</a>
                        </div>
                    </div>
                        <a href="sucursales.php">Sucursales</a> 
                        <a href="contactanos.php">Contáctanos</a>
                </div>


            <div class="icon-container">
            <a href="registro.php">
        <img src="images/usuario.png" alt="Icono de cuenta" class="icon-left">
    </a> 
               
            </div>
        </div>
    </div>

    <div class="content">
        <section class="contact-form">
            <h2>Estamos aquí para ayudarte</h2>
            <p>Si tienes alguna pregunta, comentario o sugerencia, por favor contactanos en nuestras redes sociales.</p> 
            <p>Nos pondremos en contacto contigo lo antes posible.</p>
                
                <div class="text-center my-5">
                    <a href="https://www.facebook.com/cesununiversidad/" target="_blank" class="social-link">
                        <i class="bi bi-facebook"></i>
                        <p><strong>Facebook</strong></p>
                    </a>
                    <a href="https://www.instagram.com/cesunoficial/" target="_blank" class="social-link">
                        <i class="bi bi-instagram"></i>
                        <p><strong>Instagram</strong></p>
                    </a>
                    <a href="https://www.tiktok.com/@cesun_universidad?is_from_webapp=1&sender_device=pc" target="_blank" class="social-link">
                        <i class="bi bi-tiktok"></i>
                        <p><strong>TikTok</strong></p>
                    </a>
                    <a href="https://www.youtube.com/channel/UCrzC3W1nzLJcUC0EEGPO_iw" target="_blank" class="social-link">
                        <i class="bi bi-youtube"></i>
                        <p><strong>YouTube</strong></p>
                    </a>
                </div>
            </div>

    <div class="footer">
        <div class="footer-content">
            <div class="logo-container">
                <img src="images/logo fdf.png" alt="Logo" class="footer-logo">
            </div>
            <div class="mission-vision">
                <p><strong>Misión:</strong> Ofrecer comida de calidad que haga sentir a nuestros clientes como en casa.</p>
                <p><strong>Visión:</strong> Ser la fonda preferida por las familias para disfrutar de un buen alimento.</p>
            </div>
            <p class="slogan">¡Disfruta de la verdadera comida mexicana!</p>
        </div>
    </div>

    <script>
        let currentIndex = 0;
        const slides = document.querySelectorAll('.carousel-images img');
        const dots = document.querySelectorAll('.dot');

        function showSlides() {
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = 'none';  
            }
            currentIndex++;
            if (currentIndex > slides.length) {currentIndex = 1}    
            for (let j = 0; j < dots.length; j++) {
                dots[j].className = dots[j].className.replace(" active", "");
            }
            slides[currentIndex - 1].style.display = 'block';  
            dots[currentIndex - 1].className += " active";
            setTimeout(showSlides, 3000); 
        }

        showSlides(); 
    </script>

</body>
</html>