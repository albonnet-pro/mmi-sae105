<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Panier - Grenoble RentCar</title>
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
    <div class="container">
        <article class="row">
            <header class="col-12">
                <h1 id="contact">Votre panier</h1>
                <p>Préparez la carte bleue, ça va chauffer sec !!!</p>
            </header>
            <div class="col-4"></div>
            <table class="paniercontenu col-4">
                <thead>
                <tr>
                    <th class="colg">Articles</th>
                    <th>Quantité</th>
                    <th class="cold">Prix à l'unité</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="colg">Ferrari 458 Speciale</td>
                    <td>3</td>
                    <td class="cold">235 800 €</td>
                </tr>
                <tr>
                    <td class="colg">Porsche 911 Turbo S</td>
                    <td>1</td>
                    <td class="cold">250 260 €</td>
                </tr>
                <tr>
                    <td class="colg">Lamborghini Aventador</td>
                    <td>5</td>
                    <td class="cold">400 000 €</td>
                </tr>
                </tbody>
                <tfoot>
                <tr class="total ">
                    <td class="casetotal" colspan="2">
                        TOTAL
                    </td>
                    <td class="casetotal">
                        2 957 660 €
                    </td>
                </tr>
                </tfoot>
            </table>
            <div class="col-4"></div>
        </article>
    </div>
    <div class="row">
        <div class="col-4"></div>
        <div class="boutonpaiement col-4">
            <input class="paiement" type="button" value="Procéder au paiement">
        </div>
        <div class="col-4"></div>
    </div>
</main>
<footer>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/" . "sae105/inlcudes/footer.inc.php"; ?>
</footer>
</body>
</html>