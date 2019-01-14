<?php
require_once 'controlers/controllerIndex.php';
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
        <title>Hospital</title>
    </head>
    <body>
         <?php include 'nav.html';?>
        <?php if ($addSuccess) { ?>
                                <h2><?= 'Patient enregistré !' ?></h2>
                            <?php } ?>
        <h1 class="formTitle center-align blue-grey-text text-blue-grey darken-3">Formulaire d'inscription</h1>
        <div class="container center-align">
            <div class="row">
                <form method="POST" class="col s12 l12" action="ajout-patient.php">
                    <div class="row">
                        <div class="input-field col s6">
                            <input type="text" class="text" name="firstname" value="<?= (isset($patientsObj->firstname)) ? $patientsObj->firstname : ''; ?>" placeholder="Votre prénom*" required />
                            <p><?= isset($formError['firstname']) ? $formError['firstname'] : '' ?></p>
                        </div>
                        <div class="input-field col s6">
                            <input type="text" class="text" name="lastname" value="<?= (isset($patientsObj->lastname)) ? $patientsObj->lastname : ''; ?>" placeholder="Votre nom de famille*" required />
                            <p><?= isset($formError['lastname']) ? $formError['lastname'] : '' ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="email" class="text" name="mail" value="<?= (isset($patientsObj->mail)) ? $patientsObj->mail : ''; ?>" placeholder="Votre adresse mail*" required />
                            <p><?= isset($formError['mail']) ? $formError['mail'] : '' ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <label>Votre date de naissance au format : jj/mm/aaaa*</label>
                            <input type="text" class="date" name="birthdate"value="<?= (isset($patientsObj->birthdate)) ? $patientsObj->birthdate : ''; ?>" required />
                            <p><?= isset($formError['birthdate']) ? $formError['birthdate'] : '' ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <label>Votre N° de téléphone*</label>
                            <input type="tel" class="tel" name="phone" value="<?= (isset($patientsObj->phone)) ? $patientsObj->phone : ''; ?>" maxlength="10" size="10"required />
                            <p><?= isset($formError['phone']) ? $formError['phone'] : '' ?></p>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light red accent-1 btn-large" type="submit" name="send">Envoyer
                        <i class="material-icons right">send</i>
                        <?= isset($formError['send']) ? $formError['send'] : '' ?>
                    </button>
                </form>
            </div>
        </div>
        <?php include 'home.html'; ?> 
        
        <!-- fin du footer -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="js.js"></script>
        
    </body>
</html>


