<?php
    
require_once 'models/modelDatabase.php';
require_once 'models/modelPatients.php';
require_once 'models/modalAppointments.php';

$rdvDetailObj = new appointments();

if (isset($_GET['id'])) {
    $rdvDetailObj->id = $_GET['id'];
    $rdvDetailObjArray = $rdvDetailObj->appointmentsDetail();
}     
    
    
// Déclaration des regeX
//$regexDateHour = '/^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/(19([0-9]{2})|20([01][0-9])) ([01]?[0-9]|2[0-3]):[0-5][0-9]$/';

    
    
//Initialise $addSuccess en False pour afficher message
$addSuccess = false;
//Initialise $hideSuccess en true pour afficher inputform
$hideSuccess = true;
    
    
// Déclaration d'un tableau d'erreurs
$formError = [];

    
////lastname
if (isset($_POST['dateHourModif'])) {
    $rdvDetailObj->dateHourModif = htmlspecialchars($_POST['dateHourModif']);
    if (empty($_POST['dateHourModif'])) {
        $formError ['dateHourModif'] = 'Saisie vide';
    }
        
}

// Je regarde s'il n'y a pas d'erreurs dans le formulaire 
// S'il n'y a pas d'erreurs et que je clique sur le bouton send alors 
//j'envoi les nouvelles données dans ma table client
if (count($formError) == 0 && isset($_POST['sendModif'])) {
    $temp=$rdvDetailObj->dateHour;
    $rdvDetailObj->dateHour=$rdvDetailObj->dateHourModif;
    $count = $rdvDetailObj->checkFree();
        if($count > 0){
            $rdvDetailObj->dateHour=$temp;
            echo 'Le rendez-vous est déjà pris';
        } else {
    $rdvDetailObj->modifAppointment(); 
    $addSuccess = TRUE;
        }
}
     /* Redirection vers une page différente du même dossier */
//$extra3 = "modif-rendezvous.php";
//header("Location: http://localhost:8888/PDO-P2/$extra3?id=$ModifAnAppointment->id");
//exit;
//}
//on vérifie que nous avons crée une entrée submit dans l'array $_POST, si présent on éxécute la méthode addPatient()
