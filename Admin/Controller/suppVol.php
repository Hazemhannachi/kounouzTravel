<?php 

require_once('../Model/Vol.class.php');

//$admin = new admin($_POST['nom_ad'],$_POST['prenom_ad'], $_POST['login_ad'], $_POST['mdp_ad'],$_POST['email_ad']);

vol::supprimer();
header("Location:../listesVol.php?resultat1=ouiSupp");
//echo "oui";
//exit();
?>
