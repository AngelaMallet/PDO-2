    <?php
require_once 'controlers/controllerFormRdv.php';
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
        <title>Demande de rendez-vous</title>
    </head>
    <body>
        <!--Fin du header et navbar -->
        <?php include 'nav.html';?>
        <div class="container content">
            <div class="row row-content">
                <div class="hide-on-small-only">
                    <div class="col s12 m6 center-align">
                        <img class="responsive-img" width="300" height="200" src="hours.png">
                    </div>
                </div>
                <div class="container center-align">
                    <div class="row">
                        <form method="POST" class="col s12 m12 l12" action="ajout-rendezvous.php">
                            <div class="row">
                                <div class="input-field col s12 m12 l12 left-align">
                                    <select name="idPatients">
                                        <option value="" disabled selected>Nom du patient :</option>
                        <?php foreach ($listPatientsArray as $patientsList) { ?>
                            
                                        <option value="<?= $patientsList->id ?>"><?= $patientsList->lastname . ' ' . $patientsList->firstname ?></option>
                        <?php
                        }
                        ?>
                                    </select>
                                </div>

                                <div class="s12 m12 l12 left-align">
                                    <label>Veuillez choisir le jour et l'heure du rendez-vous :</label>              
                                    <input type="datetime-local" name="dateHour" class = "datepicker" value="<?= (isset($rdvObj->dateHour)) ? $rdvObj->dateHour : ''; ?>" required /> 
                                        
                                </div>                            
                                    
                                <button class="btn waves-effect waves-light red accent-1 btn-small" type="submit" name="sendAppointments">Envoyer
                                    <i class="material-icons right">send</i>
                                </button>
                                
                            </div>
                        </form>   
                 
                    </div>
                        
                </div> 
              <?php include 'home.html'; ?> 
            </div>
                
            <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
            <!-- Compiled and minified JavaScript -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/js/materialize.min.js"></script>
            <script src="js.js"></script>
                
                
                