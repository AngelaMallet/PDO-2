<?php
require 'models/modelDatabase.php';
require 'models/modelPatients.php';
require 'models/modalAppointments.php';
    
$listpatientsArrayObj = new Patients();
$listPatientsArray = $listpatientsArrayObj->listAllpatients();
$rdvObj = new appointments();
    
$showAppointmentForm =TRUE;
$formErrordateHour = [];   

    
if (isset($_POST['idPatients'])) {
    $rdvObj->idPatients= htmlspecialchars($_POST['idPatients']); 
} 

////firstname
if (isset($_POST['dateHour'])) {
    //Si: je récupère la valeur de dateHour
    $rdvObj->dateHour = htmlspecialchars($_POST['dateHour']); 
   
  
    if (empty($_POST['dateHour'])) {
        
        $formErrordateHour['dateHour'] = 'Saisie vide';
    }
}
    if (count($formErrordateHour) == 0 && isset($_POST['sendAppointments'])) {
        $count = $rdvObj->checkFree();
        if($count > 0){
            echo 'Le rendez-vous est déjà pris';
        } else {
           
             $rdvObj->addAppointments(); 
             $extra = 'liste-patients.php';
            header("Location: http://localhost:8888/PDO-P2/$extra");
            exit;
        }
  
}
    
