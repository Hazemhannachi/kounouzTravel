<?php session_start();
?>

<head>
    
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</head>

<style type="text/css">
    body {
    background: rgb(99, 39, 120)
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
</style>


<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="img/<?php echo  $_SESSION['img_ad'] ?>"><span class="font-weight-bold"><?php echo  $_SESSION['nom_ad'] ?></span><span class="text-black-50"><?php echo $_SESSION['email_ad'] ?></span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
               <form action="controller/modifAdmin.php" method="POST">
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Nom</label><input type="text" class="form-control" placeholder="enter phone number" value="<?php echo  $_SESSION['nom_ad'] ?>"></div>
                    <div class="col-md-12"><label class="labels">Prenom</label><input type="text" class="form-control" placeholder="enter address line 1" value="<?php echo $_SESSION['prenom_ad'] ?>"></div>
                    <div class="col-md-12"><label class="labels">Login</label><input type="text" class="form-control" placeholder="enter address line 2" value="<?php echo $_SESSION['login_ad'] ?>"></div>
                    <div class="col-md-12"><label class="labels">Email address</label><input type="text" class="form-control" placeholder="enter address line 2" value="<?php echo $_SESSION['email_ad'] ?>"></div>
                </div>
               
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
</form>
            </div>
        </div>
        
    </div>
</div>
</div>
</div>