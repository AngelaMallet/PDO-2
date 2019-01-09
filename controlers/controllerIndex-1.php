<?php
require 'models/modelDatabase.php';
require 'models/modelPatients.php';
$patientsObj = new Patients();
$clientsPatients = $patientsObj->addAllpatients();
