
<?php 

require_once('../Model/Vol.class.php');

$vol = new Vol($_POST['ville_vol'],$_POST['depart_vol'], $_POST['arrive_vol'], $_POST['heure_vol'],$_POST['numpl_vol'],$_POST['prix_vol'],$_POST['img_vol']);

$vol->modifier();
header("Location:../listesVol.php?resultat=oui");
//echo "oui";
//exit();
?>
