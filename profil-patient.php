<?php
require_once 'controlers/controllerIndex-3.php';
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

        <link rel="stylesheet" href="style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
        <meta charset="utf-8" />
        <title>Profil du patient</title>
    </head>
    <body>

        <!--Fin du header et navbar -->
        <div class="container">
            <div class="row">
                <div class="col s12 m12 s12">
                    <h1>Profil patient :</h1>
                </div>
                   <div class="col s12 m6 l6">
                    <?php
                    // On affiche chaque entrée une à une
                    foreach ($IdPatientsArray as $patientId) { ?>
                    <ul>
                        <li>Prénom : <?= $patientId->firstname ?></li>
                        <li>Nom : <?= $patientId->lastname ?></li>
                        <li>Date de naissance : <?= $patientId->birthdate ?></li>
                        <li>N° de téléphone : <?= $patientId->phone ?></li>
                        <li>Adresse mail : <?= $patientId->mail ?></li>
                    </ul>
                       <hr>
                    <?php
                    }
                    ?>
                </ul>
                 <div class="col s12 m12 s12">
                    
                     <form method="post" action="index.php">
                         <input class="button" name="submit" type="submit" value="Retour" />
                    </form>

                </div>
            </div>
        </div>

        <!-- fin du footer -->
    
    </body>
</html>