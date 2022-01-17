<?php 

require_once('../Model/Admin.class.php');

//$admin = new admin($_POST['nom_ad'],$_POST['prenom_ad'], $_POST['login_ad'], $_POST['mdp_ad'],$_POST['email_ad']);

admin::supprimer();
header("Location:../listesAdmin.php?resultat1=ouiSupp");
//echo "oui";
//exit();
?>
