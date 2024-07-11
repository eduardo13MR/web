<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylepri.css">
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

        /* Estilos generales para evitar scroll horizontal */
        body {
            overflow-x: hidden;
            margin: 0;
            padding: 0;
        }

        .scrollable-content, .scrollable-content1, .scrollable-content2 {
            max-width: 100%;
            overflow-x: hidden;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .galeria img {
            width: 100%;
        }
    </style>
    <title>Página Web QUEBRADORA PETRUS INTEGRALIA S.A. DE C.V.</title>
</head>
<body>
    <header>
        <button class="menu-btn" id="menuButton" onclick="toggleMenu()">☰</button>
        <span class="b-l-text-c logo-text-cell">
            <img src="img/logon.png" alt="Descripción de la imagen" style="width:130%;max-width:140px;"> 
        </span> 

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
        <h1>QUEBRADORA PETRUS INTEGRALIA</h1>
    </main>

    <main style="text-align: center;">
        <p>S.A. DE C.V.</p>
    </main>

    <section class="scrollable-content">
        <div class="background" id="background"></div>
    </section>

    <section class="scrollable-content">
        <div class="scrollable-content1">
            <h2>Tu título aquí</h2>
            <img src="img/logon.png" alt="Descripción de la imagen">
        </div>
    </section>

    <section class="scrollable-content1">
        <main style="text-align: center;">
            <h2>Todo comenzó con la idea de diseñar proyectos arquitectónicos únicos y sostenibles.</h2>
        </main>
    </section>

    <section class="scrollable-content2">
        <main style="text-align: center;">
            <h3>PROYECTOS DESTACADOS</h3>
        </main>
    </section>

    <section class="scrollable-content">
        <ul class="galeria">
            <li>
                <a href="#img1"><img src="img/casa echa.jpg" alt="Casa hecha"></a>
                <p>Casa hecha</p>
            </li>
            <li>
                <a href="#img2"><img src="img/casa terminada.jpg" alt="Casa terminada"></a>
                <p>Casa terminada</p>
            </li>
            <li>
                <a href="#img3"><img src="img/construccion.jpg" alt="Construcción"></a>
                <p>Construcción</p>
            </li>
            <li>
                <a href="#img4"><img src="img/contruccion2.jpg" alt="Construcción 2"></a>
                <p>Construcción 2</p>
            </li>
        </ul>

        <div class="modal" id="img1">
            <h3>Paisaje 1</h3>
            <div class="imagen">
                <a href="#img4">&#60;</a>
                <a href="#img2"><img src="img/casa echa.jpg" alt="Casa hecha"></a>
                <a href="#img2">></a>
            </div>
            <p>Casa hecha</p>
            <a class="cerrar" href="">X</a>
        </div>

        <div class="modal" id="img2">
            <h3>Paisaje 2</h3>
            <div class="imagen">
                <a href="#img1">&#60;</a>
                <a href="#img3"><img src="img/casa terminada.jpg" alt="Casa terminada"></a>
                <a href="#img3">></a>
            </div>
            <p>Casa terminada</p>
            <a class="cerrar" href="">X</a>
        </div>

        <div class="modal" id="img3">
            <h3>Paisaje 3</h3>
            <div class="imagen">
                <a href="#img2">&#60;</a>
                <a href="#img4"><img src="img/construccion.jpg" alt="Construcción"></a>
                <a href="#img4">></a>
            </div>
            <p>Construcción</p>
            <a class="cerrar" href="">X</a>
        </div>

        <div class="modal" id="img4">
            <h3>Paisaje 4</h3>
            <div class="imagen">
                <a href="#img3">&#60;</a>
                <a href="#img1"><img src="img/contruccion2.jpg" alt="Construcción 2"></a>
                <a href="#img1">></a>
            </div>
            <p>Construcción 2</p>
            <a class="cerrar" href="">X</a>
        </div>

        <ul>
            <li><a class="btn11" href="proyectos.php">VER MÁS PROYECTOS</a></li>
            <div class="caja caja26"></div>
        </ul>
    </section>

    <section class="contactos">
        <h2>Envíenos un correo electrónico: Queremos saber sobre sus proyectos, dudas, sugerencias o comentarios.</h2>
        <ul>
            <li><a class="boton" href="contactos.php">Contacto</a></li>
        </ul>
    </section> 

    <footer class="Derechos">
        <h7>Derechos reservados&copy; <?php echo date("Y"); ?> Jose Eduardo Meza Rivera S.A de C.V 2024 para que cheques el dato Perro</h7>
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
                menuButton.textContent = '';
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
    'url("img/petrus.jpg")',
    'url("img/Marketing-constructoras.jpg")',
    'url("img/casa echa.jpg")',
    'url("img/casa terminasda.jpg")',
    'url("img/sanjuve.jpg")',
    // Añade más imágenes aquí si las tienes
   
];


let currentIndex = 0;
const backgroundElement = document.getElementById('background');

function changeBackground() {
    currentIndex = (currentIndex + 1) % images.length;
    backgroundElement.style.backgroundImage = images[currentIndex];
}

// Cambiar imagen cada cierto tiempo (por ejemplo, cada 5 segundos)
setInterval(changeBackground, 3000);

// Cambiar imagen al hacer clic
backgroundElement.addEventListener('click', changeBackground);

// Inicializar con la primera imagen
backgroundElement.style.backgroundImage = images[0];



    </script>
</body>
</html>