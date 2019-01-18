<?php
require_once 'controlers/controllerListAllpatients.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
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
        <title>Liste des patients</title>
    </head>
    <body>
 <?php include 'nav.html';?>
        <!--Fin du header et navbar -->
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 center-align blue-grey-text text-blue-grey darken-3">
                    <h1>Liste des patients :</h1>
                </div>
                <div class="col s12 m6 l6">
                    <table>
                        <thead class="highlight blue-grey-text text-blue-grey darken-3">
                            <tr>
                                <th>NOM</th>
                                <th>PRÉNOM</th>
                                <th></th>
                            </tr>
                        </thead>                  
                    <?php
                    // On affiche chaque entrée une à une
                    foreach ($listPatientsArray as $patientsList) { ?>
                        
                        <tbody class="highlight blue-grey-text text-blue-grey darken-3">
                            <tr>
                                <td><?= $patientsList->lastname ?></td>
                                <td><?= $patientsList->firstname ?></td>
                                <td><button><a href="profil-patient.php?id=<?= $patientsList->id ?>" class="waves-effect waves-light btn-small white-text blue-grey">Détails</a></button></td>
                            </tr>   
                        </tbody>
                             <?php
                    }
                    ?>
                    </table>
                </div>
                 <div class="hide-on-small-only">
                    <div class="col s12 m6 l6 center-align">
                        <img class="clientsImg" width="650" height="700" src="thai.png" alt="Illustration médical">
                    </div>
                </div>
            </div>
        </div>
        <?php include 'home.html'; ?> 
        <!-- fin du footer -->
        
    </body>
</html>

