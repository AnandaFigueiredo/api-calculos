<?php
// Definir o tipo de conteúdo como JSON
header('Content-Type: application/json');

// Funções da API

// Soma de dois números
function soma($a, $b) {
    return $a + $b;
}

// Subtração de dois números
function subtracao($a, $b) {
    return $a - $b;
}

// Multiplicação de dois números
function multiplicacao($a, $b) {
    return $a * $b;
}

// Divisão de dois números
function divisao($a, $b) {
    if($b == 0) {
        return "Erro: Divisão por zero!";
    }
    return $a / $b;
}

// Roteamento da API baseado nos parâmetros da URL
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $method = $_GET['method'] ?? '';
    $a = $_GET['a'] ?? 0;
    $b = $_GET['b'] ?? 0;
    
    $result = '';
    
    switch($method) {
        case 'soma':
            $result = soma($a, $b);
            break;
        case 'subtracao':
            $result = subtracao($a, $b);
            break;
        case 'multiplicacao':
            $result = multiplicacao($a, $b);
            break;
        case 'divisao':
            $result = divisao($a, $b);
            break;
        default:
            $result = "Método não encontrado!";
    }
    
    echo json_encode(['result' => $result]);
}
?>
