<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylepro1.css">
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
<body class="move-down">
<header>
        <button class="menu-btn" id="menuButton" onclick="toggleMenu()">☰</button>
        <span class="b-l-text-c logo-text-cell">
            <img src="img/logon.png" alt="Descripción de la imagen" style="width:130%;max-width:140px;"> </span> 

        <nav class="menu-desktop">
            <ul>
            
                <li><a href="proyectos.php">Patras</a></li>
                
            </ul>
        </nav>
    </header>
    

    <div id="menuMobileContainer" class="menu-mobile">
        <button class="close-btn">X</button>
        <ul>
            
            <li><a href="proyectos.php">Patras</a></li>
            
        </ul>
    </div>
    </header>
    	
    <ul class="galeria">
        <li><a href="#img1"><img src="img/casa echa.jpg"></a></li>
        <li><a href="#img2"><img src="img/casa terminasda.jpg"></a></li>
        <li><a href="#img3"><img src="img/construccion.jpg"></a></li>
        <li><a href="#img4"><img src="img/contruccion2.jpg"></a></li>
        <li><a href="#img5"><img src="img/sanjuve.jpg"></a></li>
    </ul>

    <div class="modal" id="img1">
        <h3>Paisaje 1</h3>
        <div class="imagen">
            <a href="#img4">&#60;</a>
            <a href="#img2"><img src="img/casa echa.jpg"></a>
            <a href="#img2">></a>
        </div>
        <a class="cerrar" href="">X</a>
    </div>
    
    <div class="modal" id="img2">
        <h3>Paisaje 2</h3>
        <div class="imagen">
            <a href="#img1">&#60;</a>
            <a href="#img3"><img src="img/casa terminasda.jpg"></a>
            <a href="#img3">></a>
        </div>
        <a class="cerrar" href="">X</a>
    </div>
    
    <div class="modal" id="img3">
        <h3>Paisaje 3</h3>
        <div class="imagen">
            <a href="#img2">&#60;</a>
            <a href="#img4"><img src="img/construccion.jpg"></a>
            <a href="#img4">></a>
        </div>
        <a class="cerrar" href="">X</a>
    </div>
    
    <div class="modal" id="img4">
        <h3>Paisaje 4</h3>
        <div class="imagen">
            <a href="#img3">&#60;</a>
            <a href="#img1"><img src="img/contruccion2.jpg"></a>
            <a href="#img1">></a>
        </div>
        <a class="cerrar" href="">X</a>
    </div>
    <div class="modal" id="img5">
        <h3>Paisaje 4</h3>
        <div class="imagen">
            <a href="#img5">&#60;</a>
            <a href="#img3"><img src="img/sanjuve.jpg"></a>
            <a href="#img3">></a>
        </div>
        <a class="cerrar" href="">X</a>
    </div>


    <footer class="Derechos">
        <p>Derechos reservados &copy; <?php echo date("Y"); ?></p>
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
