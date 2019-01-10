<?php
require_once 'models/modelDatabase.php';
require_once 'models/modelPatients.php';
$patientsObj = new Patients();

if ((empty($formError)) && ($_POST['send'])) {
    $patientsObj->addAllpatients();
}