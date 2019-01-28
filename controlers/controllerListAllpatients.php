<?php
require 'models/modelDatabase.php';
require 'models/modelPatients.php';
$listpatientsArrayObj = new Patients();

   
if (isset($_GET['id'])) {
    $listpatientsArrayObj->id = $_GET['id'];                                                                                                                                                                                                                                 
   $listPatientsArray = $listpatientsArrayObj->DeletePatient();
  $extra = 'liste-patients.php';
            header("Location: http://localhost:8888/PDO-P2/$extra");
            exit;
}
    
    
if (isset($_POST['s'])) {
    $listpatientsArrayObj->search = $_POST['terme'];
    $listPatientsArray = $listpatientsArrayObj->find();
} else {
    $listPatientsArray = $listpatientsArrayObj->listAllpatients();
}
?>