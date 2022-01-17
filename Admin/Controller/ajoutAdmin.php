
<?php 

require_once('../Model/Admin.class.php');

$target_dir = "../img/";
$target_file = $target_dir . basename($_FILES["img_ad"]["name"]);
$extensions = array('jpg' , 'png' , 'jpeg');
$image_extension = strtolower(end(explode('.', $_FILES["img_ad"]["name"])));

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if ($_FILES["img_ad"]["error"] == 4) {

    $admin = new Admin($_POST['nom_ad'],$_POST['prenom_ad'], $_POST['login_ad'], $_POST['email_ad'],$_POST['mdp_ad'], 'vide');
    $admin->ajouter();

  }elseif ($_FILES['img_ad']['size'] > 5000000) {

    echo "<div>la taille de l'image superieur a 5 mo</div>";

  }elseif (! in_array($image_extension, $extensions)) {
      
    echo "<div>le fichier n'est pas une image</div>";

  }else{

    move_uploaded_file($_FILES["img_ad"]["tmp_name"], $target_file) ;

    $admin = new Admin($_POST['nom_ad'],$_POST['prenom_ad'], $_POST['login_ad'], $_POST['email_ad'],$_POST['mdp_ad'], $_FILES['img_ad']["name"]);

    $admin->ajouter();
    header("Location:../ListesAdmin.php?resultat=oui");
}

}

?>
