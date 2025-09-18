<?php
$botToken = '8181369456:AAEUu4pLsqzepQlzaGF1zhx5QXAeRbuZmfo';
$chatId = '7418423935';

//Recibir los datos del formulario
$nombre =$_POST['nombre'];
$email =$_POST['email'];
$mensaje =$_POST['mensaje'];

//Formatear mensaje
$texto = "📩 NUEVO FORMULARIO \n";
$texto .= "👤 Nombre: $nombre\n";
$texto .= "📧 Email: $email\n";
$texto .= "📝 Mensaje: $mensaje";

$url = "https://api.telegram.org/bot$botToken/sendMessage";

$params = [
    'chat_id' => $chatId,
    'text' => $texto,
    'parse_mode' => 'HTML'
];

file_get_contents($url . '?' . http_build_query($params));

header("Location: /index.html?mensaje=enviado");
exit;

?>