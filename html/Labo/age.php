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
      <input type="submit" name="valider" value="Soumettre" />
    </form>
    <?php

      $age = $_GET["age"];
      $genre = $_GET["genre"];
      $langue =$_GET["langue"];


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

    else {
      echo "Erreur!";
    }

    ?>
  </body>
</html>
