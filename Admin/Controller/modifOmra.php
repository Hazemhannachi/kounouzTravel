<?php 

require_once('../Model/Omra.class.php');

$omra = new Omra($_POST['depart_omra'], $_POST['arrive_omra'],$_POST['heure_omra'], $_POST['numpl_omra'], $_POST['prix_omra']);

$omra->modifier();
header("Location:../listesOmra.php?resultat=oui");
//echo "oui";
//exit();
?>