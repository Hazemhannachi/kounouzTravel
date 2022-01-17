<?php
class Omra{
private $depart_omra;
private $arrive_omra;
private $heure_omra;
private $numpl_omra;
private $prix_omra;
private $img_omra;


function __construct($depart_omra,$arrive_omra,$heure_omra,$numpl_omra,$prix_omra,$img_omra){
$this->depart_omra = addslashes($depart_omra);
$this->arrive_omra = addslashes($arrive_omra);
$this->heure_omra = addslashes($heure_omra);
$this->numpl_omra = addslashes($numpl_omra);
$this->prix_omra = addslashes($prix_omra);
$this->img_omra = addslashes($img_omra);


}

public function ajouter(){ 

include('../includes/connect_db.php');
		
		$req = $bdd->exec("INSERT INTO `omra`( `depart_omra`, `arrive_omra`, `heure_omra`, `numpl_omra`, `prix_omra`, `img_omra`)	
    VALUES ('$this->depart_omra','$this->arrive_omra','$this->heure_omra','$this->numpl_omra','$this->prix_omra','$this->img_omra')");
		
		echo'<span class="message_envoyer">Message envoyer avec succes</span>';
                //return TRUE;
			
}



public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec(" UPDATE `omra` SET `depart_omra`='$this->depart_omra',`arrive_omra`='$this->arrive_omra',`heure_omra`='$this->heure_omra',`numpl_omra`='$this->numpl_omra',,`prix_omra`='$this->prix_omra',,`img_omra`='$this->img_omra' WHERE id_omra = $id ");
				
        
        echo'oui';
        
}	






public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM omra WHERE id_omra=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}








}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['datedenaissance'],$_POST['adr'],$_POST['numtel'],$_POST['mp'],$_POST['e_mail'],$_POST['paiement'],$_POST['typeoffre'],$_POST['reussite']);


?>