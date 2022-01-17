<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/adminto/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Aug 2021 11:46:37 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Index</title>
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
            <?php include('includes/header.php')?>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
           <?php include('includes/menu.php')?>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                             <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                

                                 <a href="listeadmin.php">   <h4 class="header-title mt-0 mb-4"> Administrateurs</h4></a>

                                    <div class="widget-chart-1">
                                        <div class="widget-detail-1 text-right" dir="ltr">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#ffbd4a"
                                                    data-bgColor="#FFE6BA" value="<?php include('includes/connect_db.php');
                                                                            $req_admin = $bdd->query("SELECT count(id_ad) as total_admin from admin");
                                                                            $donnees_admin = $req_admin->fetch();
                                                                            echo $donnees_admin['total_admin']; ?>"
                                                    data-skin="tron" data-angleOffset="180" data-readOnly=true
                                                    data-thickness=".15"/>
                                        </div>
                                       
                                    </div>
                                </div>
        
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                   

                                    <a href="listeclient.php">  <h4 class="header-title mt-0 mb-4">Clients</h4></a>

                                    <div class="widget-chart-1">
                                        <div class="widget-detail-1 text-right" dir="ltr">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#f05050 "
                                                   data-bgColor="#F9B9B9" value="<?php include('includes/connect_db.php');
                                                                            $req_client = $bdd->query("SELECT count(id_cl) as total_client from client");
                                                                            $donnees_client = $req_client->fetch();
                                                                            echo $donnees_client['total_client']; ?>"
                                                   data-skin="tron" data-angleOffset="180" data-readOnly=true
                                                   data-thickness=".15"/>
                                        </div>

                                    </div>
                                </div>

                            </div><!-- end col -->
                              <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                

                                    <h4 class="header-title mt-0 mb-4">Abonnés </h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-detail-1 text-right" dir="ltr">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#10c469"
                                                    data-bgColor="#10c46933" value="<?php include('includes/connect_db.php');
                                                                            $req_abonne = $bdd->query("SELECT count(id_vol) as total_abonne from vol ");
                                                                            $donnees_abonne = $req_abonne->fetch();
                                                                            echo $donnees_abonne['total_abonne']; ?>"
                                                    data-skin="tron" data-angleOffset="180" data-readOnly=true
                                                    data-thickness=".15"/>
                                        </div>
                                       
                                    </div>
                                </div>
        
                            </div>

                             <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                

                                    <h4 class="header-title mt-0 mb-4">Demande en cour </h4>

                                    <div class="widget-chart-1">
                                        <div class="widget-detail-1 text-right" dir="ltr">
                                            <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#10c469"
                                                    data-bgColor="#10c46933" value="<?php include('includes/connect_db.php');
                                                                            $req_abonne = $bdd->query("SELECT count(id_hot) as total_abonne from hotel ");
                                                                            $donnees_abonne = $req_abonne->fetch();
                                                                            echo $donnees_abonne['total_abonne']; ?>" 
                                                    data-skin="tron" data-angleOffset="180" data-readOnly=true
                                                    data-thickness=".15"/>
                                        </div>
                                       
                                    </div>
                                </div>
        
                            </div>

                            













<!-- end col -->
 
                           <!-- end col -->

                            <!-- end col -->

                        </div>
                        <!-- end row -->

                     
                        <!-- end row -->


                     
                        <!-- end row -->


                       
                        <!-- end row -->       
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <?php include('includes/footer.php')?>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close"></i>
                </a>
                <h4 class="font-16 m-0 text-white">Theme Customizer</h4>
            </div>
            <div class="slimscroll-menu">

                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, layout, etc.
                    </div>
                    <div class="mb-2">
                        <img src="assets/images/layouts/light.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/dark.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" 
                            data-appStyle="assets/css/app-dark.min.css" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/rtl.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/dark-rtl.png" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-rtl-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" 
                            data-appStyle="assets/css/app-dark-rtl.min.css" />
                        <label class="custom-control-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
                    </div>

                    <a href="https://1.envato.market/k0YEM" class="btn btn-danger btn-block mt-3" target="_blank"><i class="mdi mdi-download mr-1"></i> Download Now</a>
                </div>
            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

     

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- knob plugin -->
        <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>

        <!--Morris Chart-->
        <script src="assets/libs/morris-js/morris.min.js"></script>
        <script src="assets/libs/raphael/raphael.min.js"></script>

        <!-- Dashboard init js-->
        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>

<!-- Mirrored from coderthemes.com/adminto/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Aug 2021 11:46:38 GMT -->
</html>