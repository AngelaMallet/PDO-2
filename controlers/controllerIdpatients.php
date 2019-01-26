<?php
require 'models/modelDatabase.php';
require 'models/modelPatients.php';
require 'models/modalAppointments.php';


$IdpatientsArrayObj = new patients();
$RDVpatientsObj = new appointments();


if (isset($_GET['id'])) {
    $RDVpatientsObj->idPatients = $IdpatientsArrayObj->id = $_GET['id'];
    $IdPatientsArray = $IdpatientsArrayObj->Idpatients();
    $IdpatientsArrayObj->birthdate;
    $RDVpatientsArray = $RDVpatientsObj->showAppointment();
}






// $IdpatientsArrayObj->birthdate = date('Y-m-d', strtotime($date));