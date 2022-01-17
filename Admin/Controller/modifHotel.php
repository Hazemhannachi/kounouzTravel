<?php 

require_once('../Model/Hotel.class.php');

$hotel = new Hotel($_POST['nom_hot'],$_POST['numch_hot'], $_POST['typech_hot'], $_POST['img_hotel']);

$hotel->modifier();
header("Location:../listesHotel.php?resultat=oui");
//echo "oui";
//exit();
?>
