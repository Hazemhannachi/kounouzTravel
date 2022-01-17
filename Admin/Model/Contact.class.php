<?php
class Contact{
private $nompre_cont;
private $email_cont;
private $sujet;
private $message;



function __construct($nompre_cont,$email_cont,$sujet,$email_ad){
$this->nompre_cont = addslashes($nompre_cont);
$this->email_cont = addslashes($email_cont);
$this->sujet = addslashes($sujet);
$this->message = addslashes($message);
}

/*public function ajouter(){ 

include('../includes/connect_db.php');
		
		$req = $bdd->exec("INSERT INTO `admin`(`nom_ad`, `prenom_ad`, `login_ad`, `email_ad`)	
    VALUES ('$this->nom_ad','$this->prenom_ad','$this->login_ad','$this->email_ad')");
		
		echo'<span class="message_envoyer">Message envoyer avec succes</span>';
                //return TRUE;
			
}
*/


/*public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec(" UPDATE `admin` SET `nom_ad`='$this->nom_ad',`prenom_ad`='$this->prenom_ad',`login_ad`='$this->login_ad',`email_ad`='$this->email_ad',`mdp_ad`='$this->mdp_ad'WHERE id_ad = $id ");
				
        
        echo'oui';
        
}	*/





public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM contact WHERE id_cont=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}








}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['datedenaissance'],$_POST['adr'],$_POST['numtel'],$_POST['mp'],$_POST['e_mail'],$_POST['paiement'],$_POST['typeoffre'],$_POST['reussite']);


?>