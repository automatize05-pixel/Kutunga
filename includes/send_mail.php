<?php
/* ============================================================
   KUTUNGA DIGITAL — SEND_MAIL.PHP
   Processa o formulário de contacto e envia email
   ============================================================ */

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../contacto.php');
    exit;
}

// Sanitize helpers
function clean(string $value): string {
    return htmlspecialchars(strip_tags(trim($value)), ENT_QUOTES, 'UTF-8');
}

// Collect and sanitize inputs
$name    = clean($_POST['name']    ?? '');
$email   = clean($_POST['email']   ?? '');
$phone   = clean($_POST['phone']   ?? '');
$service = clean($_POST['service'] ?? '');
$message = clean($_POST['message'] ?? '');

// Basic validation
$errors = [];

if (empty($name) || strlen($name) < 2) {
    $errors[] = 'nome_invalido';
}

if (empty($email) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'email_invalido';
}

if (empty($message) || strlen($message) < 10) {
    $errors[] = 'mensagem_invalida';
}

if (!empty($errors)) {
    header('Location: ../contacto.php?error=validacao&fields=' . implode(',', $errors));
    exit;
}

// Email configuration
$to      = 'automatizemais@outlook.com';
$subject = '=?UTF-8?B?' . base64_encode("Nova mensagem de contacto — Kutunga Digital") . '?=';

$body = "Nova mensagem recebida pelo formulário do site Kutunga Digital\n";
$body .= str_repeat("=", 60) . "\n\n";
$body .= "Nome:     {$name}\n";
$body .= "Email:    {$email}\n";
$body .= "Telefone: " . (!empty($phone) ? $phone : 'Não fornecido') . "\n";
$body .= "Serviço:  " . (!empty($service) ? $service : 'Não especificado') . "\n\n";
$body .= "Mensagem:\n";
$body .= str_repeat("-", 40) . "\n";
$body .= wordwrap($message, 70, "\n", true) . "\n\n";
$body .= str_repeat("=", 60) . "\n";
$body .= "Enviado em: " . date('d/m/Y \à\s H:i') . "\n";
$body .= "IP: " . ($_SERVER['REMOTE_ADDR'] ?? 'desconhecido') . "\n";

$headers  = "From: Kutunga Digital <noreply@kutungadigital.com>\r\n";
$headers .= "Reply-To: {$name} <" . $_POST['email'] . ">\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$headers .= "Content-Transfer-Encoding: 8bit\r\n";
$headers .= "X-Mailer: KutungaDigital/1.0\r\n";

// Attempt to send
$sent = mail($to, $subject, $body, $headers);

if ($sent) {
    header('Location: ../contacto.php?success=1&name=' . urlencode($name));
} else {
    header('Location: ../contacto.php?error=envio');
}
exit;
