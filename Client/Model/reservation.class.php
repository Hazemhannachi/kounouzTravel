<?php
class Reservation{
private $nom_res;
private $prenom_res;
private $tel_res;
private $nb_res;



function __construct($nom_res,$prenom_res,$tel_res,$nb_res){
$this->nom_res = addslashes($nom_res);
$this->prenom_res = addslashes($prenom_res);
$this->tel_res = addslashes($tel_res);
$this->nb_res = addslashes($nb_res);
}

public function ajouter(){ 

include('../includes/connect_db.php');
		
		$req = $bdd->exec("INSERT INTO `reservation`(`nom_res`, `prenom_res`, `tel_res`, `nb_res`)	
    VALUES ('$this->nom_res','$this->prenom_res','$this->tel_res','$this->nb_res')");
		
		echo'<span class="message_envoyer">Message envoyer avec succes</span>';
                //return TRUE;
			
}



/*public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec(" UPDATE `admin` SET `nom_ad`='$this->nom_ad',`prenom_ad`='$this->prenom_ad',`login_ad`='$this->login_ad',`email_ad`='$this->email_ad',`mdp_ad`='$this->mdp_ad'WHERE id_ad = $id ");
				
        
        echo'oui';
        
}	*/





/*public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM contact WHERE id_cont=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}*/








}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['datedenaissance'],$_POST['adr'],$_POST['numtel'],$_POST['mp'],$_POST['e_mail'],$_POST['paiement'],$_POST['typeoffre'],$_POST['reussite']);


?>