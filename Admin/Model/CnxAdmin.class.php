<?php
class CnxAdmin{
private $login_ad;
private $mdp_ad;

        
function __construct($login_ad,$mdp_ad){
$this->login_ad = $login_ad;
$this->mdp_ad = md5($mdp_ad);


}


public function verifier(){ 

    include('../includes/connect_db.php');
    $req = $bdd->query(" SELECT * FROM admin WHERE login_ad = '$this->login_ad' AND mdp_ad = '$this->mdp_ad'");
    $resultat = $req->fetch();

  if (!$resultat)
{
  header('location:../login.php?mess=error');
  
}
   else
{
       session_start();

       $_SESSION['id_ad'] = $resultat['id_ad'];
       $_SESSION['nom_ad'] = $resultat['nom_ad'];
       $_SESSION['prenom_ad'] = $resultat['prenom_ad'];
       $_SESSION['login_ad'] = $resultat['login_ad'];
       $_SESSION['email_ad'] = $resultat['email_ad'];
       $_SESSION['mdp_ad'] = $resultat['mdp_ad'];
       $_SESSION['img_ad'] = $resultat['img_ad'];

	   
	header('location:../ListesAdmin.php');


} 

}
}


$admin = new CnxAdmin($_POST['login_ad'],$_POST['mdp_ad']);


?>