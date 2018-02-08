<html>
  <head>Formulaire</head>

  <body>
    <form name = "inscription" method="get" action="age.php">
      Rentrez votre âge :
      <input type="number" name="age"/><br/>
      <br/>
      Quel est votre sexe ?<br/>
      <input type="radio" name="genre" value="homme"> Male<br>
      <input type="radio" name="genre" value="femme"> Female<br>
      <br/>
      Quel est votre langue maternelle ?<br/>
      <input type="radio" name="langue" value="français" /> Anglais<br>
      <input type="radio" name="langue" value="anglais" /> Français<br>
      Quel est ta note ?
      <input type="number" name="note" min="1" max="20">
      </br>
      <input type="submit" name="valider" value="Soumettre" />
    </form>
    <?php

      $age = $_GET["age"];
      $genre = $_GET["genre"];
      $langue =$_GET["langue"];
      $note = $_GET["note"];


if ( $langue == "français"){
  if ( $genre == "homme") {
    if( $age <12)
      {
        echo "salut petit!";
      }
      elseif ( $age >= 12 and $age <18)
      {
        echo "Salut l'ado!";
      }
      elseif ( $age >= 18 and $age <= 115)
      {
        echo "Salut l'adulte!";
      }
      elseif ( $age > 115)
      {
        echo "Wow! Toujours vivant?";
      }
      else {
       // code à exécuter si toutes les conditions précédentes sont FALSE
        echo "classification des ages";
        }
      }
    }
  elseif ( $genre == "femme") {
      if( $age <12)
      {
        echo "salut petite!";
      }
      elseif ( $age >= 12 and $age <18)
      {
        echo "Salut l'adolescente!";
      }
      elseif ( $age >= 18 and $age <= 115)
      {
        echo "Salut l'adulte!";
      }
      elseif ( $age > 115)
      {
        echo "Wow! Toujours vivante?";
      }
    }


if ( $langue == "anglais"){
  if ( $genre == "homme") {
    if( $age <12)
      {
        echo "Hello boy!";
      }
      elseif ( $age >= 12 and $age <18)
      {
        echo "Hello Teenage boy!";
      }
      elseif ( $age >= 18 and $age <= 115)
      {
        echo "Hello Sir!";
      }
      elseif ( $age > 115)
      {
        echo "Wow! Still alive, old man?";
      }
      else {
       // code à exécuter si toutes les conditions précédentes sont FALSE
        echo "classification des ages";
        }
      }
    }
    elseif ( $genre == "femme") {
      if( $age <12)
      {
        echo "Hello Girl!";
      }
      elseif ( $age >= 12 and $age <18)
      {
        echo "Hello Teenage girl!";
      }
      elseif ( $age >= 18 and $age <= 115)
      {
        echo "Hello Lady!";
      }
      elseif ( $age > 115)
      {
        echo "Wow! Still alive, old lady?";
      }
    }


    if (($note == 1) OR ($note == 2) OR ($note == 3))
      {
        echo "Ce travail est nul.";
      }

    elseif (($note == 4) OR ($note == 5) OR ($note == 6) OR ($note == 7) OR ($note == 8) OR ($note == 9))
      {
        echo "Ce travail n'est pas terrible";
      }

    elseif (($note == 10))
      {
        echo "tout juste";
      }
    elseif (($note == 11) OR ($note == 12) OR ($note == 13) OR ($note == 14))
      {
        echo "C'est pas mal.";
      }
    elseif (($note == 15) OR ($note == 16) OR ($note == 17) OR ($note == 18))
      {
        echo "Bravo";
      }
    elseif (($note ==19) OR ($note == 20))
      {
        echo "Police, arrêtez ce tricheur!";
      }


    else {
      echo "Entrer une donnée valide!";
      }

    ?>
  </body>
</html>
