<?php 

require_once('../Model/Contact.class.php');

//$admin = new admin($_POST['nom_ad'],$_POST['prenom_ad'], $_POST['login_ad'], $_POST['mdp_ad'],$_POST['email_ad']);

contact::supprimer();
header("Location:../listesContact.php?resultat1=ouiSupp");
//echo "oui";
//exit();
?>
