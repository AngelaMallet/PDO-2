<?php
require 'models/modelDatabase.php';
require 'models/modelPatients.php';
$listpatientsArrayObj = new Patients();
$listPatientsArray = $listpatientsArrayObj->listAllpatients();



if (isset($_GET['id'])) {
    $listpatientsArrayObj->id = $_GET['id'];                                                                                                                                                                                                                                 
   $listPatientsArray = $listpatientsArrayObj->DeletePatient();
  $extra = 'liste-patients.php';
            header("Location: http://localhost:8888/PDO-P2/$extra");
            exit;
}