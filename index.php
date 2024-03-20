<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <h1>Formulário de Cadastro</h1>
    <form action="index.php" method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <input type="hidden" name="acao" value="adicionar_usuario">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>


<?php

include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['acao'] === 'adicionar_usuario' && isset($_POST['nome']) && isset($_POST['email'])) {
        $novoUsuario = adicionarUsuario($_POST['nome'], $_POST['email']);
        echo json_encode($novoUsuario);
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if ($_GET['acao'] === 'listar_usuarios') {
        $usuarios = listarUsuarios();
        echo json_encode($usuarios);
    }
}

?>
