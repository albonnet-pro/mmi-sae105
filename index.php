<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil - Grenoble RentCar</title>
    <link href="Style/bootstrap-grid.css" rel="stylesheet"/>
    <link href="Style/style.css" rel="stylesheet"/>
    <link href="Style/header.css" rel="stylesheet"/>
    <link href="Style/footer.css" rel="stylesheet"/>
</head>
<body>
<header class="entete">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/" . "sae105/inlcudes/head.inc.php"; ?>
</header>
<main>
    <article>
        <header>
            <h1 class="titreindex">Bienvenue chez Grenoble RentCar</h1>
            <h2 class="p2index">
                Retrouvez les modèles de vos voitures de sport préférées dans la boutique
            </h2>
            <a href="shop.php"><input class="accesboutique" type="button" value="Accéder à la boutique"></a>
        </header>
        <p class="p3index">Vous pourrez retrouvez les trois marques suivantes</p>

        <div class="container">
            <div class="row">
                <div class="col-4 boutonferrari">
                    <a href="shop.php"><img class="boutonlogo" src="images/logo_ferrari.png"></a>
                </div>
                <div class="col-4 boutonlambo">
                    <a href="shop.php"><img class="boutonlogo" src="images/logo_lambo.png"></a>
                </div>
                <div class="col-4">
                    <a href="shop.php"><img class="boutonlogo" src="images/logo_porsche.png"></a>
                </div>
            </div>
        </div>
    </article>
</main>
<footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/" . "sae105/inlcudes/footer.inc.php"; ?>
</footer>
</body>
</html>