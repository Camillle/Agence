<?php
session_start();

$_SESSION['nom'] = $_GET['nom'];
$_SESSION['prenom'] = $_GET['prenom'];
$_SESSION['choix'] = $_GET['choix'];
$_SESSION['civilite'] = $_GET['civilite'];

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css" />

    <title>Choix | Voyage ou Excursion</title>
  </head>
  <body>
    <h1> Agence </h1>

    <div class="content">
        <div class="formulaire">

    <?php

      if ($_SESSION['choix'] == 'choixVoyage'){

     echo '<form id="formulaireVoyage" action="recapitulatif.php" method="get">

          Choix voyage :
          <select name="choixVoyage">
            <option>Les caraïbes - 4500€ /pers</option>
            <option>L\'île de la réunion - 3500€ /pers</option>
          </select>
          <br>

          Nombres de personnes :
          <input type="text" name="nbPers" value="" />
          <br>

          <input type="submit" name="estimationVoyage" value="Estimation">
        </form>';
         }
        else{
        echo '
        <form id="formulaireExcursion" action="recapitulatif.php" method="get">

          Choix excursion :
          <select name="choixExcursion">
            <option>Visite de Pandemonium - 100€ /pers</option>
            <option>Visite de plougastel - 70€ /pers</option>
          </select>
          <br>
          Nombres de personnes :
          <input type="text" name="nbPers" value="">
          <br>
          <input type="submit" name="estimationExcursion" value="Estimation">
        </form>';
      }
      ?>
    </div>
    </div>
  </body>
</html>
