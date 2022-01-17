<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.gridgum.com/templates/Travel-agency/booking-flights-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Aug 2021 15:34:52 GMT -->
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
                   
                    <div class="clearfix"></div>
                    <div class="col-md-8 booking-row">
                        <h3 class="line">Inscription</h3>
                        <form class="form-horizontal" action="Controller/ajoutClient.php" method="POST">
                        <div class="input2_wrapper">
                            <label class="col-md-5" style="padding-left:0;padding-top:12px;">Nom</label>
                            <div class="col-md-7" style="padding-right:0;padding-left:0;">
                                <input type="text" class="form-control" name="nom_cl" spellcheck="false">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="input2_wrapper">
                            <label class="col-md-5" style="padding-left:0;padding-top:12px;">Prenom</label>
                            <div class="col-md-7" style="padding-right:0;padding-left:0;">
                                <input type="text" class="form-control" name="prenom_cl"  spellcheck="false">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="input2_wrapper">
                            <label class="col-md-5" style="padding-left:0;padding-top:12px;">Login</label>
                            <div class="col-md-7" style="padding-right:0;padding-left:0;">
                                <input type="text" class="form-control" name="login_cl" spellcheck="false">
                            </div>
                        </div>
                        
                        <div class="clearfix"></div>
                        <div class="margin-top"></div>
                        <div class="input2_wrapper">
                            <label class="col-md-5" style="padding-left:0;padding-top:12px;">Email</label>
                            <div class="col-md-7" style="padding-right:0;padding-left:0;">
                                <input type="email" class="form-control"name="email_cl" spellcheck="false">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="input2_wrapper">
                            <label class="col-md-5" style="padding-left:0;padding-top:12px;">Mot de passe</label>
                            <div class="col-md-7" style="padding-right:0;padding-left:0;">
                                <input type="text" class="form-control" name="mdp_cl" spellcheck="false">
                            </div>
                        </div>
                        <div class="input2_wrapper">
                            <label class="col-md-5" style="padding-left:0;padding-top:12px;">Passport</label>
                            <div class="col-md-7" style="padding-right:0;padding-left:0;">
                                <input type="text" class="form-control" name="passport" spellcheck="false">
                            </div>
                        </div>
                        <button type="submit" class="btn-default btn-cf-submit">Inscrire</button>

    </form>


                    </div>
                    <div class="col-md-4"></div>
                    
                </div>
            </div>
        </div>
    </div>








    <?php include('includes/footer.php') ?>






















</div>
<script src="https://demo.gridgum.com/templates/Travel-agency/js/bootstrap.min.js"></script>
</body>

<!-- Mirrored from demo.gridgum.com/templates/Travel-agency/booking-flights-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Aug 2021 15:34:52 GMT -->
</html>