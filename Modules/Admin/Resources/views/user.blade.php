<canvas id="userChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
<script>
    //user
    new Chart(document.getElementById("userChart"), {
        type: 'line',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June',
                'July', 'August', 'September', 'October', 'November', 'December'
            ],
            datasets: [{
                data: <?php echo json_encode($user_fi); ?>,
                label: "user",
                borderColor: "#3e95cd",
                fill: false
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