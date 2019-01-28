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
                <h1>Liste des patients :</h1>
                
                    <div class="row">
                <div class="col l3 offset-l10 right-align">
                    <form action = "liste-patients.php" method = "POST">
                        <input type = "search" name = "terme">
                        <input class=" btn-small white-text blue-grey" type="submit" name = "s" value = "Rechercher">
                    </form>
                   
                </div>
            </div>
                <div class="col s12 m6 l6">
                    <table>
                        <thead class="highlight blue-grey-text text-blue-grey darken-3">
                            <tr>
                                <th>NOM</th>
                                <th></th>
                                <th>PRÉNOM</th>
                                 <th></th>
                                <th class="center-align">DÉTAILS</th>
                                <th></th>
                                <th class="center-align">SUPPRIMER LE PATIENT</th>
                                <th></th>
                            </tr>
                        </thead>                  
                    <?php
                    // On affiche chaque entrée une à une
                    foreach ($listPatientsArray as $patientsList) { ?>
                        
                        <tbody class="highlight blue-grey-text text-blue-grey darken-3">
                            <tr>
                                <td><?= $patientsList->lastname ?></td>
                                <td></td>
                                <td><?= $patientsList->firstname ?></td>
                                <td></td>
                                <td><button><a href="profil-patient.php?id=<?= $patientsList->id ?>" class="waves-effect waves-light btn-small white-text blue-grey">Détails</a></button></td>
                                <td></td>
                                <td><button><a class="waves-effect waves-light blue-grey darken-1 btn modal-trigger"  href="#modal1<?= $patientsList->id ?>">Supprimer</a></button></td>
                            </tr>   
                        </tbody>
                             <?php
                    }
                    ?>
                    </table>
                </div>

            </div>
        <?php
        foreach ($listPatientsArray as $patientsList) { ?>
            <div id="modal1<?= $patientsList->id ?>" class="modal">
                
                <div class="modal-content center-align">
                    <h6>Je confirme la suppression du patient.</h6>
                </div>
                <div class="modal-footer">
                    <a href="liste-patients.php?id=<?= $patientsList->id ?>" id="red" class="btn-floating btn-large waves-effect waves-light red "><i class="material-icons">delete</i></a>
                </div>
            </div>
    <?php
                    }
                    ?>
            
        </div>
    
        <?php include 'home.html'; ?> 
    <!-- fin du footer -->
    
</body>
</html>

