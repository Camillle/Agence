<?php
session_start();
$_SESSION['nbPers'] = $_GET['nbPers'];
$_SESSION['prix'] = $_GET['prix'];

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css" />

    <title>Recapitulatif</title>
  </head>
  <body>
    <h1> Résumé de votre demande </h1>

    <div class="content">
        <div class="formulaire">

    <p>Bonjour : <?php echo $_SESSION['civilite'].' '.$_SESSION['nom'].' '.$_SESSION['prenom']; ?> <br />
      Vous avez choisi :
      <?php
      if ($_SESSION['choix'] == 'choixVoyage') {
        echo 'un voyage';
      } else {
        echo 'une excursion';
      } ?>. <br />
      au prix de :

       <br />
      Vous nous avex indiqué : ..
      <?php echo $_SESSION['nbPers']; ?>
      <br />Le montant total est de :.. <?php
       ?>
    </p>
  </div>
  </div>
    <a href="formulaire.php">Retour au formulaire</a>

</body>
</html>
