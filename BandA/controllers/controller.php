<?php

//add all controllers
include_once('controls.php');
//add functions.php
//functions.php contains functions independent of the models
include_once('./includes/functions.php');

/**
* 
*/
class Controller{

	//user control
	var $user_control;
	//post control
	var $post_control;
	//follower control
	var $follower_control;
	//connection
	var $connect;
	
	function __construct(){
		//a new instance of Controller_User 
		//Controller_User is the controller for Model_User class
		$this->user_control = new Controller_User();
		//a new instace of Controller_Follower
		//Controller_Follower is the controller for Mdoel_Follower class
		$this->follower_control = new Controller_Follower();
		//a new instance of Controller_Post
		//Controller_Post is the controller
		$this->post_control = new Controller_Post();
		//a new instance of Connect
		//Connect helps connect to mysql and connect to a database
		$this->connect = new Connect();
		//check is connected to mysql server
		if($this->connect->connect_server()==true){
		 //pick database to work with
		 $this->connect->pickdatabase(DB_NAME, $this->connect->dbc);	
		}
	}

    //destructor for the class
	function __destruct(){

	}

    //function to signin using master controller
	function sign_in($user_email, $user_password){
		//return true if user exists, false otherwise
		//calls master_sign_in() in Controller_User
		//master_sign_in() calls confirm_password in Model_User class
		return $this->user_control->master_sign_in($this->connect->dbc, $user_email, $user_password);
	}
	


}

?>