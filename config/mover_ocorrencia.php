<?php
// Importa as configurações do banco de dados
require_once 'database.php';

// Criar conexão
$conexao = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

// Verificar conexão
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Verifica se o ID da ocorrência foi passado na URL
if (isset($_GET['id'])) {
    $id_ocorrencia = intval($_GET['id']); // Certifique-se de converter o valor para um inteiro

    // Move a ocorrência para a tabela finalizada
    $query_move_ocorrencia = "INSERT INTO ocorrencia_finalizada SELECT * FROM ocorrencia_trafego WHERE id = ?";
    $stmt_move = mysqli_prepare($conexao, $query_move_ocorrencia);
    mysqli_stmt_bind_param($stmt_move, 'i', $id_ocorrencia);
    $resultado_move = mysqli_stmt_execute($stmt_move);

    if ($resultado_move) {
        // Remove a ocorrência da tabela original
        $query_excluir_ocorrencia = "DELETE FROM ocorrencia_trafego WHERE id = ?";
        $stmt_excluir = mysqli_prepare($conexao, $query_excluir_ocorrencia);
        mysqli_stmt_bind_param($stmt_excluir, 'i', $id_ocorrencia);
        $resultado_excluir = mysqli_stmt_execute($stmt_excluir);

        if ($resultado_excluir) {
            echo "Ocorrência finalizada com sucesso!";
        } else {
            echo "Erro ao excluir ocorrência da tabela original: " . mysqli_error($conexao);
        }
    } else {
        echo "Erro ao mover ocorrência para outra tabela: " . mysqli_error($conexao);
    }
} else {
    echo "ID da ocorrência não especificado.";
}

mysqli_close($conexao);
?>