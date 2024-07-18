document.addEventListener('DOMContentLoaded', function() {
    // Fetch para obter as ocorrências para o gráfico
    fetch('get_ocorrencias.php')
        .then(response => response.json())
        .then(data => {
            console.log(data); // Adicione esta linha para depurar os dados recebidos
            const labels = data.map(item => item.ocorrencia);
            const quantities = data.map(item => item.quantidade);

            const ctx = document.getElementById('ocorrenciasChart').getContext('2d');
            if (ctx) {
                const ocorrenciasChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Ocorrências',
                            data: quantities,
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        plugins: {
                            legend: {
                                display: false
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            } else {
                console.error('Elemento com id "ocorrenciasChart" não encontrado.');
            }
        })
        .catch(error => console.error('Erro ao buscar dados:', error));

    // Fetch para obter a contagem total de ocorrências
    fetch('get_total_ocorrencias.php')
        .then(response => response.json())
        .then(data => {
            console.log(data); // Adicione esta linha para depurar os dados recebidos
            const totalOcorrencias = data.total_ocorrencias;

            // Atualize o DOM ou use o valor conforme necessário
            console.log('Total de Ocorrências:', totalOcorrencias);

            // Exemplo de como atualizar um elemento no DOM com o total de ocorrências
            const ocorrenciasElement = document.getElementById('totalOcorrencias');
            if (ocorrenciasElement) {
                ocorrenciasElement.textContent = `${totalOcorrencias}`;
            } else {
                console.error('Elemento com id "totalOcorrencias" não encontrado.');
            }
        })
        .catch(error => console.error('Erro ao buscar dados:', error));

    // Fetch para obter a contagem total de ocorrências sem tratativas
    fetch('get_total_ocorrenciasSemTratar.php')
        .then(response => response.json())
        .then(data => {
            console.log(data); // Adicione esta linha para depurar os dados recebidos
            const totalOcorrencias = data.total_ocorrencias;

            // Atualize o DOM ou use o valor conforme necessário
            console.log('Total de Ocorrências:', totalOcorrencias);

            // Exemplo de como atualizar um elemento no DOM com o total de ocorrências
            const ocorrenciasElement = document.getElementById('totalOcorrenciasSemTratar');
            if (ocorrenciasElement) {
                ocorrenciasElement.textContent = `${totalOcorrencias}`;
            } else {
                console.error('Elemento com id "totalOcorrenciasSemTratar" não encontrado.');
            }
        })
        .catch(error => console.error('Erro ao buscar dados:', error));
});