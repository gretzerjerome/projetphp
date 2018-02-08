<html>
  <head>Formulaire</head>

  <body>
    <form name = "inscription" method="get" action="age.php">
      Rentrez votre âge :
      <input type="number" name="age"/><br/>
      <br/>
      <input type="submit" name="valider" value="ok" />
    </form>
    <br/>
    <form action="/action_page.php">
      Quel est votre sexe ?<br/>
        <input type="radio" name="gender" value="male"> Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
        <input type="submit">
    </form>
    <?php

      $age = $_GET["age"];
      $gender = $_GET["gender"]

    if ( $gender == "male")
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


    if ( $gender == "Female")
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
    ?>
  </body>
</html>
