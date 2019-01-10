<?php
require 'models/modelDatabase.php';
require 'models/modelPatients.php';
$IdpatientsArrayObj = new Patients();
$IdPatientsArray = $IdpatientsArrayObj->Idpatients();
