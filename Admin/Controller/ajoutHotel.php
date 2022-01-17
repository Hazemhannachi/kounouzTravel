<?php 

require_once('../Model/Hotel.class.php');
$target_dir = "../img/";
$target_file = $target_dir . basename($_FILES["img_hotel"]["name"]);
$extensions = array('jpg' , 'png' , 'jpeg');
$image_extension = strtolower(end(explode('.', $_FILES["img_hotel"]["name"])));

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if ($_FILES["img_hotel"]["error"] == 4) {

$hotel = new Hotel($_POST['nom_hot'],$_POST['numch_hot'], $_POST['typech_hot'],'vide');
$hotel->ajouter();

}elseif ($_FILES['img_hotel']['size'] > 5000000) {

    echo "<div>la taille de l'image superieur a 5 mo</div>";

  }elseif (! in_array($image_extension, $extensions)) {
      
    echo "<div>le fichier n'est pas une image</div>";

  }else{

    move_uploaded_file($_FILES["img_hotel"]["tmp_name"], $target_file) ;

    $hotel = new Hotel($_POST['nom_hot'],$_POST['numch_hot'], $_POST['typech_hot'], $_FILES['img_hotel']["name"]);

    $hotel->ajouter();

    header("Location:../listesHotel.php?resultat=oui");
}

}
?>



 
