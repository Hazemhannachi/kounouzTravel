<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.gridgum.com/templates/Travel-agency/contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Aug 2021 15:34:53 GMT -->
<head>
<title>Contacts page </title>
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

<script src="https://demo.gridgum.com/templates/Travel-agency/js/cform.js"></script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA85u2f3GPNnJhIJeggViAfB8zMkUbCHNE"></script>
<script src="https://demo.gridgum.com/templates/Travel-agency/js/googlemap.js"></script>

<script src="https://demo.gridgum.com/templates/Travel-agency/js/script.js"></script>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="not-front page-contacts">

<div id="main">

            <?php include('includes/header.php'); ?>

            <div id="parallax2" class="parallax">
  <div class="bg2 parallax-bg"></div>
  <div class="overlay"></div>
  <div class="parallax-content">
    <div class="container">





    </div>
  </div>
</div>


<div id="content">
  <div class="container">

    <div class="row">
      <div class="col-sm-6">

        <h3>CONTACT INFO</h3>

        <p>
        S'il vous plaît contactez-nous via le formulaire de contact. Pour toute question ou assistance, contactez-nous sur notre forum d'assistance.        </p>

        <br>

        <h4>Adresse</h4>
        <p>
          Tunisia<br>
          
          <h4>Email</h4>

          <a>info@ekounouz.com</a>

          <h4>Telephone</h4>


        <p>
        +216 73214607
<br>
         
        </p>

        <div class="social3_wrapper">
          <ul class="social3 clearfix">
            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            >
          </ul>
        </div>


      </div>
      <div class="col-sm-6">

        <h3>CONTACT FORM</h3>

        <div id="note"></div>
        <div id="fields">
          <form  class="form-horizontal" action="Controller/AjoutContact.php" method="POST">

            <div class="form-group">
                <label for="inputName">Your Name</label>
                <input type="text" class="form-control" id="inputName" name="nompre_cont" placeholder="Nom_Prenom" >
            </div>

            <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="text" class="form-control" id="inputEmail" name="email_cont" placeholder="Adresse Email">
            </div>
            <div class="form-group">
                <label for="inputName">Sujet</label>
                <input type="text" class="form-control" id="inputSujet" name="sujet" placeholder="Sujet" >
            </div>

            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                    <label for="inputMessage">Message</label>
                    <textarea class="form-control" rows="7" id="inputMessage" name="message"  placeholder="Message"></textarea>
                </div>
              </div>
            </div>
            <button type="submit" class="btn-default btn-cf-submit">send message</button>
          </form>
        </div>


      </div>
    </div>








  </div>
</div>







<?php include('includes/footer.php'); ?>






















</div>
<script src="https://demo.gridgum.com/templates/Travel-agency/js/bootstrap.min.js"></script>
</body>

<!-- Mirrored from demo.gridgum.com/templates/Travel-agency/contacts.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Aug 2021 15:34:53 GMT -->
</html>