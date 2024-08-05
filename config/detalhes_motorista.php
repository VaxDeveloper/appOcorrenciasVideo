<?php
// Importa as configurações do banco de dados
require_once 'database.php';

// Criar conexão
$conexao = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

// Verificar conexão
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}

if (isset($_GET['motorista'])) {
    $motorista = mysqli_real_escape_string($conexao, $_GET['motorista']);
    
    // Buscar detalhes do motorista
    $query_ocorrencia = "SELECT * FROM ocorrencia_trafego WHERE motorista = '$motorista' AND ocorrencia = 'Evasão'";
    $resultado_ocorrencia = mysqli_query($conexao, $query_ocorrencia);

    if (mysqli_num_rows($resultado_ocorrencia) > 0) {
        $total_ocorrencias = mysqli_num_rows($resultado_ocorrencia);
        $valor_a_pagar = $total_ocorrencias * 4.80;

        // Coletar as datas das ocorrências e contá-las
        $ocorrencias_por_data = [];
        while($row = mysqli_fetch_assoc($resultado_ocorrencia)) {
            $data = $row['data'];
            if (isset($ocorrencias_por_data[$data])) {
                $ocorrencias_por_data[$data]++;
            } else {
                $ocorrencias_por_data[$data] = 1;
            }
        }
        $datas_ocorrencias_str = '';
        foreach ($ocorrencias_por_data as $data => $quantidade) {
            $datas_ocorrencias_str .= $data . ', ';
        }
        $datas_ocorrencias_str = rtrim($datas_ocorrencias_str, ', ');

        // Buscar nome do motorista
        $query_motorista = "SELECT nome FROM cadastro_motorista WHERE matricula = '$motorista'";
        $resultado_motorista = mysqli_query($conexao, $query_motorista);
        $nome_motorista = '';
        if (mysqli_num_rows($resultado_motorista) > 0) {
            $row_motorista = mysqli_fetch_assoc($resultado_motorista);
            $nome_motorista = $row_motorista['nome'];
        }
        
        echo "<h5>Detalhes do motorista: " . htmlspecialchars($nome_motorista) . "</h5>";
        echo "<div class='table-responsive'>";
        echo "<table class='table table-striped table-hover table-sm'>
                <tr>
                    <th class='text-center'>OS</th>
                    <th class='text-center'>Data</th>
                    <th class='text-center'>Motorista</th>
                    <th>Descrição</th>
                    <th class='text-center'>Vídeos</th>
                </tr>";
        mysqli_data_seek($resultado_ocorrencia, 0);  // Resetar o ponteiro do resultado
        while($row = mysqli_fetch_assoc($resultado_ocorrencia)) {
            echo "<tr>
                    <td class='text-center'>" . htmlspecialchars($row['id']) . "</td>
                    <td class='text-center'>" . htmlspecialchars($row['data']) . "</td>
                    <td class='text-center'>" . htmlspecialchars($row['motorista']) . "</td>
                    <td class='break-word'>" . htmlspecialchars($row['descricao']) . "</td>
                    <td>";
            if ($row['video1']) {
                echo "<a href='../views/VisualizaVideo.php?video1=" . urlencode($row['id']) . "'>Vídeo-1</a><br>";
            }
            if ($row['video2']) {
                echo "<a href='../views/VisualizaVideo.php?video2=" . urlencode($row['id']) . "'>Vídeo-2</a><br>";
            }
            if ($row['video3']) {
                echo "<a href='../views/VisualizaVideo.php?video3=" . urlencode($row['id']) . "'>Vídeo-3</a><br>";
            }
            echo "</td>
                  </tr>";
        }
        echo "</table>";
        echo "</div>";

        // Exibir o valor a pagar e o link para imprimir o termo
        echo "<div class='imprimir_termo'><p><strong>Total a pagar: R$ " . number_format($valor_a_pagar, 2, ',', '.') . "</strong> <a href='#' id='imprimir_termo_link' data-motorista='$motorista' data-valor='" . urlencode($valor_a_pagar) . "' data-datas='" . urlencode($datas_ocorrencias_str) . "'>Imprimir Termo</a></div></p>";
    } else {
        echo "Nenhuma ocorrência de evasão encontrada para o motorista: " . htmlspecialchars($motorista);
    }
} else {
    echo "Motorista não especificado.";
}

mysqli_close($conexao);
?>
<script>
document.getElementById('imprimir_termo_link').addEventListener('click', function(e) {
    e.preventDefault();
    var motorista = this.getAttribute('data-motorista');
    var valor = this.getAttribute('data-valor');
    var datas = this.getAttribute('data-datas');

    var popupWindow = window.open(`../config/imprimir_termo.php?motorista=${encodeURIComponent(motorista)}&valor=${encodeURIComponent(valor)}&datas=${encodeURIComponent(datas)}`, 'popupWindow', 'width=800,height=600');
    popupWindow.onload = function() {
        popupWindow.print();
    };
});
</script>