<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Mon premier php </title>
    </head>
   
    <body>
        <?php
          $marque = "Ferrari";
          $couleur = "rouge";
          $immatriculation = "TG345BB";
          echo "Voiture $immatriculation de marque $marque (couleur $couleur) <br/>";

          $voiture1['marque'] = 'Porsche';
          $voiture1['couleur'] = 'noire';
          $voiture1['immatriculation']='PierrePedale';

          $voiture2['marque'] = 'BMW';
          $voiture2['couleur'] = 'grise';
          $voiture2['immatriculation']='ABBA345';

          $voiture3['marque'] = 'Aston Martin';
          $voiture3['couleur'] = 'blanche';
          $voiture3['immatriculation']='EZTP123';

          $voitures[0] = $voiture1;
          $voitures[1] = $voiture2;
          $voitures[2] = $voiture3; 

          if (empty($voitures))
            echo "il n'y a aucune voiture";
          else 
            foreach ($voitures as $cle => $valeur){
              echo "<br\> Voiture {$valeur['immatriculation']} de marque {$valeur['marque']} (couleur {$valeur['couleur']}) <br/>";
          }


         


    ?>
    </body>
</html> 