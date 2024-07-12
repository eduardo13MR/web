<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleser.css">
    <style>
        /* Estilos para hacer la página responsive */
        @media only screen and (max-width: 768px) {
            .menu-desktop {
                display: none;
            }

            .menu-mobile {
                display: block;
            }

            .menu-open {
                display: block;
            }

            .close-btn {
                display: block;
            }
        }
    </style>
    <title>Mi Página Web con Menú Desplegable</title>
    
</head>
<body>
    
    <body class="move-down"></body>
    <header>
        <button class="menu-btn" id="menuButton" onclick="toggleMenu()">☰</button>
        <span class="b-l-text-c logo-text-cell"><img src="img/logon.png" alt="Descripción de la imagen" style="width:130%;max-width:140px;"> </span> <!-- Aquí añadimos el span -->

        <nav class="menu-desktop">
            <ul>
                <li><a href="index.html">Inicio</a></li>
                <li><a href="nosotros.php">Nosotros</a></li>
                <li><a href="servicios.php">Servicios</a></li>
                <li><a href="proyectos.php">Proyectos</a></li>
                <li><a href="contactos.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    

    <div id="menuMobileContainer" class="menu-mobile">
        <button class="close-btn">X</button>
        <ul>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li><a href="proyectos.php">Proyectos</a></li>
            <li><a href="contactos.php">Contacto</a></li>
        </ul>
    </div>

    <main style="text-align: center;">
        <h1>SEVICIOS</h1>
       
    </main>

    <section class="scrollable-content1">
        <main style="text-align: center;">
            <h2>Abarcamos toda la gama de servicios, desde la planificación del proyecto hasta su construcción final. Contando también con el diseño de interiores y paisajes.</h2>
       
    
    </section>

    <section class="scrollable-content">
        <div class="scrollable-content">
            <div class="image-gallery">
                <figure>
                    <img src="img/casa echa.jpg" alt="estas casa es casa">
                    <figcaption>PROYECTOS</figcaption>
                    <h5>-Arquitectónicos ejecutivos</h5>
                    <h5>-Casa infonabit</h5>
                    <h5>-Sisternas</h5>
                    
                    
                </figure>

                <figure>
                    <img src="img/casa echa.jpg" alt="Descripción de la imagen 2">
                    <figcaption>Descripción de la casa terminada.</figcaption>
                    <h5>-Arquitectónicos ejecutivos</h5>
                    <h5>-Casa infonabit</h5>
                    <h5>-Sisternas</h5>
                    
                </figure>

                <figure>
                    <img src="img/contruccion2.jpg" alt="Descripción de la imagen 3">
                    <figcaption>Material para la cnstruccion</figcaption>
                    <h5>-Arquitectónicos ejecutivos</h5>
                    <h5>-Casa infonabit</h5>
                    <h5>-Sisternas</h5>
                    
                </figure>
                <!-- Agrega más imágenes según sea necesario -->
            </div>
        </div>
    </section>

    <footer class="Derechos">
        <p>Derechos reservados &copy; <?php echo date("Y"); ?> Jose Eduardo Meza Rivera S.A de C.V 2024 para que cheques el dato Perro</p>
    </footer>
     
    <script>
        function toggleMenu() {
            const menuContainer = document.getElementById('menuMobileContainer');
            const menuButton = document.querySelector('.menu-btn');
            if (menuContainer.classList.contains('menu-open')) {
                menuContainer.classList.remove('menu-open');
                menuButton.textContent = '☰';
            } else {
                menuContainer.classList.add('menu-open');
                menuButton.textContent = 'X';
            }
        }

        // Cerrar el menú móvil al cambiar el tamaño de la pantalla
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                document.getElementById('menuMobileContainer').classList.remove('menu-open');
                document.querySelector('.menu-btn').textContent = '☰';
            }
        });

        // Cerrar el menú móvil al hacer clic fuera del menú
        document.addEventListener('click', function(event) {
            const menuContainer = document.getElementById('menuMobileContainer');
            const menuButton = document.querySelector('.menu-btn');
            const closeButton = document.querySelector('.close-btn');

            // Verificar si el clic no es dentro del contenedor del menú, del botón del menú, o del botón de cierre
            if (!menuContainer.contains(event.target) && !menuButton.contains(event.target) && !closeButton.contains(event.target)) {
                menuContainer.classList.remove('menu-open');
                menuButton.textContent = '☰';
            }
        });

        // Cerrar el menú móvil al hacer clic en el botón de cierre
        document.querySelector('.close-btn').addEventListener('click', function() {
            document.getElementById('menuMobileContainer').classList.remove('menu-open');
            document.querySelector('.menu-btn').textContent = '☰';
        });
    </script>
    
</body>

</html>
