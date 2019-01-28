<?php
require 'models/modelDatabase.php';
require 'models/modalAppointments.php';


$rdvObj = new appointments();
$rdvObjArray=$rdvObj->ListAppointments();

if (isset($_GET['id'])) {
    $rdvObj->id = $_GET['id'];                                                                                                                                                                                                                                 
    $rdvObjArray = $rdvObj->deleteAppointments();
  $extra = 'liste-rendez-vous.php';
            header("Location: http://localhost:8888/PDO-P2/$extra");
            exit;
}

