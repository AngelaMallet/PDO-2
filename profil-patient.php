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
            <pre><?php
            print_r($IdPatientsArray);
            ?></pre>
            <div class="row">
                <div class="col s12 m12 s12">
                    <h1>Profil patient :</h1>
                </div>
                    <div class="col s12 m6 l6">
                       
                    <ul>
                        <li>Prénom : <?= $IdPatientsArray->firstname ?></li>
                        <li>Nom : <?= $IdPatientsArray->lastname ?></li>
                        <li>Date de naissance : <?= $IdPatientsArray->birthdate ?></li>
                        <li>N° de téléphone : <?= $IdPatientsArray->phone ?></li>
                        <li>Adresse mail : <?= $IdPatientsArray->mail ?></li>
                    </ul>
                    </ul>
                        <div class="col s12 m12 s12">
                     
                     
                    </div>
                </div>
            </div>
            
            <!-- fin du footer -->
            
    </body>
</html>