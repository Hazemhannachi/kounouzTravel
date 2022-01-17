<?php 

require_once('../Model/reservation.class.php');

$reservation = new reservation($_POST['nom_res'],$_POST['prenom_res'], $_POST['tel_res'], $_POST['nb_res']);

$reservation->ajouter();
header("Location:../reservation.php?resultat=oui");
//echo "oui";
//exit();
?>
 