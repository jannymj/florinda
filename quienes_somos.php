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
        <section class="about-us">
            <h1>Quiénes Somos</h1>
            <p>
                En *La Fonda de Doña Florinda*, estamos dedicados a ofrecer a nuestros clientes 
                lo mejor de la comida mexicana, combinando recetas tradicionales con un toque 
                moderno y único. Nuestra historia comenzó hace más de una década con el sueño 
                de crear un espacio donde las familias puedan disfrutar de deliciosos platillos 
                caseros en un ambiente cálido y acogedor.
            </p>
            <p>
                Nuestra misión es proporcionar una experiencia culinaria excepcional que haga 
                sentir a nuestros clientes como en casa, mientras celebramos las ricas tradiciones 
                de la gastronomía mexicana.
            </p>
            <h2>Nuestros Valores</h2>
            <ul>
                <li>Calidad en cada platillo</li>
                <li>Pasión por la cocina mexicana</li>
                <li>Atención personalizada</li>
                <li>Compromiso con la comunidad</li>
            </ul>
        </section>

        <section class="team">
            <h2>Conoce a Nuestro Equipo</h2>
            <div class="team-members">
                <div class="team-member">
                    <img src="images/chef1.jpg" alt="Chef Principal">
                    <h3>Florinda Meza</h3>
                    <p>Fundadora y Chef Principal</p>
                </div>
                <div class="team-member">
                    <img src="images/Gerente2.jpg" alt="Gerente">
                    <h3>Janeth Meza</h3>
                    <p>Gerente General</p>
                </div>
                <div class="team-member">
                    <img src="images/Mesera1.jpg" alt="Mesera">
                    <h3>Yeisy Gómez</h3>
                    <p>Encargada de Servicio</p>
                </div>
            </div>
        </section>
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