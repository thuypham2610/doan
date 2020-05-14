<canvas id="cateChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
<script>
    //cate
    new Chart(document.getElementById("cateChart"), {
        type: 'doughnut',
        data: {
            labels: <?php echo json_encode($namecate) ?>,
            datasets: [{
                label: "Population (millions)",
                backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                data: <?php echo json_encode($catedata) ?>
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Predicted world population (millions) in 2050'
            }
        }
    });
</script>