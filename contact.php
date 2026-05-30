<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact - Grenoble RentCar</title>
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
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h1 class="titrecontact">Formulaire de contact</h1>
                </div>
                <div class="col-4">
                </div>
                <div class="col-4 colform">
                    <form method="GET" action="testformulaire.php">
                        <fieldset class="formulaire">
                            <div class="row">
                                <div class="col-6">
                                    <p>
                                        <label for="prenom" class="required">Prénom : </label>
                                        <input class="case" type="text" id="prenom" name="Prénom" required>
                                    </p>
                                </div>
                                <div class="col-6">
                                    <p>
                                        <label for="nom" class="required">Nom : </label>
                                        <input class="case" type="text" id="nom" name="Nom" required>
                                    </p>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-4">
                                            <p>
                                                <legend>Civilité :</legend>
                                            </p>
                                        </div>
                                        <div class="col-4">
                                            <p>
                                                <input type="radio" id="h" name="Homme">
                                                <label for="h">Homme</label>
                                            </p>
                                        </div>
                                        <div class="col-4">
                                            <p>
                                                <input type="radio" id="f" name="Femme">
                                                <label for="f">Femme</label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <p>
                                    <label for="ville">Dans quelle ville habitez-vous ? </label>
                                    <input class="case" type="text" id="ville" name="Ville">
                                </p>
                                <div class="col-12">
                                    <p>
                                        <label for="num" class="required">Numéro de téléphone : </label>
                                        <input class="case" type="text" id="num" name="Téléphone" required>
                                    </p>
                                </div>
                                <div class="col-12">
                                    <p>
                                        <label for="mail" class="required">Adresse e-mail : </label>
                                        <input class="case" type="email" id="mail" name="E-mail" required>
                                    </p>
                                </div>
                                <p>
                                    <textarea class="case message" placeholder="Ecrivez votre message ici" name="Message"></textarea>
                                </p>
                                <div class="submit col-6">
                                    <button type="submit">Envoyez le formulaire</button>
                                </div>
                                <div class="submit col-6">
                                    <button type="reset">Effacez le formulaire</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="col-4">
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