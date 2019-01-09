<?php
require 'models/modelDatabase.php';
require 'models/modelPatients.php';
$listpatientsArrayObj = new Patients();
$listPatientsArray = $listpatientsArrayObj->listAllpatients();
