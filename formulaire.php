<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <title>Formulaire</title>
  </head>
  <body>
    <h1> Formulaire </h1>

    <div class="content">
      <form class="formulaire" action="agence.php" method="get">

        Civilité :
        <select name="civilite">
          <option>Madame</option>
          <option>Monsieur</option>
        </select>
        <br>

        Nom :
        <input type="text" name="nom">
        <br>

        Prénom :
        <input type="text" name="prenom">
        <br>

        <label>Voyage
        <input type="radio" name="choix" value="choixVoyage">
        </label>
        <br>

        <label>Excursion
        <input type="radio" name="choix" value="choixExcursion">
        </label>
        <br>

        <input type="submit" name="suite" value="Suite">

      </form>
    </div>

  </body>
</html>
