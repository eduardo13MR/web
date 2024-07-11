<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylecon.css">
    <link rel="stylesheet" href="styleform.css">
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
    <title>CONTACTOS</title>
</head>
<body class="move-down">
    
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
        <h1>Contactos</h1>
    </main>

    <section class="scrollable-content">
        <main style="text-align: center;">
            <h2>Te prestamos la máxima atención a nuestros clientes. Por eso si tienes preguntas, no dudes en contactarnos.</h2>
       </section>

       <section class="scrollable-content">
        <main>
            <h2>Formulario de Contacto</h2>
            <form action="https://formsubmit.co/your@email.com" method="post">
                <label for="nombre">Nombre Completo:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="teléfono">Teléfono:</label>
                <input type="tel" id="teléfono" name="teléfono" required>

                <label for="correo">Correo Electrónico:</label>
                <input type="email" id="correo" name="correo" required>

                <label for="asunto">Asunto:</label>
                <input type="text" id="asunto" name="asunto" required>

                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" rows="4" cols="50" required></textarea>

                <input type="submit" value="Enviar">
            </form>
        </main>
    </section>

       <section class="mapa-contacto">
        <section class="mapa">
        <div class="mapa">
            <!-- Tu código del mapa aquí -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1565.7133606316181!2d-99.9726149054857!3d17.779165918657135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cb7f00507966c1%3A0xa79d02e525b72659!2sLa%20Quebradora!5e1!3m2!1ses!2smx!4v1718647510076!5m2!1ses!2smx" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
            </section>
<section class=contactos>
        <div class="contactos">
            <h4>Contacto de la Empresa</h4>
            <div class="contacto-item">
                <p><strong>Teléfono:</strong> 123-456-7890</p>
                <p><strong>Correo Electrónico:</strong> contacto@empresa.com</p>
                <p><strong>Redes Sociales:</strong></p>
                <p>Facebook: <a href="https://www.facebook.com/empresa">facebook.com/empresa</a></p>
                <p>Twitter: <a href="https://www.twitter.com/empresa">@empresa</a></p>
                <p>Instagram: <a href="https://www.instagram.com/empresa">@empresa</a></p>
            </div>
        </div>
    </section>
            </section> 

    <footer style="text-align: center;" class="Derechos">
        <h5>Derechos reservados&copy; <?php echo date("Y"); ?></h5>
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


        
        document.getElementById("messageForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Evita que se envíe el formulario automáticamente

            // Obtener los valores del formulario
            var formData = new FormData();
            formData.append('nombre', document.getElementById("nombre").value);
            formData.append('telefono', document.getElementById("telefono").value);
            formData.append('correo', document.getElementById("correo").value);
            formData.append('asunto', document.getElementById("asunto").value);
            formData.append('mensaje', document.getElementById("mensaje").value);

            // Enviar los datos usando fetch
            fetch('formulario.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                console.log('Respuesta del servidor:', data);
                // Aquí puedes manejar la respuesta del servidor si lo necesitas
                alert('Mensaje enviado correctamente');
                // Puedes redirigir a otra página o hacer otras acciones después de enviar el formulario
            })
            .catch(error => {
                console.error('Error al enviar mensaje:', error);
                // Manejar errores si ocurren durante la solicitud
                alert('Error al enviar mensaje. Por favor, inténtalo de nuevo.');
            });

            // Limpiar los campos del formulario después de enviar el mensaje (opcional)
            document.getElementById("messageForm").reset();
        });
    </script>







    </script>

</body>
</html>
