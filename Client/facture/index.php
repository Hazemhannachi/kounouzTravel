<?php
include('../includes/connect_db.php');

//$req = $bdd->query("SELECT * FROM seance_monitorat WHERE id_smon=$id");
session_start();
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  }
$req = $bdd->query("SELECT * FROM vol WHERE  id_vol = $id ");

$donnees = $req->fetch();
 ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.harnishdesign.net/html/koice/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Jun 2020 13:55:07 GMT -->
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="images/favicon.png" rel="icon" />
<title>Facture</title>
<meta name="author" content="harnishdesign.net">

<!-- Web Fonts
======================= -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

<!-- Stylesheet
======================= -->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/all.min.css"/>
<link rel="stylesheet" type="text/css" href="css/stylesheet.css"/>
</head>
<body>
<!-- Container -->
<div class="container-fluid invoice-container">
  <!-- Header -->
  <header>
  <div class="row align-items-center">
    <div class="col-sm-7 text-center text-sm-left mb-3 mb-sm-0">
      <img id="logo" src="images/logos.png" title="Invoice" alt="Invoice" style="width: 30%;" />
    </div>
    <div class="col-sm-5 text-center text-sm-right">
      <h4 class="text-7 mb-0">Facture</h4>
    </div>
  </div>
  <hr>
  </header>
  
  
  <!-- Main Content -->
  <main>
  <div class="row">
    <div class="col-sm-6"><strong>Date:</strong> <?php echo date('j-m-Y'); ?></div>
    <div class="col-sm-6 text-sm-right"> <strong>Facture N°:</strong> 000<?php echo $_SESSION['id_cl'] ?></div>
	  
  </div>
  <hr>
  <div class="row">
    <div class="col-sm-6 text-sm-right order-sm-1"> <strong>De la part:</strong>
      <address>
      <br />
      Mohamed Ali jouedi<br/>
      (+216)98934494<br />
      MohamedAlir@gmail.com<br />
    
      </address>
    </div>
    <div class="col-sm-6 order-sm-0"> <strong>Facture a :</strong>
      <address>

      <span><?php echo $_SESSION['nom_cl']; ?></span> <span><?php echo $_SESSION['prenom_cl']; ?></span><br />
      
      E-mail: <?php echo $_SESSION['email_cl']; ?><br />
      </address>
    </div>
  </div>  
  <div class="card">
    <div class="card-header px-2 py-0">
      <table class="table mb-0">
        <thead>
          <tr>
            
      <td class=" border-0"><strong>Ville Vol</strong></td>

            <td class=" border-0"><strong>Depart Vol</strong></td>
			<td class=" border-0"><strong>Arrive Vol</strong></td>
            <td class=" border-0"><strong>Total</strong></td>
          </tr>
        </thead>
      </table>
    </div>
    <div class="card-body px-2">
      <div class="table-responsive">
        <table class="table">
          <tbody>
            <tr>
            <td class="border-0"><?php echo $donnees['ville_vol'] ?></td>

              <td class="border-0"><?php echo $donnees['depart_vol'] ?></td>
              <td class="border-0"><?php echo $donnees['arrive_vol'] ?></td>

			 
        <td class="border-0" style="position: relative;left: -3PX;" ><?php echo( $donnees['prix_vol']*(strtotime($donnees['arrive_vol'])- strtotime($donnees['depart_vol']))/24/3600); ?> DT</td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>
  </main>
  <!-- Footer -->..
  <footer class="text-center mt-4">
  <p class="text-1"><strong>REMARQUE :</strong>  Il s'agit d'un reçu généré par ordinateur et ne nécessite pas de signature physique.</p>
  <div class="btn-group btn-group-sm d-print-none"> <a href="javascript:window.print()" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-print"></i> Impression</a> 
    <!--<a href="#" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-download"></i> Download</a>-->
     </div>
  </footer>
</div>
</body>

<!-- Mirrored from demo.harnishdesign.net/html/koice/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Jun 2020 13:55:14 GMT -->
</html>