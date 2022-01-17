<?php 

require_once('../Model/Contact.class.php');

$contact = new Contact($_POST['nompre_cont'],$_POST['email_cont'], $_POST['sujet'], $_POST['message']);

$contact->ajouter();
header("Location:../Contacts.php?resultat=oui");
//echo "oui";
//exit();
?>
