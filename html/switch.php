
<!DOCTYPE html>
<html>
<body>

<?php

$age = "19";

switch ($age) {
    case 1:
    case 2:
    case 3:
        echo "Ce travail est nul.";
        break;
    case 4:
    case 5:
    case 6:
    case 7:
    case 8:
    case 9:
        echo "Ce travail n'est pas terrible";
        break;
    case 10:
        echo "c'est tout juste";
        break;
    case 11:
    case 12:
    case 13:
    case 14:
        echo "C'est pas mal.";
        break;
    case 15:
    case 16:
    case 17:
    case 18:
        echo "Bravo!";
        break;
    case 19:
    case 20:
        echo "Police! Arrêtez ce tricheur!";
        break;
    default:
        echo "Just monika";
}
?>

</body>
</html>
