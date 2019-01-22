<?php
require 'models/modelDatabase.php';
require 'models/modalAppointments.php';


$rdvObj = new appointments();
$rdvObjArray=$rdvObj->ListAppointments();


 
