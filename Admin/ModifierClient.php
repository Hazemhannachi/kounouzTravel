<?php

include('includes/connect_db.php');
$id=$_GET['id'];
$req = $bdd->query("SELECT * FROM  client WHERE id_cl=$id ");
$donnees = $req->fetch();

 ?>

<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/adminto/layouts/vertical/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Aug 2021 07:59:42 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Modifier Client</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-stylesheet" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <?php include('includes/header.php'); ?>

            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <?php include('includes/menu.php'); ?>

            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                      
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <h4 class="mt-0 mb-3 header-title">Modifier Client</h4>

                                    <form action="controller/modifClient.php?id=<?php echo $donnees['id_cl'] ?>" method="post">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nom</label>
                                            <input type="text" class="form-control" name="nom_cl"  value="<?php echo $donnees['nom_cl'] ?>"  >
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Prenom</label>
                                            <input type="text" class="form-control" name="prenom_cl"  value="<?php echo $donnees['prenom_cl'] ?> ">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Login</label>
                                            <input type="text" class="form-control" name="login_cl"  value="<?php echo $donnees['login_cl'] ?> ">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" name="email_cl"  value="<?php echo $donnees['email_cl'] ?> ">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Mot de passe</label>
                                            <input type="password" class="form-control" name="mdp_cl"  value="<?php echo $donnees['mdp_cl'] ?> ">
                                        </div>
                                        <div class="form-group ">
                                            <label for="example-fileinput">Passport</label>
                                            <input type="text" class="form-control" name="passport" value="<?php echo $donnees['passport'] ?> ">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary">Modifier</button>
                                    </form>
                                </div>
                            </div>
                            <!-- end col -->

                            

                        </div>
                        <!-- end row -->


                       


                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <?php include('includes/footer.php'); ?>

                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>

<!-- Mirrored from coderthemes.com/adminto/layouts/vertical/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Aug 2021 07:59:42 GMT -->
</html>