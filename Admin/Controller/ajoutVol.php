<!-- 

require_once('../Model/Vol.class.php');

$vol = new Vol($_POST['ville_vol'],$_POST['depart_vol'], $_POST['arrive_vol'], $_POST['heure_vol'],$_POST['numpl_vol']);

$vol->ajouter();
header("Location:../listesVol.php?resultat=oui");
//echo "oui";
//exit();
 -->


 <?php 

require_once('../Model/Vol.class.php');

$target_dir = "../img/";
$target_file = $target_dir . basename($_FILES["img_vol"]["name"]);
$extensions = array('jpg' , 'png' , 'jpeg');
$image_extension = strtolower(end(explode('.', $_FILES["img_vol"]["name"])));

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if ($_FILES["img_vol"]["error"] == 4) {

    $vol = new Vol($_POST['ville_vol'],$_POST['depart_vol'], $_POST['arrive_vol'],$_POST['heure_vol'], $_POST['numpl_vol'], $_POST['prix_vol'], 'vide');
    $vol->ajouter();

  }elseif ($_FILES['img_vol']['size'] > 5000000) {

    echo "<div>la taille de l'image superieur a 5 mo</div>";

  }elseif (! in_array($image_extension, $extensions)) {
      
    echo "<div>le fichier n'est pas une image</div>";

  }else{

    move_uploaded_file($_FILES["img_vol"]["tmp_name"], $target_file) ;

    $vol = new Vol($_POST['ville_vol'],$_POST['depart_vol'], $_POST['arrive_vol'],$_POST['heure_vol'], $_POST['numpl_vol'], $_POST['prix_vol'], $_FILES['img_vol']["name"]);

    $vol->ajouter();
    header("Location:../ListesVol.php?resultat=oui");
}

}

?>
