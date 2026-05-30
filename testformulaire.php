<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Données reçues</title>
    <link href="Style/bootstrap-grid.css" rel="stylesheet"/>
    <link href="Style/style.css" rel="stylesheet"/>
    <link href="Style/header.css" rel="stylesheet"/>
    <link href="Style/footer.css" rel="stylesheet"/>
</head>
<body>
<header class="entete">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/" . "inlcudes/head.inc.php"; ?>
</header>
<h1>Cette page affiche les données reçues pat le formulaire de contact :</h1>
<?php
if (!empty($_GET)) {
    echo "<ul>";
    foreach ($_GET as $nom => $val) {
        echo "<li>$nom : $val</li>";
    }
    echo "</ul>";
} else if (!empty($_POST)) {
    echo "<h2>Donnees recues en mode POST</h2>";
    echo "<ul>";
    foreach ($_POST as $nom => $val) {
        echo "<li>$nom : $val</li>";
    }
    echo "</ul>";
} else {
    echo "Aucune donnee n'a ete recue (ni en mode GET, ni en mode POST)";
}
?>
<footer>
    <?php include $_SERVER['DOCUMENT_ROOT']."/"."inlcudes/footer.inc.php";?>
</footer>
</body>
