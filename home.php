<?php
require_once 'controlers/controllerListAllpatients.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <!--Import Google Font-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,400i,600,700,800" rel="stylesheet" />
        <!-- Favicons-->
        <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
        
        <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
        <meta charset="utf-8" />
    </head>
    <body>
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large blue-grey">
                <i class="large material-icons">add_circle</i>
            </a>
            <ul>
                <div data-tooltip="RENDEZ-VOUS"><li><a href="ajout-rendezvous.php" class="btn-floating  red accent-1"><i class="large material-icons">date_range</i></a></li></div>
                <div data-tooltip="INSCRIPTION"><li><a href="ajout-patients.php" class="btn-floating  red accent-1"><i class="large material-icons">add_circle</i></a></li></div>
                <div data-tooltip="PROFIL"><li><a href="profil-patient.php?id=<?= $patientsList->id ?>" class="btn-floating red accent-1"><i class="large material-icons">account_circle</i></a></li></div>
                <div data-tooltip="ACCUEIL"><li><a href="index.php" class="btn-floating red accent-1"><i class="large material-icons">home</i></a></li></div>
            </ul>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
        <script type="text/javascript" src="materialize.min.js"></script>
        <script type="text/javascript" src="js.js"></script>
    </body>
</html>
