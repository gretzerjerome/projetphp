<html>
  <head><title>Hi!</title></head>
  <body>
<?php
 $nom_du_visiteur = 'jérôme';
 $age_du_visiteur = '31';
 $faim_ou_pas = 'non';
 $couleur_yeux = 'bruns' ;
?>

<p> <?php echo "Je m'appelle $nom_du_visiteur, j'ai $age_du_visiteur ans,", " est-ce que j'ai faim ? $faim_ou_pas", " et j'ai les yeux $couleur_yeux"  ?>


<?php
$prenoms = array ('jerome', 'constant', 'lucienne', 'jimmy');

for ($numero = 0; $numero < 4; $numero++)

{

echo $prenoms [$numero] . '<br />';


}

?>
  </body>
</html>
