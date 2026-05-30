<?php

    function getCsvData($filename){
        //ouverture du fichier en lecture seule
        $fichier = fopen($filename,'r') or die("impossible d'ouvrir le fichier");
        //lecture des entêtes
        $headers = fgetcsv($fichier) or die('fichier vide !');
        $data = [];
        //lecture du contenu
        while ($ligne = fgetcsv($fichier)){
            //conversion de la ligne (tableau) en tableau associatif par array_combine et ajout au tableau $data
            $data [] = array_combine($headers, $ligne);
        }
        fclose($fichier);
        return $data;
    }

    function getInfo($donnee){
        $section = [];
        foreach ($donnee as $tableau){
            $section[$tableau['id']] = "<div class='col-4'>
                                            <article class='article product'>
                                            <h1 class='marque'>{$tableau['marque']}</h1>";

            $section[$tableau['id']] .= "<div class='modele product-name'>
                                            <p>{$tableau['modele']}</p>
                                        </div>";

            $section[$tableau['id']] .= "<div class='image product-img'>
                                            <img src='./images/{$tableau['filename']}' alt='photo de la {$tableau['modele']}'>
                                        </div>";

            $section[$tableau['id']] .= "<div class='prix product-price'>
                                            <h2>{$tableau['prix']} €</h2>
                                        </div>";
            $section[$tableau['id']] .= "<div class='cat product-tags'>
                                            <h2>{$tableau['cat']}</h2>
                                        </div>";
            $section[$tableau['id']] .= "<div class='product-id'>
                                            <h2>{$tableau['id']}</h2>
                                        </div>
                                        <button class='add-cart' type='button'>Ajouter au panier</button>
                                        </article>
                                        </div>";
        }

        return $section;

    }

?>
