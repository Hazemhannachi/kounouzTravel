<?php
class Hotel{
private $nom_hot;
private $numch_hot;
private $typech_hot;
private $img_hotel;




function __construct($nom_hot,$numch_hot,$typech_hot,$img_hotel){
$this->nom_hot = addslashes($nom_hot);
$this->numch_hot = addslashes($numch_hot);
$this->typech_hot = addslashes($typech_hot);
$this->img_hotel = addslashes($img_hotel);


}

public function ajouter(){ 

include('../includes/connect_db.php');
		
		$req = $bdd->exec("INSERT INTO `hotel`(`nom_hot`, `numch_hot`, `typech_hot`, `img_hotel`)	
    VALUES ('$this->nom_hot','$this->numch_hot','$this->typech_hot','$this->img_hotel')");
		
		echo'<span class="message_envoyer">Message envoyer avec succes</span>';
                //return TRUE;
			
}



public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec(" UPDATE `hotel` SET `nom_hot`='$this->nom_hot',`numch_hot`='$this->numch_hot',`typech_hot`='$this->img_hotel',`img_hotel`='$this->typech_hot' WHERE id_hot = $id ");
				
        
        echo'oui';
        
}	






public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM hotel WHERE id_hot=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}








}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['datedenaissance'],$_POST['adr'],$_POST['numtel'],$_POST['mp'],$_POST['e_mail'],$_POST['paiement'],$_POST['typeoffre'],$_POST['reussite']);


?>