<html>
  <head><title>Hi!</title></head>
  <body>


<?php

    $heure  = 22.04; // Joue avec cette valeur pour tester ton script.

    if( $heure >= 5.00 and $heure <= 9.00)
      {
      // code à exécuter si la condition est TRUE
        echo "bonne journée";
      }

      elseif ( $heure >= 9.01 and $heure <= 12.00)
      {
        echo "bonne journée";
      }
      elseif ( $heure >= 12.01 and $heure <= 16.00)
      {
        echo "Bon après-midi!";

      }
      elseif ( $heure >= 16.01 and $heure <= 21.00){
        echo "Bonne soirée!";

      }
      elseif ( $heure >= 21.01 and $heure <= 23.59)
      {
        echo "Bonne nuit!";

     }
     elseif ( $heure >= 00.00 and $heure <= 04.59)
     {
       echo "Bonne nuit!";

    }
     else {
       // code à exécuter si toutes les conditions précédentes sont FALSE
        echo "tango charlie";
      }


?>
   </body>
</html>
