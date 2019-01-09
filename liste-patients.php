<?php
require_once 'controlers/controllerIndex-2.php';
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
        <title>Formulaire</title>
    </head>
    <body>

        <!--Fin du header et navbar -->
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h1>Liste des patients :</h1>
                </div>
                   <div class="col s12 m6 l6">
                    <?php
                    // On affiche chaque entrée une à une
                    foreach ($listPatientsArray as $patientsList) { ?>
                    <ul>
                        <li>Prénom : <?= $patientsList->firstname ?></li>
                        <li>Nom : <?= $patientsList->lastname ?></li>
                    </ul>
                 <div class="col s12 m12 l12">
                    <form method="post" action="profil-patient.php">
                         <input class="buttonPatient" type="submit" value="Profil Patient" />
                    </form>

                </div>
                       <hr>
                    <?php
                    }
                    ?>
                </ul>
                 <div class="col s12 m12 l12">
                    
                     <form method="post" action="index.php">
                         <input class="button" type="submit" value="Formulaire d'inscription" />
                    </form>

                </div>
            </div>
        </div>

        <!-- fin du footer -->
    
    </body>
</html>