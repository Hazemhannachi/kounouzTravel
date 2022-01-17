<?php
class Admin{
private $nom_ad;
private $prenom_ad;
private $login_ad;
private $email_ad;
private $mdp_ad;
private $img_ad;



function __construct($nom_ad,$prenom_ad,$login_ad,$email_ad,$mdp_ad,$img_ad){
$this->nom_ad = addslashes($nom_ad);
$this->prenom_ad = addslashes($prenom_ad);
$this->login_ad = addslashes($login_ad);
$this->email_ad = addslashes($email_ad);
$this->mdp_ad = md5($mdp_ad);
$this->img_ad = addslashes($img_ad);
}

public function ajouter(){ 

include('../includes/connect_db.php');
		
		$req = $bdd->exec("INSERT INTO `admin`(`nom_ad`, `prenom_ad`, `login_ad`, `email_ad`, `mdp_ad`, `img_ad`)	
    VALUES ('$this->nom_ad','$this->prenom_ad','$this->login_ad','$this->email_ad','$this->mdp_ad','$this->img_ad')");
		
		echo'<span class="message_envoyer">Message envoyer avec succes</span>';
                //return TRUE;
			
}



public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec(" UPDATE `admin` SET `nom_ad`='$this->nom_ad',`prenom_ad`='$this->prenom_ad',`login_ad`='$this->login_ad',`email_ad`='$this->email_ad',`mdp_ad`='$this->mdp_ad',`img_ad`='$this->img_ad' WHERE id_ad = $id ");
				
        
        echo'oui';
        
}	






public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM admin WHERE id_ad=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}








}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['datedenaissance'],$_POST['adr'],$_POST['numtel'],$_POST['mp'],$_POST['e_mail'],$_POST['paiement'],$_POST['typeoffre'],$_POST['reussite']);


?>