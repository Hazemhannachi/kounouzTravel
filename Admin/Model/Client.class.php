<?php
class Client{
private $nom_cl;
private $prenom_cl;
private $login_cl;
private $email_cl;
private $mdp_cl;
private $passport;


function __construct($nom_cl,$prenom_cl,$login_cl,$email_cl,$mdp_ad,$passport){
$this->nom_cl = addslashes($nom_cl);
$this->prenom_cl = addslashes($prenom_cl);
$this->login_cl = addslashes($login_cl);
$this->email_cl = addslashes($email_cl);
$this->mdp_cl = md5($mdp_cl);
$this->passport = addslashes($passport);
}

public function ajouter(){ 

include('../includes/connect_db.php');
		
		$req = $bdd->exec("INSERT INTO `client`(`nom_cl`, `prenom_cl`, `login_cl`, `email_cl`, `mdp_cl`, `passport`)	
    VALUES ('$this->nom_cl','$this->prenom_cl','$this->login_cl','$this->email_cl','$this->mdp_cl' ,'$this->passport')");
		
		echo'<span class="message_envoyer">Message envoyer avec succes</span>';
                //return TRUE;
			
}



public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec(" UPDATE `client` SET `nom_cl`='$this->nom_cl',`prenom_cl`='$this->prenom_cl',`login_cl`='$this->login_cl',`email_cl`='$this->email_cl',`mdp_cl`='$this->mdp_cl',`passport`='$this->passport' WHERE id_cl = $id ");
				
        
        echo'oui';
        
}	






public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM client WHERE id_cl=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}








}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['datedenaissance'],$_POST['adr'],$_POST['numtel'],$_POST['mp'],$_POST['e_mail'],$_POST['paiement'],$_POST['typeoffre'],$_POST['reussite']);


?>