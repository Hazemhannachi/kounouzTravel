<?php 

require_once('../Model/Admin.class.php');

$admin = new Admin($_POST['nom_ad'],$_POST['prenom_ad'], $_POST['login_ad'], $_POST['email_ad'],$_POST['mdp_ad'],$_POST['img_ad']);

$admin->modifier();
header("Location:../listesAdmin.php?resultat=oui");
//echo "oui";
//exit();
?>
