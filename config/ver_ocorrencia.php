                <?php
                    // Verifica se o ID da ocorrência foi passado na URL
                    if (isset($_GET['id'])) {
                        $id_ocorrencia = $_GET['id'];

                        // Importa as configurações do banco de dados
                        require_once 'database.php';

                        // Prepara e executa a consulta para obter os detalhes da ocorrência com base no ID
                        $consulta_sql = "SELECT * FROM u219851065_smiguel.ocorrencia_trafego WHERE id = $id_ocorrencia";
                        $resultado_consulta = mysqli_query($conexao, $consulta_sql);

                        // Verifica se a consulta retornou resultados
                        if ($resultado_consulta && mysqli_num_rows($resultado_consulta) > 0) {
                            // Recupera os detalhes da ocorrência
                            $detalhes_ocorrencia = mysqli_fetch_assoc($resultado_consulta);
                            // Aqui você pode exibir os detalhes da ocorrência dentro de uma caixa de texto
                            echo "<div class='container detalhes-ocorrencia'>";
                            echo "<div class='row my-4' style='color: #adb5bd;'>";
                            echo "<div class='col-4 detalhes-info-1' style='border-right: solid 1px #6c757d;'>";
                            echo "<p><strong>ID Ocorrência:</strong> " . $detalhes_ocorrencia['id'] . "</p>";
                            echo "<p><strong>Data:</strong> " . $detalhes_ocorrencia['data'] . "</p>";
                            echo "<p><strong>Horário:</strong> " . $detalhes_ocorrencia['horario'] . "</p>";
                            echo "<p><strong>Fiscal:</strong> " . $detalhes_ocorrencia['fiscal'] . "</p>";

                            // Constrói o caminho do arquivo de vídeo
                            $caminho_arquivo = "../bkp/_saomigueldeilheus/videos/{$detalhes_ocorrencia['video1']}";
                            $caminho_arquivo = "../bkp/_saomigueldeilheus/videos/{$detalhes_ocorrencia['video2']}";
                            $caminho_arquivo = "../bkp/_saomigueldeilheus/videos/{$detalhes_ocorrencia['video3']}";

                            echo "<div class='d-flex'>";
                            echo "<p><strong>Link:</strong></p>";
                            // Adiciona um link para download do vídeo
                            echo "<a class='mt-1 mx-2 link-danger' href='VisualizaVideo.php?video1={$detalhes_ocorrencia['id']}'>Vídeo-1</a>";
                            echo "<a class='mt-1 mx-2 link-danger' href='VisualizaVideo.php?video2={$detalhes_ocorrencia['id']}'>Vídeo-2</a>";
                            echo "<a class='mt-1 mx-2 link-danger' href='VisualizaVideo.php?video3={$detalhes_ocorrencia['id']}'>Vídeo-3</a>";
                            echo "</div>";
                            echo "</div>";
                            echo "<div class='col-8 detalhes-info-2'>";
                            echo "<p><strong>Linha:</strong> " . $detalhes_ocorrencia['linha'] . "</p>";
                            echo "<p><strong>Carro:</strong> " . $detalhes_ocorrencia['carro'] . "</p>";
                            echo "<p><strong>Motorista:</strong> " . $detalhes_ocorrencia['motorista'] . "</p>";
                            echo "<p><strong>Ocorrência:</strong> " . $detalhes_ocorrencia['ocorrencia'] . "</p>";
                            echo "<p class='text-wrap w-100'><strong>Descrição:</strong> " . $detalhes_ocorrencia['descricao'] . "</p>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";

                            // Adiciona uma linha separadora
                            echo "<div style='border-top: 1px solid #6c757d;'></div>";
                            
                            // Adicionar um formulário para enviar as informações do motorista, ação e observações
                            echo "<div class='container p-3'>";
                            echo "<form action='atualiza.php' method='post'>";
                            
                            // Continuação do formulário...

                            
                            // Div para o campo de seleção de motorista
                            echo "<div class='row my-4'>";
                            echo "<div class='col-6 select-group'>";
                            echo "<p for='motorista'></p>";
                            echo "<select class='form-select' name='motorista' id='motorista'>";
                            echo "<option value=''>Informe o Motorista</option>";
                            // Exemplo de opções de motoristas
                            echo "<option value='0054'>54 - MILTON DA CONCEICAO MENDES</option>";
                            echo "<option value='0257'>257 - WILTON COSTA DA SILVA</option>";
                            echo "<option value='0341'>341 - WILSON CONCEICAO PEREIRA</option>";
                            echo "<option value='0350'>350 - MARTIAL MENEZES DA ANUNCIACAO</option>";
                            echo "<option value='0366'>366 - JOSE LEANDRO BRITO</option>";
                            echo "<option value='0511'>511 - JOSE DOS SANTOS ANDRADE</option>";
                            echo "<option value='0542'>542 - VALDECK DOS SANTOS CELIS</option>";
                            echo "<option value='0558'>558 - ANTONIO MARCOS SANTOS DE JESUS</option>";
                            echo "<option value='0558'>634 - EROTILDES DA SILVA MIRANDA</option>";
                            echo "<option value='0668'>668 - MARCILIO DE ALMEIDA BARROS</option>";
                            echo "<option value='0670'>670 - ANTONIO CARLOS GOMES DA SILVA</option>";
                            echo "<option value='0691'>691 - GRIMALDO ALVES FAGUNDES</option>";
                            echo "<option value='0691'>691 - GRIMALDO ALVES FAGUNDES</option>";
                            echo "<option value='0730'>730 - MARCELO OTAVIO MAYER PEROTTI</option>";
                            echo "<option value='0779'>779 - JAIRO FREIRE SANTANA</option>";
                            echo "<option value='0783'>783 - GINELVAN SANTOS DE MATOS</option>";
                            echo "<option value='0872'>872 - RAIMUNDO PEREIRA DOS SANTOS</option>";
                            echo "<option value='0931'>931 - JOSE SANTOS DA SILVA</option>";
                            echo "<option value='0945'>945 - ANDREIA FERREIRA MATOS</option>";
                            echo "<option value='0954'>954 - EDUARDO RIBEIRO DOS SANTOS</option>";
                            echo "<option value='1052'>1052 - JOSE CARLOS SANTOS DA SILVA</option>";
                            echo "<option value='1067'>1067 - JOSE DOMINGOS COSTA</option>";
                            echo "<option value='1072'>1072 - JOSE RENATO DE SOUZA SILVA</option>";
                            echo "<option value='1158'>1158 - AURINO OLIVEIRA SANTOS</option>";
                            echo "<option value='1160'>1160 - EDVANDO RAIMUNDO DOS SANTOS</option>";
                            echo "<option value='1165'>1165 - ANTONIO SANTOS DE JESUS</option>";
                            echo "<option value='1169'>1169 - ALDO NASCIMENTO LEITAO</option>";
                            echo "<option value='1211'>1211 - MARCIO SANTOS DE JESUS</option>";
                            echo "<option value='1239'>1239 - ALEX SANDRO RIBEIRO DOS SANTOS</option>";
                            echo "<option value='1267'>1267 - JORGE JOSE LOPES GOES</option>";
                            echo "<option value='1269'>1269 - MOISES COSTA DOS SANTOS</option>";
                            echo "<option value='1270'>1270 - EDUARDO LIMA DOS SANTOS</option>";
                            echo "<option value='1273'>1273 - JOSE NILTON DE JESUS SOUSA</option>";
                            echo "<option value='1286'>1286 - ADAILTON FELIX DOS SANTOS</option>";
                            echo "<option value='1290'>1290 - VALDIR DE SOUZA</option>";
                            echo "<option value='1309'>1309 - ILDEVAN DEMETRIO DOS SANTOS</option>";
                            echo "<option value='1338'>1338 - NILSON LEANDRO BRITO</option>";
                            echo "<option value='1339'>1339 - DAVID DE JESUS SANTIAGO</option>";
                            echo "<option value='1341'>1341 - LUIZ CARLOS DA SILVA SANTO</option>";
                            echo "<option value='1359'>1359 - PEDRO NASCIMENTO DA PAIXAO</option>";
                            echo "<option value='1411'>1411 - JOSE HAMILTON NINCK DOS SANTOS</option>";
                            echo "<option value='1425'>1425 - WALFREDO JOSE DE SANTANA NETO</option>";
                            echo "<option value='1449'>1449 - JANILDO RODRIGUES DA SILVA</option>";
                            echo "<option value='1486'>1486 - JOSIAS DA COSTA SILVA</option>";
                            echo "<option value='1489'>1489 - NADSON SILVA COSTA</option>";
                            echo "<option value='1502'>1502 - EDNALDO SILVA SANTOS</option>";
                            echo "<option value='1508'>1508 - JOSE RAIMUNDO VIANA SANTOS</option>";
                            echo "<option value='1509'>1509 - AGNALDO SOUZA DA COSTA</option>";
                            echo "<option value='1518'>1518 - GIVALDO SANTOS DE MATOS</option>";
                            echo "<option value='1555'>1555 - JOSE MESSIAS SANTOS SOUZA</option>";
                            echo "<option value='1589'>1589 - ENOCK SILVA SOUZA</option>";
                            echo "<option value='1594'>1594 - JOSE DOMINGOS DA PAIXAO NASCIMENTO</option>";
                            echo "<option value='1598'>1598 - IDELMAR SANTOS LIMA</option>";
                            echo "<option value='1604'>1604 - ALEXANDRE PEREIRA DOS SANTOS</option>";
                            echo "<option value='1622'>1622 - DANILO BOMFIM DE OLIVEIRA</option>";
                            echo "<option value='1633'>1633 - JOSE NILTON RIBEIRO ALVES</option>";
                            echo "<option value='1658'>1658 - WALACE ROCHA DOS SANTOS</option>";
                            echo "<option value='1683'>1683 - CARLOS ALBERTO DA HORA SANTOS</option>";
                            echo "<option value='1695'>1695 - AECIO DE ASSUNCAO BOMFIM</option>";
                            echo "<option value='1696'>1696 - JOSE ROBERTO DOS SANTOS VIDAL</option>";
                            echo "<option value='1706'>1706 - JOSEMAR DE OLIVEIRA SANTOS</option>";
                            echo "<option value='1709'>1709 - CRISPINIANO NINCK DOS SANTOS</option>";
                            echo "<option value='1739'>1739 - CLAUDIO SENA DA SILVA</option>";
                            echo "<option value='1741'>1741 - VALDIVINO NASCIMENTO DOS SANTOS</option>";
                            echo "<option value='1788'>1788 - NEILTON FERREIRA DE OLIVEIRA</option>";
                            echo "<option value='1791'>1791 - JOCEMIR REIS SANTOS</option>";
                            echo "<option value='1793'>1793 - ANDERSON BORGES DOS SANTOS</option>";
                            echo "<option value='1808'>1808 - JAIME DE ARAUJO PACHECO</option>";
                            echo "<option value='1810'>1810 - BRUNO LEONARDO DA SILVA INACIO</option>";
                            echo "<option value='1814'>1814 - ALAN SENA SILVA</option>";
                            echo "<option value='1841'>1841 - AILTON ANTONIO DOS SANTOS FILHO</option>";
                            echo "<option value='1876'>1876 - ROBERTO OLIVEIRA SANTOS</option>";
                            echo "<option value='1882'>1882 - RONALDO CONCEICAO DOS SANTOS</option>";
                            echo "<option value='1891'>1891 - JOSE MARCOS NASCIMENTO DE SOUZA</option>";
                            echo "<option value='1894'>1894 - CARLOS EDUARDO SILVA DOS SANTOS</option>";
                            echo "<option value='1913'>1913 - GEDEON BARBOSA DE MELO</option>";
                            echo "<option value='1925'>1925 - ANDERSON FELIPE LONGO SANTOS</option>";
                            echo "<option value='1926'>1926 - FABRICIO LESSA DOS SANTOS</option>";
                            echo "<option value='1955'>1955 - LINDOMAR BISPO DOS SANTOS</option>";
                            echo "<option value='1956'>1956 - ERIVALDO DOS SANTOS DE OLIVEIRA</option>";
                            echo "<option value='1958'>1958 - ELTON ALMEIDA DA SILVA</option>";
                            echo "<option value='1959'>1959 - OSMUNDO PEREIRA SANTOS</option>";
                            echo "<option value='1963'>1963 - JODMARC SILVA DOS SANTOS</option>";
                            echo "<option value='1965'>1965 - ANDRE LOPES SILVA</option>";
                            echo "<option value='1966'>1966 - GILDEVAN SILVA SANTOS</option>";
                            echo "<option value='1967'>1967 - GILMAR DA SILVA PEREIRA</option>";
                            echo "<option value='1968'>1968 - MAICON SILVA SOUZA</option>";
                            echo "<option value='1969'>1969 - JAILTON SILVA LIMA</option>";
                            echo "<option value='1973'>1973 - ANDERSON SANTOS OLIVEIRA</option>";
                            echo "<option value='1974'>1974 - ROGERIO FELIX RIBEIRO</option>";
                            echo "<option value='1975'>1975 - REINALDO DA SILVA SANTOS</option>";
                            echo "<option value='1976'>1976 - LEONARDO SANTOS DE OLIVEIRA</option>";
                            echo "<option value='1980'>1980 - MILKSON ALMEIDA SANTOS</option>";
                            echo "<option value='1981'>1981 - LUCAS DOS SANTOS TEIXEIRA</option>";
                            echo "<option value='1982'>1982 - GILMAR SOUZA TEIXEIRA</option>";
                            echo "<option value='1983'>1983 - JEFFESON CARDOSO DO ROSARIO</option>";
                            echo "<option value='1987'>1987 - COSME DIAS DE OLIVEIRA</option>";
                            echo "<option value='1988'>1988 - LEANDRO CERQUEIRA MEIRELES</option>";
                            echo "<option value='2002'>2002 - LUCIANO VIEIRA COSTA</option>";
                            echo "<option value='2003'>2003 - CLAUDIO SANTOS DA SILVA</option>";
                            echo "<option value='2009'>2009 - IVANILDO RODRIGUES DE JESUS</option>";
                            echo "<option value='2010'>2010 - CARLOS HENRIQUE SILVA SANTOS</option>";
                            echo "<option value='2011'>2011 - WILLIAN SANTOS PORTELA</option>";
                            echo "<option value='2012'>2012 - LEUANDSON PACHECO DOS SANTOS</option>";
                            // Adicione mais opções conforme necessário
                            echo "</select>";
                            
                            // Div para o campo de seleção de ação
                            echo "<p for='acao'></p>";
                            echo "<select class='form-select' name='acao' id='acao'>";
                            echo "<option value=''>Informe a Ação tomada</option>";
                            echo "<option value='Advertência'>Advertência</option>";
                            echo "<option value='Cobrança e Orientação'>Cobrança e Orientação</option>";
                            echo "<option value='Cobrança e Advertência'>Cobrança e Advertência</option>";
                            echo "<option value='Cobrança e Suspenção 1 DIA'>Cobrança e Suspenção 1 DIA</option>";
                            echo "<option value='Cobrança e Suspenção 3 DIA'>Cobrança e Suspenção 3 DIA</option>";
                            echo "<option value='Desconsiderar'>Desconsiderar</option>";
                            echo "<option value='Fazer Reparo'>Fazer Reparo</option>";
                            echo "<option value='Orientação'>Orientação</option>";
                            echo "<option value='Suspenção um dia'>Suspenção um dia</option>";
                            echo "<option value='Suspenção três dias'>Suspenção três dias</option>";
                            // Adicione mais opções conforme necessário
                            echo "</select>";
                            echo "</div>";
                            echo "<div class='col-6 mt-4 Front-desk'>";
                            echo "<p for='acao' style='font-size: .9rem;'>1) Preencha os campos em aberto da ocorrência.</p>";
                            echo "<p for='acao' style='font-size: .9rem;'>2) Clique no botão 'ATRUALIZAR E FINALIZAR' para que os dados sejam registrados e finalizados.</p>";
                            echo "</div>";
                            echo "</div>";
                            
                            // Div para o campo de texto de observações
                            echo "<div class='text-center'>";
                            echo "<p for='observacoes'>Observações:</p>";
                            echo "<div class='row'>";
                            echo "<div class='col-2'>";
                            echo "</div>";
                            echo "<div class='col-8'>";
                            echo "<textarea class='form-control' name='observacoes' id='observacoes' rows='4' cols='50'></textarea>";
                            echo "</div>";
                            echo "<div class='col-2'>";
                            echo "</div>";
                            echo "</div>";
                            
                            // Adicionar um campo oculto para enviar o ID da ocorrência
                            echo "<input type='hidden' name='id_ocorrencia' value='" . $id_ocorrencia . "'>";
                            
                             // Botão de envio do formulário
                            echo "<input class='btn btn-outline-danger mt-3' type='submit' value='>>> ATUALIZAR e FINALIZAR <<<'>";
                            echo "</form>";
                            echo "</div>";
                            
                        } else {
                            // Se não houver resultados para o ID especificado, exiba uma mensagem de erro
                            echo "Ocorrência não encontrada.";
                        }

                        // Fecha a conexão com o banco de dados
                        mysqli_close($conexao);
                    } else {
                        // Se o ID da ocorrência não foi passado na URL, redireciona para a página anterior
                        header("Location: pagina_anterior.php"); // Substitua "pagina_anterior.php" pelo nome da página anterior
                        exit();
                    }
                    ?>
