<?php
session_start();

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Formulário PHP</title>
</head>

<body>

    <div class="principal">
        <div class="form">
            <form action="action.php" method="POST">
                <fieldset>
                    <legend>Formulário de Cadastro</legend>
                    <label for="nome">Nome:</label>
                    <input id="nome" type="text" name="data[pessoa][nome]" placeholder="digite seu nome"></input>
                    <label for="idade">Idade:</label>
                    <input id="idade" type="number" name="data[pessoa][idade]" placeholder="digite sua idade" ></input>
                    <label for="senha">Senha:</label>
                    <input id="senha" type="password" name="data[pessoa][senha]" placeholder="digite sua senha"></input>
                    <label for="dataNascimento">Data de Nascimento:</label>
                    <input id="dataNascimento" type="date" name="data[pessoa][dataNascimento]" placeholder="digite sua data de nascimento"></input>
                    <label for="cep">CEP:</label>
                    <input id="cep" type="number" name="data[pessoa][cep]" placeholder="digite seu cep"></input>
                    <input type="submit" value="Cadastrar" id="btn-cadastro">
                </fieldset>
            </form>
        </div>
    </div>
    
</body>

</html>