<?php 

require_once('../Model/Omra.class.php');

//$admin = new admin($_POST['nom_ad'],$_POST['prenom_ad'], $_POST['login_ad'], $_POST['mdp_ad'],$_POST['email_ad']);

omra::supprimer();
header("Location:../listesOmra.php?resultat1=ouiSupp");
//echo "oui";
//exit();
?>
