<?php
//appels des fonctions
require_once "lib/utiles.php";
$donnee = getCsvData("data/ressources.csv");
$section = getInfo($donnee);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Boutique - Grenoble RentCar</title>
    <link href="Style/bootstrap-grid.css" rel="stylesheet"/>
    <link href="Style/style.css" rel="stylesheet"/>
    <link href="Style/boutique.css" rel="stylesheet"/>
    <link href="Style/header.css" rel="stylesheet"/>
    <link href="Style/footer.css" rel="stylesheet"/>
</head>
<body>
<header class="entete">
    <?php include $_SERVER['DOCUMENT_ROOT']."/"."inlcudes/head.inc.php";?>
</header>
<main>
    <div class="container shop">
        <div class="row gx-0 gy-3 mb-4">
            <?php foreach ($section as $contenu) {?>
                <?php echo"$contenu"?>
            <?php } ?>

        </div>
    </div>
</main>
<footer>
    <?php include $_SERVER['DOCUMENT_ROOT']."/"."inlcudes/footer.inc.php";?>
</footer>
</body>
</html>