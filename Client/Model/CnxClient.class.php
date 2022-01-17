<?php
class CnxClient{
private $login_cl;
private $mdp_cl;

        
function __construct($login_cl,$mdp_ad){
$this->login_cl = $login_cl;
$this->mdp_cl = md5($mdp_cl);


}


public function verifier(){ 

    include('../includes/connect_db.php');
    $req = $bdd->query(" SELECT * FROM client WHERE login_cl = '$this->login_cl' AND mdp_cl = '$this->mdp_cl'");
    $resultat = $req->fetch();

  if (!$resultat)
{
  header('location:../login.php?mess=error');
  
}
   else
{
       session_start();

       $_SESSION['id_cl'] = $resultat['id_cl'];
       $_SESSION['nom_cl'] = $resultat['nom_cl'];
       $_SESSION['prenom_cl'] = $resultat['prenom_cl'];
       $_SESSION['login_cl'] = $resultat['login_cl'];
       $_SESSION['email_cl'] = $resultat['email_cl'];
       $_SESSION['mdp_cl'] = $resultat['mdp_cl'];
       $_SESSION['passport'] = $resultat['passport'];

	   
	header('location:../index_cl.php');


} 

}
}


$client = new CnxClient($_POST['login_cl'],$_POST['mdp_cl']);


?>