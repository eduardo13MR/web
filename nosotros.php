<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylenos.css">
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
<body class="move-down"> </body>
    <div class="background" id="background"></div>
    <script src="script.js"></script>
    </body>
        <div class="overlay"></div>

    <header>
        <button class="menu-btn" id="menuButton" onclick="toggleMenu()">☰</button>
        <span class="b-l-text-c logo-text-cell"><img src="img/logon.png" alt="Descripción de la imagen" style="width:130%;max-width:140px;"> </span> <!-- Aquí añadimos el span -->

        <nav class="menu-desktop">
            <ul>
                <li><a href="principal.php">Inicio</a></li>
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
            <li><a href="principal.php">Inicio</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li><a href="proyectos.php">Proyectos</a></li>
            <li><a href="contactos.php">Contacto</a></li>
        </ul>
</div>

    <main style="text-align: center;">
        <h1>¿QUIENES SOMOS?</h1>
       
    </main>

    <section class="scrollable-content1">
        <main style="text-align: center;">
            <h2>QUEBRADORA PETRUS INTEGRALIA S.A. DE C.V..construimos obras de infraestructura con garantía de calidad y eficiencia, utilizando tecnología de punta y soluciones innovadoras y sustentables, en beneficio de los clientes, colaboradores y la sociedad en general. Procurando la satisfacción plena del cliente y teniendo siempre presente el cuidado del medio ambiente.</h2>
       
    
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


        const images = [
    'url("img/Marketing-constructoras.jpg")',
    'url("img/casa echa.jpg")',
    'url("img/casa terminasda.jpg")',
    // Añade más imágenes aquí si las tienes
   
];


let currentIndex = 0;
const backgroundElement = document.getElementById('background');

function changeBackground() {
    currentIndex = (currentIndex + 1) % images.length;
    backgroundElement.style.backgroundImage = images[currentIndex];
}

// Cambiar imagen cada cierto tiempo (por ejemplo, cada 5 segundos)
setInterval(changeBackground, 5000);

// Cambiar imagen al hacer clic
backgroundElement.addEventListener('click', changeBackground);

// Inicializar con la primera imagen
backgroundElement.style.backgroundImage = images[0];

        
    </script>
    
</body>

</html>
