<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Liste des voitures</title>
    </head>
    <body>
        <?php
        echo '<p> Voiture d\'immatriculation : ' . $v->getImmatriculation() . ' de marque : '. $v->getMarque() . 'de couleur : ' . $v->getCouleur() . '</p>';
        ?>
    </body>
</html>
