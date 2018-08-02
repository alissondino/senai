<?php

// Exemplo de criação de array
$listaAlunos = array(
    "Alisson",
    "Antonio",
    "Bernardo"
);
//Outro exemplo de criação de array
$alunos = array(
    0 => "Ana",
    1 => "Bruno",
    2 => "Carla",
    3 => "Davi",
    4 => "Eduarda",
    5 => "Fabiano",
    6 => "Guilherme",
    7 => "Helen",
    8 => "Isaac",
    9 => "Juliane",
    10 => "Lais"
);

// Criação de array dentro de array
$lista_alunos = array();


array_push($lista_alunos, array(
    'nome' => 'Alisson',
    'matricula' => 1234,
    'data_nascimento' => '1999-03-30',
    'telefone' => 988556688
));

array_push($lista_alunos, array(
    'nome' => 'Carlos',
    'matricula' => 4321,
    'data_nascimento' => '1999-05-06',
    'telefone' => 988556688
));


array_push($lista_alunos, array(
    'nome' => 'Joana',
    'matricula' => 4321,
    'data_nascimento' => '1999-05-06',
    'telefone' => 988556688
));

array_push($lista_alunos, array(
    'nome' => 'Joana',
    'matricula' => 4321,
    'data_nascimento' => '1999-05-06',
    'telefone' => 988556688
));







// Exemplo de impressão de array
// print_r($listaAlunos);
// Outro exemplo semelhante de impressão de array
// var_dump($listaAlunos);
// Exemplo de impressão no formato Json
// $bonito = json_encode($listaAlunos);
// echo $bonito;
// Impressão em lista usando HTML
$lista = "<ul>";

foreach ($lista_alunos as $chave => $informacoes) {
    $lista .= "<li>Nome: {$informacoes["nome"]} | Matricula: {$informacoes["matricula"]} </li>";
}
$lista .= "</ul><hr>";




// LOGICA DE BUSCA DE UM NOME DENTRO DE UM ARRAY DE ARRAYS
// Implementando busca
$busca = "Joanas";
$resultado;

foreach ($lista_alunos as $chave => $info) {
    if ($busca == $info["nome"]) {
        $resultado = "$busca está dentro do Array";
        break;
    } else {
        $resultado = "$busca não está dentro do Array";

    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primeira Aula de PHP</title>
</head>
<body>
    <?php

        echo "O programa buscou nos arrays o seguinte nome: $busca";
        echo "<br>";        
        echo $resultado;
        echo "<br><hr><br>"
    ?>

    <?php
    echo $lista;
    echo "<br><hr><br>"
    ?>
    
</body>
</html>
