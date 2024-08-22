<?php
// Incluir o arquivo de conexão com o banco de dados
include 'database.php'; // Ajuste o caminho conforme necessário

// Verificar se o parâmetro motorista_id foi fornecido
if (isset($_GET['motorista_id'])) {
    $motorista_id = mysqli_real_escape_string($conexao, $_GET['motorista_id']);
    echo "Valor do ID do Motorista: " . htmlspecialchars($motorista_id) . "<br>";
} else {
    die("ID do motorista não fornecido.");
}

// Verificar conexão com o banco de dados
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Consulta para obter a matrícula do motorista baseado no ID
$query_matricula = "SELECT matricula FROM cadastro_motorista WHERE id = '$motorista_id'";
$resultado_matricula = mysqli_query($conexao, $query_matricula);

// Verificar o erro da consulta
if (!$resultado_matricula) {
    die("Erro na consulta do motorista: " . mysqli_error($conexao));
}

// Verificar se algum resultado foi retornado
if (mysqli_num_rows($resultado_matricula) > 0) {
    $row_matricula = mysqli_fetch_assoc($resultado_matricula);
    $matricula = $row_matricula['matricula'];

    // Consulta para obter o nome do motorista baseado na matrícula
    $query_motorista = "SELECT nome FROM cadastro_motorista WHERE matricula = '$matricula'";
    $resultado_motorista = mysqli_query($conexao, $query_motorista);

    // Verificar o erro da consulta
    if (!$resultado_motorista) {
        die("Erro na consulta do motorista: " . mysqli_error($conexao));
    }

    // Verificar se algum resultado foi retornado
    if (mysqli_num_rows($resultado_motorista) > 0) {
        $row_motorista = mysqli_fetch_assoc($resultado_motorista);
        $nome_motorista = $row_motorista['nome'];
    } else {
        $nome_motorista = 'Nome não encontrado.';
    }
} else {
    $nome_motorista = 'Nome não encontrado.';
}

// Aqui você deve definir a lógica para determinar a ação disciplinar
// Supondo que a ação disciplinar seja 'Orientação' e a data de hoje
$acao_disciplinar = 'Orientação'; // Substitua com a lógica real
$data_acao = date('Y-m-d'); // Data atual

// Fechar a conexão com o banco de dados
mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir Ação Disciplinar</title>
    <style>
        /* Adicione estilos conforme necessário */
    </style>
</head>
<body onload="window.print();">

<div class="container">
    <h1>Ação Disciplinar</h1>
    
    <p><strong>Nome do Motorista:</strong> <?php echo htmlspecialchars($nome_motorista); ?></p>
    <p><strong>Matrícula:</strong> <?php echo htmlspecialchars($matricula); ?></p>
    <p><strong>Ação Disciplinar:</strong> <?php echo htmlspecialchars($acao_disciplinar); ?></p>
    <p><strong>Data da Ação:</strong> <?php echo htmlspecialchars($data_acao); ?></p>
    
    <!-- Adicione mais informações se necessário -->
</div>

</body>
</html>