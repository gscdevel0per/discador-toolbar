<?php 
    # include '../../database/db_conection.php';

    $login = @$_GET['login'] ? $_GET['login'] : "erroLogin";
    $senha = @$_GET['senha'] ? $_GET['senha'] : "erroSenha";

    if ($login != 'gsc') {
        $response = 'Usuário inválido';
    } elseif ($senha != 'gestaolixo') {
        $response = 'Senha inválida';
    } else {
        $response = 'Login efetuado com sucesso.';
    }

    echo $response;

?>