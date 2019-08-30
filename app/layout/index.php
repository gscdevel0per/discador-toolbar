<?php include '../../helpers/header.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toolbar - GSC</title>
</head>
<body>
    <h1>Teste de Login</h1>
    <pre>
        Login: <input type="text" id="login">
        <br>
        Senha: <input type="password" id="senha">
        <br>
        <button id="submit">Enviar</button>
        <br><br>
        <div id="resposta"></div>
    </pre>

</body>
</html>
<script>

$('#submit').click(function(){
    var login = $('#login').val();
    var senha = $('#senha').val();

    $.ajax({
        url: '../server/appTeste.php?login='+login+'&senha='+senha,
        method: 'GET'
    })
    .done(function(res) {
        $('#resposta').html(res);
  });
})

</script>