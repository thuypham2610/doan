<canvas id="orderChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
<script>
    //order
    new Chart(document.getElementById("orderChart"), {
        type: 'bar',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June',
                'July', 'August', 'September', 'October', 'November', 'December'
            ],
            datasets: [{
                label: "Population (millions)",
                backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                data: <?php echo json_encode($fini); ?>
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