
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encabezado y Footer - La Fonda de Doña Florinda</title>
    <link rel="stylesheet" href="inicio.css"> 
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
        <div class="image-container">
            <div class="image-box">
                <img src="images/desayunos1.png" alt="Desayunos">
                <div class="image-label">Desayunos</div>
                <p class="description">Deliciosas opciones para empezar el día.</p>
            </div>
            <div class="image-box">
                <img src="images/comida1.jpg" alt="Comida y Cena">
                <div class="image-label">Comida y Cena</div>
                <p class="description">Platos abundantes para disfrutar en familia.</p>
            </div>
            <div class="image-box">
                <img src="images/bebida1.jpg" alt="Bebidas">
                <div class="image-label">Bebidas</div>
                <p class="description">Refrescos y bebidas tradicionales.</p>
            </div>
            <div class="image-box">
                <img src="images/postre1.jpg" alt="Postres">
                <div class="image-label">Postres</div>
                <p class="description">Dulces que endulzan tu día.</p>
            </div>
        </div>

        <div class="carousel">
            <div class="carousel-images">
                <img src="images/carrusel1.jpg" alt="Imagen 1">
                <img src="images/carrusel2.jpg" alt="Imagen 2">
                <img src="images/carrusel3.jpg" alt="Imagen 3">
                
            </div>
            <div class="carousel-dots">
                <span class="dot active" onclick="setCurrentSlide(0)"></span>
                <span class="dot" onclick="setCurrentSlide(1)"></span>
                <span class="dot" onclick="setCurrentSlide(2)"></span>
            </div>
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