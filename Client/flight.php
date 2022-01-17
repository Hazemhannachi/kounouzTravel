<?php
include('includes/connect_db.php');
$req = $bdd->query("SELECT * FROM vol");

?>
<?php
include('includes/connect_db.php');
$req1 = $bdd->query("SELECT * FROM hotel");

?>

<?php
include('includes/connect_db.php');
$req2 = $bdd->query("SELECT * FROM omra");

?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.gridgum.com/templates/Travel-agency/flights.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Aug 2021 15:34:52 GMT -->
<head>
<title>Flights page </title>
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

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA85u2f3GPNnJhIJeggViAfB8zMkUbCHNE"></script>
<script src="https://demo.gridgum.com/templates/Travel-agency/js/googlemap2.js"></script>

<script src="https://demo.gridgum.com/templates/Travel-agency/js/script.js"></script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="not-front page-pages page-flights">

<div id="main">

<?php include('includes/header.php') ?>


<div id="google_map2_wrapper"><div id="google_map2"></div></div>

<div class="breadcrumbs1_wrapper">
  <div class="container">
    <div class="breadcrumbs1"><a href="https://demo.gridgum.com/templates/Travel-agency/index.html">Home</a><span>/</span><a href="https://demo.gridgum.com/templates/Travel-agency/index.html">Pages</a><span>/</span>Flights</div>
  </div>
</div>


<div id="content">
  <div class="container">

    <div class="tabs_wrapper tabs1_wrapper">
      <div class="tabs tabs2">
        <div class="tabs_tabs tabs1_tabs">

            <ul>
              <li class="active flights"><a href="#tabs-1">Flights</a></li>
              <li class="hotels"><a href="#tabs-2">Hotels</a></li>
              <li class="cars"><a href="#tabs-3">Omra</a></li>
            </ul>

        </div>
        <div class="tabs_content tabs1_content">

            <div id="tabs-1">
              
              <div class="row">
                <div class="col-sm-3">

                  

                  

                  <div class="sm_slider sm_slider1">
                    <a class="sm_slider_prev" href="#"></a>
                    <a class="sm_slider_next" href="#"></a>
                    <div class="">
                      <div class="carousel-box">
                        <div class="inner">
                          <div class="carousel main">
                            <ul>
                              <li>
                                <div class="sm_slider_inner">
                                  <div class="txt1">Un des principaux avantages non négligeables de choisir une agence de voyage pour réserver ses vacances c’est le professionnalisme et l’expérience de celle-ci. Les professionnels du tourisme sauront vous guider et vous informer sur le pays de destination. Ils vous trouveront aussi des réductions auprès des compagnies aériennes et des hôtels qui ont déjà fait leurs preuves.</div>
                                </div>
                              </li>
                             
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
                <div class="col-sm-9">

                    <div class="row">
                      <?php

                      while ($donnees = $req->fetch()) {
                      ?>
                        <div class="col-sm-4">
                          <div class="thumb4">
                            <div class="thumbnail clearfix">
                              <figure>
                                <img src="../admin/img/<?php echo $donnees['img_vol'] ?>" alt="" class="img-responsive" style=" height: 170px; px !important">
                              </figure>
                              <div class="caption">
                                <div class="txt1"><?php echo $donnees['ville_vol'] ?></div>
                                <div class="txt3 clearfix">
                                  <div class="left_side">
                                    <div class="price"><?php echo $donnees['prix_vol'] ?> DT</div>
                                    <div class="nums">places: <?php echo $donnees['numpl_vol'] ?></div>
                                  </div>
                                  <div class="right_side"><a href="Reservation_vol.php?id=<?php echo $donnees['id_vol'] ?>" class="btn-default btn1">Réserver</a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php } ?>

                    </div>

                  </div>
              </div>
            </div>
            <div id="tabs-2">
              
              <div class="row">
                <div class="col-sm-3">

                  
                

                  <div class="sm_slider sm_slider2">
                    <a class="sm_slider_prev" href="#"></a>
                    <a class="sm_slider_next" href="#"></a>
                    <div class="">
                      <div class="carousel-box">
                        <div class="inner">
                          <div class="carousel main">
                            <ul>
                              <li>
                                <div class="sm_slider_inner">
                                <div class="txt1">Un des principaux avantages non négligeables de choisir une agence de voyage pour réserver ses vacances c’est le professionnalisme et l’expérience de celle-ci. Les professionnels du tourisme sauront vous guider et vous informer sur le pays de destination. Ils vous trouveront aussi des réductions auprès des compagnies aériennes et des hôtels qui ont déjà fait leurs preuves.</div>
                                </div>
                              </li>
                             
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
                      
                <div class="col-sm-9">

<div class="row">
  <?php

  while ($donnees = $req1->fetch()) {
  ?>
    <div class="col-sm-4">
      <div class="thumb4">
        <div class="thumbnail clearfix">
          <figure>
            <img src="../admin/img/<?php echo $donnees['img_hotel'] ?>" alt="" class="img-responsive" style=" height: 170px; px !important">
          </figure>
          <div class="caption">
            <div class="txt1"><?php echo $donnees['nom_hot'] ?></div>
            <div class="txt3 clearfix">
              <div class="left_side">
                <div class="nums"> <?php echo $donnees['typech_hot'] ?></div>
              </div>
              <div class="right_side"><a href="https://demo.gridgum.com/templates/Travel-agency/search-hotel.html" class="btn-default btn1">Detail</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
</div>

</div>
</div>
</div>
              </div>
            </div>
            <div id="tabs-3">
             
              <div class="row">
                <div class="col-sm-3">

                  

                  <div class="sm_slider sm_slider3">
                    <a class="sm_slider_prev" href="#"></a>
                    <a class="sm_slider_next" href="#"></a>
                    <div class="">
                      <div class="carousel-box">
                        <div class="inner">
                          <div class="carousel main">
                            <ul>
                              <li>
                                <div class="sm_slider_inner">
                                <div class="txt1">Un des principaux avantages non négligeables de choisir une agence de voyage pour réserver ses vacances c’est le professionnalisme et l’expérience de celle-ci. Les professionnels du tourisme sauront vous guider et vous informer sur le pays de destination. Ils vous trouveront aussi des réductions auprès des compagnies aériennes et des hôtels qui ont déjà fait leurs preuves.</div>
                                </div>
                              </li>
                              
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
                <div class="col-sm-9">

                <div class="row">
                <?php

                while ($donnees = $req2->fetch()) {
                ?>
    <div class="col-sm-4">
      <div class="thumb4">
        <div class="thumbnail clearfix">
          <figure>
            <img src="../admin/img/<?php echo $donnees['img_omra'] ?>" alt="" class="img-responsive" style=" height: 170px; px !important">
          </figure>
          <div class="caption">
            <div class="txt1">Mecca</div>
            <div class="txt3 clearfix">
              <div class="left_side">
              <div class="price"><?php echo $donnees['prix_omra'] ?> DT</div>
              </div>
              <div class="right_side"><a href="Reservation_vol.php?id=<?php echo $donnees['id_omra'] ?>" class="btn-default btn1">Réserver</a></div>

            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
</div>
              </div>
            </div>
            

        </div>
      </div>
    </div>








  </div>
</div>







<?php include('includes/footer.php') ?>






















</div>
<script src="https://demo.gridgum.com/templates/Travel-agency/js/bootstrap.min.js"></script>
</body>

<!-- Mirrored from demo.gridgum.com/templates/Travel-agency/flights.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Aug 2021 15:34:52 GMT -->
</html>