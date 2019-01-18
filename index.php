<?php
require_once 'controlers/controllerAjoutPatient.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <!--Import Google Font-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,400i,600,700,800" rel="stylesheet" />
        <!-- Favicons-->
        <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
        <link async href="http://fonts.googleapis.com/css?family=Warnes" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
        <meta charset="utf-8" />
        <title>Hospital</title>
    </head>
    <body>
        
        <!--Fin du header et navbar -->
        <?php include 'nav.html';?>
        <div class="container content">
            <div class="row row-content">
                <div class="col s12 m12 center-align blue-grey-text text-blue-grey darken-3">
                    <h1>HospitalE2N</h1>
                </div>
                <div class="container wrapper-align center-align left-part">
                    <img class="responsive-img hide-on-small-only" src="medical.jpg" alt="image jouets mdical" />
                </div>
            </div>    
            <div class="row">
                <div class="col s12 m12 l3"><a href="ajout-patient.php" class="waves-effect waves-light btn-large white-text blue-grey lighten-3">Inscription</a></div>
                <div class="col s12 m12 l3"><a class="waves-effect waves-light btn-large white-text blue-grey lighten-3">Profil</a></div>
                <div class="col s12 m12 l3"><a href="ajout-rendezvous.php"class="waves-effect waves-light btn-large white-text blue-grey lighten-3">RDV</a></div>
                <div class="col s12 m12 l3"><a href="liste-patients.php" class="waves-effect waves-light btn-large white-text blue-grey lighten-3">Patients</a></div>
            </div>
        </div>
        
        <!-- fin du footer -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
        <script type="text/javascript" src="materialize.min.js"></script>
        <script type="text/javascript" src="js.js"></script>
        
    </body>
</html>
