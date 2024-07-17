document.addEventListener('DOMContentLoaded', function() {
    fetch('get_ocorrencias.php')
        .then(response => response.json())
        .then(data => {
            console.log(data); // Adicione esta linha para depurar os dados recebidos
            const labels = data.map(item => item.ocorrencia);
            const quantities = data.map(item => item.quantidade);

            const ctx = document.getElementById('ocorrenciasChart').getContext('2d');
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
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        })
        .catch(error => console.error('Erro ao buscar dados:', error));
});