<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Cargar PHPMailer
require_once __DIR__ . '/vendor/autoload.php';

// Configuración del servidor SMTP
$mail = new PHPMailer(true);

try {
    // Configuración del servidor SMTP
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPAuth = true;
    $mail->Username = '"mezae5848@gmail.com'; // Tu correo de Gmail
    $mail->Password = ''; // Tu contraseña de Gmail
    
  // Configurar la clase SMTP
 

  // Destinatario y remitente

    

    // Obtener el correo del remitente desde el formulario
    $correo_remitente = isset($_POST['correo']) ? filter_var($_POST['correo'], FILTER_SANITIZE_EMAIL) : '';

    // Destinatario y remitente
    $mail->setFrom($correo_remitente, 'Nombre Remitente'); // Usar el correo del formulario como remitente
    $mail->addAddress('mezae5848@gmail.com', 'Eduardo Meza'); // Correo del destinatario

    

    // Sanitizar y obtener datos del formulario
    $nombre = isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : '';
    $telefono = isset($_POST['telefono']) ? htmlspecialchars($_POST['telefono']) : '';
    $correo = $correo_remitente; // Usar el correo del remitente del formulario
    $asunto = isset($_POST['asunto']) ? htmlspecialchars($_POST['asunto']) : '';
    $mensaje = isset($_POST['mensaje']) ? htmlspecialchars($_POST['mensaje']) : '';

    // Validación simple de los campos
    if (empty($nombre) || empty($telefono) || empty($correo) || empty($asunto) || empty($mensaje)) {
        throw new Exception('Todos los campos del formulario son obligatorios.');
    }

    // Contenido del correo
    $mail->isHTML(true);
    $mail->Subject = 'Nuevo mensaje desde formulario de contacto';
    $mail->Body = "
        <p><strong>Nombre:</strong> $nombre</p>
        <p><strong>Teléfono:</strong> $telefono</p>
        <p><strong>Correo Electrónico:</strong> $correo</p>
        <p><strong>Asunto:</strong> $asunto</p>
        <p><strong>Mensaje:</strong> $mensaje</p>
    ";

    // Envío del correo
    $mail->send();
    echo 'El mensaje se envió correctamente';

} catch (Exception $e) {
    echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
}


    // --- Inserción en la base de datos ---
    // Configuración de la conexión a la base de datos
    $servername = "localhost";
    $username = "root"; // Nombre de usuario predeterminado en XAMPP
    $password = ""; // Contraseña predeterminada (vacía) en XAMPP
    $dbname = "formulario"; // Nombre de tu base de datos

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Preparar la consulta SQL para inserción
    $stmt = $conn->prepare("INSERT INTO contactos (Nombre, teléfono, email, asunto, mensaje) VALUES (?, ?, ?, ?, ?)");
    if ($stmt === false) {
        die("Error al preparar la declaración: " . $conn->error);
    }

    // Bindear parámetros y ejecutar la inserción
    $stmt->bind_param("sssss", $nombre, $telefono, $correo, $asunto, $mensaje);
    if (!$stmt->execute()) {
        die("Error al ejecutar la inserción: " . $stmt->error);
    } else {
        echo "<br>¡Datos insertados correctamente en la base de datos!";
    }

    // Cerrar declaración y conexión a la base de datos
    $stmt->close();
    $conn->close();


?>
