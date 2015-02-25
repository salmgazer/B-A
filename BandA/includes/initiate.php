<?php

//Add all controllers :  controllers have instance of class models
include('controllers/controller.php');

//a single instance of controller to manage program
$control  = new Controller();

//see which database is selected
//echo $control->connect->connection_status;

?>