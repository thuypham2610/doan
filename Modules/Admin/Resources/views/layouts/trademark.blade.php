
    <canvas id="tradeChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
<script>
    //trade
    new Chart(document.getElementById("tradeChart"), {
        type: 'horizontalBar',
        data: {
            labels: <?php echo json_encode($nametrade) ?>,
            datasets: [{
                label: "Population (millions)",
                backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                data: <?php echo json_encode($tradedata) ?>,
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: 'Predicted world population (millions) in 2050'
            }
        }
    });
</script>
