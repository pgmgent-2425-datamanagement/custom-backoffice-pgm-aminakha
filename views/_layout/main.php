<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= ($title ?? '') . ' ' . $_ENV['SITE_NAME'] ?></title>
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/main.css?v=<?php if( $_ENV['DEV_MODE'] == "true" ) { echo time(); }; ?>">
     <link rel="stylesheet" href="/css/header.css">
     <link rel="stylesheet" href="/css/footer.css">
     <link rel="stylesheet" href="/css/form.css">
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body>
    
    <section class="main-container">
  <?php include "../views/partials/header.php"?>
    <main>
        <?= $content; ?>
    </main>
    


    </section>
  <?php include "../views/partials/footer.php"?>

    
    
</body>
</html>