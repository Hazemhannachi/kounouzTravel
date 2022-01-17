<!-- 

require_once('../Model/Vol.class.php');

$vol = new Vol($_POST['ville_vol'],$_POST['depart_vol'], $_POST['arrive_vol'], $_POST['heure_vol'],$_POST['numpl_vol']);

$vol->ajouter();
header("Location:../listesVol.php?resultat=oui");
//echo "oui";
//exit();
 -->


 <?php 

require_once('../Model/Omra.class.php');

$target_dir = "../img/";
$target_file = $target_dir . basename($_FILES["img_omra"]["name"]);
$extensions = array('jpg' , 'png' , 'jpeg');
$image_extension = strtolower(end(explode('.', $_FILES["img_omra"]["name"])));

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if ($_FILES["img_omra"]["error"] == 4) {

    $omra = new Omra($_POST['depart_omra'], $_POST['arrive_omra'],$_POST['heure_omra'], $_POST['numpl_omra'], $_POST['prix_omra'], 'vide');
    $omra->ajouter();

  }elseif ($_FILES['img_omra']['size'] > 5000000) {

    echo "<div>la taille de l'image superieur a 5 mo</div>";

  }elseif (! in_array($image_extension, $extensions)) {
      
    echo "<div>le fichier n'est pas une image</div>";

  }else{

    move_uploaded_file($_FILES["img_omra"]["tmp_name"], $target_file) ;

    $omra = new Omra($_POST['depart_omra'], $_POST['arrive_omra'],$_POST['heure_omra'], $_POST['numpl_omra'], $_POST['prix_omra'], $_FILES['img_omra']["name"]);

    $omra->ajouter();
    header("Location:../ListesOmra.php?resultat=oui");
}

}

?>
