<?php
require_once 'controlers/controllerDetailsAppointments.php';
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
        <title>Espace rendez-vous du patient</title>
    </head>
    <body>
         <?php include 'nav.html';?>
        <!--Fin du header et navbar -->
        <div class="container">
            <div class="row">
                <div class="col s12 m12 s12">
                    <h1>Rendez-vous du patient :</h1>
                </div>
                <div class="col s12 m12 l12">
                    <table>
                        <thead class="highlight blue-grey-text text-blue-grey darken-3">
                            <tr>
                                <th>NOM</th>
                                <th>PRÉNOM</th>
                                <th>RENDEZ-VOUS</th>
                                <th></th>
                            </tr>
                        </thead>                  
                        <tbody class="highlight blue-grey-text text-blue-grey darken-3">
                            <tr>
                                <td><?= $rdvDetailObjArray->lastname ?></td>
                                <td><?= $rdvDetailObjArray->firstname ?></td>
                                <td><?= $rdvDetailObjArray->dateHour ?></td>
                                <td><button><a href="modif-rendezvous.php?id=<?= $rdvDetailObjArray->id ?>" class="waves-effect waves-light btn-small white-text blue-grey">Modifier</a></button></td>
                            </tr>   
                        </tbody>
                    </table>
                </div>
                 <?php include 'home.php'; ?> 
            </div>
            
            <!-- fin du footer -->
            
    </body>
</html>

