        <?php
            // Verifica se pelo menos um dos parâmetros (video1, video2, video3) está presente na URL
            if (isset($_GET['video1']) || isset($_GET['video2']) || isset($_GET['video3'])) {
                // Define qual vídeo será exibido
                if (isset($_GET['video1'])) {
                    $video_id = $_GET['video1'];
                    $video_column = 'video1';
                } elseif (isset($_GET['video2'])) {
                    $video_id = $_GET['video2'];
                    $video_column = 'video2';
                } else {
                    $video_id = $_GET['video3'];
                    $video_column = 'video3';
                }

               // Importa as configurações do banco de dados
                require_once 'database.php';

                if (!$conexao) {
                    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
                }

                // Consulta para obter o caminho do vídeo pelo ID
                $consulta_sql = "SELECT $video_column FROM ocorrencia_trafego WHERE id = ?";
                $stmt = mysqli_prepare($conexao, $consulta_sql);

                if ($stmt) {
                    mysqli_stmt_bind_param($stmt, "i", $video_id);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_bind_result($stmt, $video_path);
                    mysqli_stmt_fetch($stmt);
                    mysqli_stmt_close($stmt);

                    if ($video_path) {
                        // Verifica se o arquivo existe antes de exibir
                        if (file_exists($video_path)) {
                            // Exibe o vídeo
                            echo '<video width="600" controls>
                                    <source src="' . htmlspecialchars($video_path) . '" type="video/mp4">
                                    Seu navegador não suporta o elemento de vídeo.
                                  </video>';
                        } else {
                            echo "Arquivo não encontrado";
                        }
                    } else {
                        echo "Vídeo não encontrado";
                    }
                } else {
                    echo "Erro na preparação da consulta: " . mysqli_error($conexao);
                }

                mysqli_close($conexao);
            } else {
                echo "Nenhum vídeo especificado.";
            }
        ?>