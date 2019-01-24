<?php
require_once 'controlers/controllerListAllPatients.php';
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
        <meta charset="utf-8" />
        <title>Inscription nouveau patient</title>
    </head>
     <!--Fin du header et navbar -->
        <?php include 'nav.html';?>
        <div class="container content">
            <div class="row row-content">
                <div class="col s12 m12 center-align blue-grey-text text-blue-grey darken-3">
                    <p>Bonjour et bienvenue chez HospitalE2N</p>
                    <h1>Vous êtes bien enregistré</h1>
                </div>
                <div class="container wrapper-align center-align left-part">
                    <img class="responsive-img hide-on-small-only" src="welcome.jpg" alt="image jouet ambulance" />
                     <a href="index.php" class="waves-effect waves-light red accent-1 btn-large">Retour</a>
                    <a href="profil-patient.php?id=<?= $_GET['id'] ?>" class="waves-effect waves-light red accent-1 btn-large">Votre espace</a>
                </div>
            </div> 
             <?php include 'home.html'; ?> 
        </div>
            
            
        <!-- fin du footer -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="js.js"></script>
</html>
