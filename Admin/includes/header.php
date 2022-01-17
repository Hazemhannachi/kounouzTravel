
<?php session_start();
?>
<?php
                                include('includes/connect_db.php');
                                $req_not = $bdd->query("SELECT * FROM contact ORDER BY id_cont DESC LIMIT 5");
                            ?>
<div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                  
        
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle  waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="fe-bell noti-icon"></i>
                            <span class="badge badge-danger rounded-circle noti-icon-badge">
                                            
                                                     <?php include('includes/connect_db.php');
                                                                            $req_abonne = $bdd->query("SELECT count(id_cont) as total_contact from contact ");
                                                                            $donnees_abonne = $req_abonne->fetch();
                                                                            echo $donnees_abonne['total_contact']; ?>
                                                    
                                        
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0">
                                    <span class="float-right">
                                        <a href="#" class="text-dark">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                                </h5>
                            </div>

                            <?php

                        while ($donnees_not = $req_not->fetch()) {

                          
                        ?>
                            <div style="overflow: hidden;width: auto;  height: 100px !important ;">

                            
                                
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary">
                                        <i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details"><?php echo $donnees_not['nompre_cont'] ?>
                                    <p class="notify-details"><?php echo $donnees_not['sujet'] ?></p>
                                        <small class="notify-details">1 min ago</small>
                                    </p>
                                </a>
                                
                            </div>
<?php } ?>
                            <!-- All-->
                            

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="img/<?php echo $_SESSION['img_ad'] ?>" alt="user-image" class="rounded-circle">
                            <span class="pro-user-name ml-1">
                            <?php echo $_SESSION['login_ad']?> <i class="mdi mdi-chevron-down"></i> 
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Bienvenue !</h6>
                            </div>

                            <!-- item-->
                            <a href="profil.php" class="dropdown-item notify-item">
                                <i class="fe-user"></i>
                                <span>Profile</span>
                            </a>

                            <!-- item-->
                           

                            <!-- item-->
                            


                            <!-- item-->
                            <a href="includes/deconnecter.php" class="dropdown-item notify-item">
                                <i class="fe-log-out"></i>
                                <span>déconnexion</span>
                            </a>

                        </div>
                    </li>

                 

                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo logo-dark text-center">
                        <span class="logo-lg" style="text-align: left;">
                            <img src="assets/images/logos.png" alt="" height="100">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
                    <li>
                        <button class="button-menu-mobile disable-btn waves-effect">
                            <i class="fe-menu"></i>
                        </button>
                    </li>

                    <li>
                        <h4 class="page-title-main">Admin Only !</h4>
                    </li>
        
                </ul>

            </div>