<?php

$nome = $_REQUEST['nome'];
$peso = $_REQUEST['peso'];
$altura = (float)str_replace(",", ".", $_REQUEST['altura']);
$sexo = $_REQUEST['sexo'];

 
// Calculo do IMC
$imc = $peso / (pow($altura, 2));
//Por padrão já começa com uma mensagem de erro
$resultado = false;
$mensagem = "Não foi possível calcular seu resultado! Tente novamente!";

switch ($sexo) {
    case 'F':
        if ($imc < 19) {
            $resultado = "Abaixo do normal";
        } elseif ($imc >= 19 and $imc <= 23.9) {
            $resultado = "Normal";
        } elseif ($imc >= 24 and $imc <= 28.9) {
            $resultado = "Obesidade Leve";
        } elseif ($imc >= 29 and $imc <= 38.9) {
            $resultado = "Obesidade Moderada";
        } elseif ($imc >= 30) {
            $resultado = "Obesidade Mórbida";
        }
        break;
    case 'M':
        if ($imc < 20) {
            $resultado = "Abaixo do normal";
        } elseif ($imc >= 20 and $imc <= 24.9) {
            $resultado = "Normal";
        } elseif ($imc >= 25 and $imc <= 29.9) {
            $resultado = "Obesidade Leve";
        } elseif ($imc >= 30 and $imc <= 39.9) {
            $resultado = "Obesidade Moderada";
        } elseif ($imc >= 40) {
            $resultado = "Obesidade Mórbida";
        }
        break;
}

if ($resultado != false) {
    $mensagem = "$nome, seu IMC é " . round($imc, 2) . ", e sua classificação é: $resultado";

    $array = array(
        "nome" => $nome,
        "imc" => round($imc, 2),
        "resultado" => $resultado,
        "mensagem" => $mensagem
    );
    $json = json_encode($array);

    echo $json;
}





?>