<?php
    $acao = $_POST['acao'];

    if ($acao === 'entrar') {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        if ($usuario === 'Barbara' && $senha === '1234') {
            header('Location: telaProdutos.php');
        }
        else {
            header('Location: telaLogin.php');
        }

        exit();
    }
?>