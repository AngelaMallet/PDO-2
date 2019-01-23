<?php
require 'controlers/controllerModifAppointments.php';
?>
    
<!DOCTYPE html>
<html lang="fr">
    <head>
        <!--Import Google Font-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,400i,600,700,800" rel="stylesheet" />
         <!--Favicons-->
        <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            
         <!--INCLUDED PLUGIN CSS ON THIS PAGE--> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="style.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
        <meta charset="utf-8" />
        <title>Modifier votre rendez-vous</title>
    </head>
    <body>
        <!--Fin du header et navbar--> 
        <?php include 'nav.html';?>
        <?php if ($addSuccess) { ?>
        <h2><?= 'Patient modifié !' ?></h2>
        <?php } ?>
        <div class="container content">
            <div class="row row-content">
                <div class="hide-on-small-only">
                    <div class="col s12 m6 center-align">
                        <img class="responsive-img" width="300" height="200" src="hours.png">
                    </div>
                </div>
                <div class="container center-align">
                    <div class="row">
                        <form method="POST" class="col s12 m12 l12">
                            <div class="row">
                            <div class="s12 m12 l12 left-align">
                                    <label>Nom et prénom :</label>              
                                    <input type="text" name="patient" class = "disable" value="<?= $rdvDetailObjArray->firstname . ' ' .$rdvDetailObjArray->lastname ?>"/>  
                                </div>  

                                <div class="s12 m12 l12 left-align">
                                    <label class="red-text text-red accent-1">Date et heure à modifier : <div id="modif" class="red-text text-red accent-1" ><?= (isset($rdvDetailObjArray->dateHour)) ? $rdvDetailObjArray->dateHour : ''; ?></div></label>              
                                    <input type="datetime-local" name="dateHourModif" class = "datepicker" value="<?= (isset($rdvDetailObj->dateHourModif)) ? $rdvDetailObj->dateHourModif : ''; ?>" required /> 
                                     <p><?= isset($formError['dateHour']) ? $formError['dateHour'] : '' ?></p>   
                                </div>  
                          
                                <button class="btn waves-effect waves-light red accent-1 btn-small" type="submit" name="sendModif">Envoyer
                                    <i class="material-icons right">send</i>
                                </button>
                                
                            </div>
                        </form>   
                 
                    </div>
                        
                </div> 
              <?php include 'home.html'; ?> 
            </div>
        </body> 
            <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
             <!--Compiled and minified JavaScript--> 
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/js/materialize.min.js"></script>
            <script src="js.js"></script>
        </html>        
                
                