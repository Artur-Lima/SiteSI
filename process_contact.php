<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message']));

    if (!$email) {
        die("Email inválido!");
    }

    // Enviar o email ou armazenar no banco de dados (Não ta 100% qualquer coisa a gente tira)
    echo "Mensagem enviada com sucesso!";
} else {
    die("Método de requisição inválido.");
}
?>