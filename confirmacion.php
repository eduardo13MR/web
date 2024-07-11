<!DOCTYPE html>
<html>
<head>
    <title>Confirmación</title>
</head>
<body>
    <section class="scrollable-content">
        <main style="text-align: center;">
            <h2>Confirmación de Envío</h2>
            <p>Nombre: <?php echo htmlspecialchars($_GET['nombre']); ?></p>
            <p>Teléfono: <?php echo htmlspecialchars($_GET['telefono']); ?></p>
            <p>Correo Electrónico: <?php echo htmlspecialchars($_GET['correo']); ?></p>
            <p>Asunto: <?php echo htmlspecialchars($_GET['asunto']); ?></p>
            <p>Mensaje: <?php echo nl2br(htmlspecialchars($_GET['mensaje'])); ?></p>
        </main>
    </section>
</body>
</html>
