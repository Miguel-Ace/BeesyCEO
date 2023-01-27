
<canvas id="myChart"></canvas>
<canvas id="myChart2"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
        const cData = JSON.parse(`<?php echo $data1; ?>`);
        const cData2 = JSON.parse(`<?php echo $data2; ?>`);
        // console.log(cData);

        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
        type: 'pie',
        data: {
            labels: cData.label,
            datasets: [{
            label: '# of Votes',
            data: cData.data,
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

        const ctx2 = document.getElementById('myChart2');

        // DOS
        new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: cData2.label,
            datasets: [{
            label: '# of Votes',
            data: cData2.data,
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
    </script>
