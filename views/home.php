
<section class="home-container container">
<h1>Exercise Difficulty Chart</h1>
<div class="canvas">
    <canvas id="difficultyChart" ></canvas>
    
</div>

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

const labels = <?php echo json_encode($labels); ?>;
const data = <?php echo json_encode($data); ?>;

document.addEventListener("DOMContentLoaded", function() {
    const ctx = document.getElementById('difficultyChart').getContext('2d');
    const difficultyChart = new Chart(ctx, {
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
<div class="home-description">
<p>
    Deze grafiek geeft een overzicht van het aantal oefeningen, gesorteerd op moeilijkheidsgraad: Easy, Medium, en Hard. 
    Elke moeilijkheidsgraad vertegenwoordigt een specifieke groep oefeningen, ingedeeld op basis van de intensiteit en technische uitdaging.
</p>
<ol>
    <li>
        <strong>Easy</strong> : Deze categorie bevat de eenvoudigste oefeningen, geschikt voor beginners of voor degenen die op zoek zijn naar een lichte inspanning.
         Het aantal oefeningen in deze sectie is relatief hoog, wat wijst op een breed aanbod aan laagdrempelige activiteiten.
    </li>
    <li>
        <strong>Medium</strong> : De oefeningen met een gemiddelde moeilijkheidsgraad vallen onder de Medium-categorie. 
        Deze oefeningen vereisen vaak iets meer conditie, kracht en coördinatie en zijn bedoeld voor personen met enige ervaring.
         De hoeveelheid oefeningen in deze categorie bevindt zich meestal tussen die van Easy en Hard, wat het gemiddelde niveau vertegenwoordigt.
    </li>
    <li>
        <strong>Hard</strong> : De Hard-categorie omvat de meest uitdagende oefeningen, ontworpen voor gevorderde gebruikers die klaar zijn voor een intensieve workout. 
        Deze oefeningen vereisen een hoger niveau van fitheid en vaardigheid. 
        Het aantal oefeningen in deze sectie is vaak het laagst, aangezien deze categorie zich richt op een specifieke, meer ervaren doelgroep.
    </li>
</ol>
<p>
    Met deze indeling in de grafiek kun je snel een overzicht krijgen van het aantal oefeningen per moeilijkheidsgraad, 
    wat helpt bij het kiezen van een training op het gewenste niveau.
</p>
</div>

<div class="canvas">
    <canvas id="genderChart"></canvas>
  </div>
<?php
$genderLabels = [];
$genderDataPoints = [];


foreach ($genderData as $item) {
    $genderLabels[] = $item->gender;
    $genderDataPoints[] = $item->genders_count;
}
?>

<script>
// Convert PHP arrays to JavaScript

const genderLabels = <?php echo json_encode($genderLabels); ?>;
const genderDataPoints = <?php echo json_encode($genderDataPoints); ?>;

document.addEventListener("DOMContentLoaded", function() {
    const ctxGender = document.getElementById('genderChart').getContext('2d');
    const genderChart = new Chart(ctxGender, {
        type: 'pie',
        data: {
            labels: genderLabels, // Gender categories
            datasets: [{
                label: 'Number of Genders',
                data: genderDataPoints, // Number of genders per category
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
                        text: 'Gender Count'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Gender'
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

<?php
$genderlabels = [];
$genders = [];


foreach ($genderData as $item) {
    $genderlabels[] = $item->gender;
    $genders[] = $item->genders_count;
}
?>

<script>
// Convert PHP arrays to JavaScript

const genderlabels = <?php echo json_encode($genderlabels); ?>;
const genders = <?php echo json_encode($genders); ?>;

document.addEventListener("DOMContentLoaded", function() {
    const ctx = document.getElementById('difficultyChart').getContext('2d');
    const difficultyChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels, // Difficulty levels
            datasets: [{
                label: 'Number of Exercises',
                data: data, // Number of exercises per difficulty
                backgroundColor: ['#D9534F', '#F7B733'], // Colors for each bar
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
</section>

