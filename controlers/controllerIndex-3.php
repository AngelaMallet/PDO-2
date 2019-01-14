<?php
require 'models/modelDatabase.php';
require 'models/modelPatients.php';



$IdpatientsArrayObj = new patients();

if (isset($_GET['id'])) {
    $IdpatientsArrayObj->id = $_GET['id'];
    $IdPatientsArray = $IdpatientsArrayObj->Idpatients();
}