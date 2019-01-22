<?php
require 'models/modelDatabase.php';
require 'models/modalAppointments.php';


$rdvDetailObj = new appointments();

if (isset($_GET['id'])) {
    $rdvDetailObjArray->id = $_GET['id'];
    $rdvDetailObjArray = $rdvDetailObj->appointmentsDetail();
}





 
