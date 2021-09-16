<?php
session_start();

$arrayDados['nome'] = $_POST['data']['pessoa']['nome'];
$arrayDados['idade'] = $_POST['data']['pessoa']['idade'];
$arrayDados['senha'] = $_POST['data']['pessoa']['senha'];
$arrayDados['dataNascimento'] = $_POST['data']['pessoa']['dataNascimento'];
$arrayDados['cep'] = $_POST['data']['pessoa']['cep'];

$_SESSION['matriz'][] = $arrayDados;
// unset($_SESSION['matriz']);
?>

</pre>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Resultados do Envio</title>
</head>
<body>

<table border="1" id="corpo-tabela">

<thead>
    <tr>
        <th>Nome</th>
        <th>Idade</th>
        <th>Senha</th>
        <th>Data de Nascimento</th>
        <th>CEP</th>
    </tr>
</thead>
<tbody >
<?php
     foreach ($_SESSION['matriz'] as $value)
     {
        echo "<tr>";
         foreach($value as $val)
         {
            echo "<td>"; 
                 echo $val;
            echo "</td>";
        } 
    echo "</tr>";
     }
    ?>
</tbody>

</table>


    
</body>
</html>

