<?php
include_once('./includes/functions.php');
/**
* 
*/
class Model_User{

    //user id
	var $user_id;
	//firstname
    var $user_firstname;
    //lastname
    var $user_lastname;
    //email
    var $user_email;
    //password
    var $user_password;
    //user_picture
    var $user_picture;
    //user query
    var $user_query;
    //query status
    var $query_status;
    //user details
    var $user_details;
    //key
    var $thekey;
	
    //constructor
	function __construct(){
        $this->query_status = true;
        $this->user_details = null;
        $this->user_query = null;
        $this->thekey = "mhbjhjhjkjjkogjrbg093ti";
		
	}

    //destructor
	function __destruct(){

	}


     //function to create an instance of a new user
     function create_newuser($user_id, $user_firstname, $user_lastname, $user_email, $user_password, $user_picture){
        $newuser = new Model_User();
        $newuser->user_id = generate_user_id();
        $newuser->user_firstname;
        $newuser->user_lastname;
        $newuser->user_email;
        $newuser->user_password;
        $newuser->user_picture;
       
    }
    
    //function to add user to user table
    function add_user($conn, $user_id, $user_firstname, $user_lastname, $user_email, $user_password, $user_picture){
        $this->user_query_status = true;
        $this->user_query = mysqli_query($conn, "CALL add_user('$user_id', '$user_firstname', '$user_lastname', '$user_email', '$user_password', '$user_picture') ");
        if ($this->user_query) {
            $this->user_query_status = false;
            exit();
        }
        return $this->user_query_status;
    }


    //function to check if user owns pass
    function confirm_password($conn, $user_email, $user_password){
        //encrypt user's mail
       // echo $user_email;
       // echo "before<br>";
        $user_email = encrypt($user_email, $this->thekey);
        echo $user_email;
        echo "<br>";
        /*echo "The truth<br>";
        echo $user_email;
        echo "<br>";*/
        //encrypt user's password
        $user_password = encrypt($user_password, $this->thekey);
        echo $user_password;

            $this->user_query = mysqli_query($conn, "CALL verify_user('$user_email','$user_password')");//return wanted values
            $row = mysqli_fetch_array($this->user_query, MYSQLI_ASSOC);
            $numrows = mysqli_num_rows($this->user_query);
            $this->user_details = $row;
            return $numrows;
    }
    

    //function to get user details after signing in
    function  get_user_details(){
        return $this->user_details; 
    }

    //function to change email  :: update email
    function change_user_email($conn, $user_id, $user_old_email, $user_new_email, $user_password){
        $this->user_query_status = true;
        if ($this->confirm_password($conn, $user_old_email, $user_password) == true) {
            $this->user_query = mysqli_query($conn, "CALL change_user_email('$user_new_email', '$user_id'");
            if ($this->user_query == null) {
                $this->user_query_status = false;
            }
        }
    }

    //function to change profile picture
    function change_user_profile_picture($conn, $user_id, $user_picture){
        $this->user_query_status = true;
        $this->user_query = mysqli_connect($conn, "CALL change_user_picture($user_picture, '$id')");
        if ($this->user_query == null) {
            $this->user_query_status = false;
            exit();
        }
    }

    //function to change user's names
    function change_user_names($conn, $user_id, $user_new_firstname, $user_new_lastname){
        $this->user_query_status = true;
        $this->user_query = mysqli_query($conn, "CALL change_user_names('$user_new_firstname', '$user_new_lastname')");
        if ($this->user_query == null) {
            $this->user_query_status = false;
        }
    }

    //function to change user's password
    function change_user_password($conn, $user_id, $user_new_password, $user_old_password){
        $this->user_query_status = true;
        if ($this->confirm_password($conn, $user_email, $user_old_password) == true) {
            $this->user_query = mysqli_query($conn, "CALL change_user_password('$user_new_password', $user_id')");
            if ($this->user_query == null) {
                $this->user_query_status = false;
            }
        }
    }

    
}

?>