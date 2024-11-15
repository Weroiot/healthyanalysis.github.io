<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Farmacia Saludable</title>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_kpRQDwJ7Xn-jYjmvovnoxqHj1jzWaTY&callback=initMap" async defer></script>
    <style>
        /* Estilos específicos para el mapa */
        #map {
            height: 400px;
            width: 100%;
            margin-top: 20px;
            border-radius: 10px;
            border: 2px solid #ffcc00;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">HEALTHY ANALYSIS</div>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="about.php">Quiénes Somos</a></li>
                <li><a href="medicamentos.php">Productos</a></li>
                <li><a href="contact.php">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero-image">
        <div class="hero-text"></div>
    </section>

   <section class="quienes-somos">
    <h2>Nuestra Historia</h2>
    <p>Somos una farmacia comprometida con la salud de nuestros clientes.</p>
</section>

<!-- Nueva sección "Nuestros Valores" -->
<section class="nuestros-valores">
  <div class="valores-content">
    <div class="valores-texto">
      <h2>Nuestros Valores</h2>
      <p>
        En Healthy Analisis, nuestra misión es mejorar la calidad de vida de nuestros usuarios. Nos 
        enfocamos en encontrar los mejores precios y ofrecer productos de alta calidad, un servicio confiable y precios accesibles. 
        Creemos en la empatía, la integridad y el compromiso con la salud de nuestra comunidad.
      </p>
    </div>
    <div class="valores-imagen">
      <img src="valoress.jpeg" alt="Imagen sobre nuestros valores" />
    </div>
  </div>
</section>

  <!-- Sección "Análisis del Mercado de Precios" -->
<section class="analisis-mercado">
  <div class="mercado-content">
    <div class="mercado-imagen">
      <img src="mercado-imagen.jpeg" alt="Imagen sobre el análisis del mercado de precios" />
    </div>
    <div class="mercado-texto">
      <h2>Análisis del Mercado de Precios</h2>
      <p>
        Nos enfocamos en ofrecer precios competitivos a través de un análisis constante del mercado, 
        asegurando que nuestros productos estén al alcance de todos sin comprometer la calidad. Esta 
        estrategia nos permite adaptarnos a las necesidades de nuestros clientes y fortalecer nuestro 
        compromiso con la comunidad.
      </p>
    </div>
  </div>
</section>
  
<!-- Sección "Atención al Cliente y Soporte" -->
<section class="atencion-soporte">
  <div class="soporte-content">
    <div class="soporte-texto">
      <h2>Atención al Cliente y Soporte</h2>
      <p>
        En Farmacia Saludable, entendemos que el soporte y la atención al cliente son fundamentales para 
        ofrecer una experiencia excepcional. Nuestro equipo está disponible para resolver cualquier duda o 
        inquietud que puedas tener, brindando atención personalizada y soluciones rápidas para que tu experiencia 
        con nosotros sea siempre positiva.
      </p>
    </div>
    <div class="soporte-imagen">
      <img src="soporte.jpeg" alt="Imagen sobre atención al cliente y soporte" />
    </div>
  </div>
</section>






    <section class="comparacion-precios">
        <h2>Comparación de Precios entre Farmacias</h2>
        <div class="tabla-precios">
            <div class="farmacia">
                <h3>Farmacia A</h3>
                <p>Precio: $100</p>
            </div>
            <div class="farmacia">
                <h3>Farmacia B</h3>
                <p>Precio: $90</p>
            </div>
            <div class="farmacia">
                <h3>Farmacia C</h3>
                <p>Precio: $95</p>
            </div>
        </div>
    </section>


<!-- Sección "Encuentra las Mejores Ubicaciones" -->
<section class="mejores-ubicaciones">
  <div class="ubicaciones-content">
    <div class="ubicaciones-texto">
      <h2>Encuentra las Mejores Ubicaciones</h2>
      <p>
        Con nuestra plataforma, te ayudamos a localizar farmacias cercanas que ofrecen los mejores precios 
        para tus medicamentos y productos de salud. Utilizamos tecnología avanzada para recomendarte 
        opciones que se ajusten a tus necesidades, ahorrándote tiempo y dinero. ¡La salud está más cerca de ti 
        de lo que imaginas!
      </p>
    </div>
    <div class="ubicaciones-imagen">
      <img src="mockup.jpg" alt="Mockup de página mostrando ubicaciones de farmacias" />
    </div>
  </div>
</section>


    <!-- Mapa de Google Maps -->
    <section id="map"></section>

    
 <section class="beneficios">
  <h2>Por qué elegirnos</h2>
  <div class="contenedor-beneficio">
    <img src="lupa.png" alt="Ícono de lupa">
    <h3>Los mejores precios</h3>
    <p>Buscamos incansablemente los precios más bajos para que ahorres en cada compra.</p>
  </div>
  <div class="contenedor-beneficio">
    <img src="grafico-subiendo.png" alt="Ícono de gráfico subiendo">
    <h3>Precios actualizados</h3>
    <p>Nuestros precios se actualizan constantemente para ofrecerte las mejores ofertas.</p>
  </div>
  <div class="contenedor-beneficio">
    <img src="iPhone.png" alt="Ícono de reloj">
    <h3>Ahorra tiempo y dinero</h3>
    <p>Compara precios rápidamente y encuentra lo que necesitas sin salir de casa.</p>
  </div>
</section>
    
    <footer>
        <div class="footer-content">
            <div class="footer-about">
                <h3>Acerca de Nosotros</h3>
                <p>ENFOCADOS EN BUSCAR LOS MEJORES PRECIOS PARA USTEDES.</p>
            </div>
            <div class="footer-links">
                <h3>Enlaces Rápidos</h3>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="about.php">Quiénes Somos</a></li>
                    <li><a href="medicamentos.php">Productos</a></li>
                    <li><a href="contact.php">Contacto</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <h3>Síguenos</h3>
                <a href="https://www.facebook.com" target="_blank">Facebook</a>
                <a href="https://www.instagram.com" target="_blank">Instagram</a>
                <a href="https://www.twitter.com" target="_blank">Twitter</a>
            </div>
        </div>
    </footer>

    <script>
        function initMap() {
            const location = { lat: 19.432608, lng: -99.133209 };
            const map = new google.maps.Map(document.getElementById("map"), {
                center: location,
                zoom: 14,
            });

            const marker = new google.maps.Marker({
                position: location,
                map: map,
                title: "Ubicación Farmacia Saludable",
            });
        }
    </script>
</body>
</html>
