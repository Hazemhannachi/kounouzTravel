<?php
class Vol{
private $ville_vol;
private $depart_vol;
private $arrive_vol;
private $heure_vol;
private $numpl_vol;
private $prix_vol;
private $img_vol;


function __construct($ville_vol,$depart_vol,$arrive_vol,$heure_vol,$numpl_vol,$prix_vol,$img_vol){
$this->ville_vol = addslashes($ville_vol);
$this->depart_vol = addslashes($depart_vol);
$this->arrive_vol = addslashes($arrive_vol);
$this->heure_vol = addslashes($heure_vol);
$this->numpl_vol = addslashes($numpl_vol);
$this->prix_vol = addslashes($prix_vol);
$this->img_vol = addslashes($img_vol);


}

public function ajouter(){ 

include('../includes/connect_db.php');
		
		$req = $bdd->exec("INSERT INTO `vol`(`ville_vol`, `depart_vol`, `arrive_vol`, `heure_vol`, `numpl_vol`, `prix_vol`, `img_vol`)	
    VALUES ('$this->ville_vol','$this->depart_vol','$this->arrive_vol','$this->heure_vol','$this->numpl_vol','$this->prix_vol','$this->img_vol')");
		
		echo'<span class="message_envoyer">Message envoyer avec succes</span>';
                //return TRUE;
			
}



public function modifier(){ 

    include('../includes/connect_db.php');

       $id=$_GET['id'];
        
        $r=$bdd->exec(" UPDATE `vol` SET `ville_vol`='$this->ville_vol',`depart_vol`='$this->depart_vol',`arrive_vol`='$this->arrive_vol',`heure_vol`='$this->heure_vol',`numpl_vol`='$this->numpl_vol',,`prix_vol`='$this->prix_vol',,`img_vol`='$this->img_vol' WHERE id_vol = $id ");
				
        
        echo'oui';
        
}	






public function supprimer(){ 
    
	include('../includes/connect_db.php');

    $req = $bdd->exec('DELETE FROM vol WHERE id_vol=\''.$_GET['id'].'\''); 
 
		echo'oui';	
 
 
}








}


//$instance = new User($_POST['nom'],$_POST['prenom'],$_POST['cin'],$_POST['datedenaissance'],$_POST['adr'],$_POST['numtel'],$_POST['mp'],$_POST['e_mail'],$_POST['paiement'],$_POST['typeoffre'],$_POST['reussite']);


?>