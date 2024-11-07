<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<h1>Exercise Difficulty Chart</h1>
<canvas id="difficultyChart" width="400" height="200"></canvas>
<?php
$labels = [];
$data = [];

foreach ($difficultyData as $item) {
    $labels[] = $item->difficulty;
    $data[] = $item->exercise_count;
}
?>

<script>
// Convert PHP arrays to JavaScript
var labels = <?php echo json_encode($labels); ?>;
var data = <?php echo json_encode($data); ?>;

document.addEventListener("DOMContentLoaded", function() {
    var ctx = document.getElementById('difficultyChart').getContext('2d');
    var difficultyChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels, // Difficulty levels
            datasets: [{
                label: 'Number of Exercises',
                data: data, // Number of exercises per difficulty
                backgroundColor: ['#D9534F', '#F7B733', '#76C7C0'], // Colors for each bar
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Exercise Count'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Difficulty Level'
                    }
                }
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'top'
                }
            }
        }
    });
});
</script>

</body>
</html>
