<?php

include('includes/connect_db.php');
$id=$_GET['id'];
$req = $bdd->query("SELECT * FROM  vol WHERE id_vol=$id ");
$donnees = $req->fetch();

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.gridgum.com/templates/Travel-agency/booking-flights-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Aug 2021 15:35:53 GMT -->
<head>
    <title>Booking page - Travel agency bootstrap theme</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

    <link href="https://demo.gridgum.com/templates/Travel-agency/css/bootstrap.css" rel="stylesheet">
    <link href="https://demo.gridgum.com/templates/Travel-agency/css/font-awesome.css" rel="stylesheet">
    <link href="https://demo.gridgum.com/templates/Travel-agency/css/animate.css" rel="stylesheet">
    <link href="https://demo.gridgum.com/templates/Travel-agency/css/select2.css" rel="stylesheet">
    <link href="https://demo.gridgum.com/templates/Travel-agency/css/smoothness/jquery-ui-1.10.0.custom.css" rel="stylesheet">
    <link href="https://demo.gridgum.com/templates/Travel-agency/css/style.css" rel="stylesheet">

    <script src="https://demo.gridgum.com/templates/Travel-agency/js/jquery.js"></script>
    <script src="https://demo.gridgum.com/templates/Travel-agency/js/jquery-ui.js"></script>
    <script src="https://demo.gridgum.com/templates/Travel-agency/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://demo.gridgum.com/templates/Travel-agency/js/jquery.easing.1.3.js"></script>
    <script src="https://demo.gridgum.com/templates/Travel-agency/js/superfish.js"></script>

    <script src="https://demo.gridgum.com/templates/Travel-agency/js/select2.js"></script>

    <script src="https://demo.gridgum.com/templates/Travel-agency/js/jquery.parallax-1.1.3.resize.js"></script>

    <script src="https://demo.gridgum.com/templates/Travel-agency/js/SmoothScroll.js"></script>

    <script src="https://demo.gridgum.com/templates/Travel-agency/js/jquery.appear.js"></script>

    <script src="https://demo.gridgum.com/templates/Travel-agency/js/jquery.caroufredsel.js"></script>
    <script src="https://demo.gridgum.com/templates/Travel-agency/js/jquery.touchSwipe.min.js"></script>

    <script src="https://demo.gridgum.com/templates/Travel-agency/js/jquery.ui.totop.js"></script>

    <script src="https://demo.gridgum.com/templates/Travel-agency/js/script.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="not-front page-post">

<div id="main">

<?php include('includes/header.php') ?>


    <div class="breadcrumbs1_wrapper">
        <div class="container">
            <div class="breadcrumbs1"><a href="https://demo.gridgum.com/templates/Travel-agency/index.html">Home</a><span>/</span>Pages<span>/</span>Booking</div>
        </div>
    </div>


    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="text-center hch2"><?php echo $donnees['ville_vol'] ?></h3>
                    <div class="clearfix"></div>
                    <p class="address text-center">Kounouz Travel Agency</p>

                    <div class="clearfix"></div>
                    
                    <div class="col-md-4"></div>
                    <div class="col-md-4 booking-row">
                        <h3 class="line">Réservation du vol / Merci de vérifier</h3>

                        <div class="clearfix"></div>
                        <div class="input2_wrapper">
                            <label class="col-md-6" style="padding-left:0;padding-top:12px;">destination:</label>
                            <div class="col-md-6" style="padding-right:0;padding-left:0;">
                                <span class="red"><?php echo $donnees['ville_vol'] ?></span>
                                <br>Airoport Tunis Cartage
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="input2_wrapper">
                            <label class="col-md-6" style="padding-left:0;padding-top:12px;">Depart:</label>
                            <div class="col-md-6" style="padding-right:0;padding-left:0;">
                                <span class="red"><?php echo $donnees['depart_vol'] ?></span>
                                    <ul>
                                    <li> time: <?php echo $donnees['heure_vol'] ?></li>
                                    </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="input2_wrapper">
                            <label class="col-md-6" style="padding-left:0;padding-top:12px;">Retour:</label>
                            <div class="col-md-6" style="padding-right:0;padding-left:0;">
                                <span class="red"><?php echo $donnees['arrive_vol'] ?></span>

                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="margin-top"></div>
                        <div class="clearfix"></div>
                        <div class="input2_wrapper">
                            <label class="col-md-6" style="padding-left:0;padding-top:12px;">Prix par jour</label>
                            <div class="col-md-6" style="padding-right:0;padding-left:0;">
                                <span class="red"><?php echo $donnees['prix_vol'] ?>DT</span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="margin-top" style="margin-top:40px;"></div>
                        <div class="border-3px"></div>
                        <div class="clearfix"></div>
                        <div class="margin-top"></div>
                        <div class="margin-top"></div>
                        <div class="clearfix"></div>
                        <div class="input2_wrapper">
                            <label class="col-md-6" style="padding-left:0;padding-top:18px;font-size:16px;">GRAND TOTAL:</label>
                            <div class="col-md-6" style="padding-right:0;padding-left:0;">
                                <span class="red" style="font-size:30px;"><?php echo( $donnees['prix_vol']*(strtotime($donnees['arrive_vol'])- strtotime($donnees['depart_vol']))/24/3600); ?> DT</span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="margin-top"></div>
                        <a href="facture/index.php?id=<?php echo $donnees['id_vol'] ?>"  class="btn btn-default btn-cf-submit3">Réserver maintenant</a>

                    </div>
                </div>
            </div>
        </div>
    </div>








    <?php include('includes/footer.php') ?>





















</div>
<script src="https://demo.gridgum.com/templates/Travel-agency/js/bootstrap.min.js"></script>
</body>

<!-- Mirrored from demo.gridgum.com/templates/Travel-agency/booking-flights-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Aug 2021 15:35:53 GMT -->
</html>