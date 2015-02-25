<?php

//function to upload profile picture :: This is the function you are to work on
//check to be sure the user uploads picture and not any other kind of file.
//report error
//if upload does not work, do not continue to add user in the next function
function upload_user_profile_picture(){
	if(isset($_FILES['profile_picture'])){
    //profile picture is taking from a form.
	//upload picture as a blob
  }
  return $profile_picture; // return profile_picture as a blob
}

//function to add a new user :: returns boolean - using master control
  function master_add_user($conn, $user_id, $user_firstname, $user_lastname, $user_email, $user_password, $user_picture){
    //encrypt email
    $user_email = encrypt_user_email($user_email);
    //encrypt password
    $user_password = encrypt_user_password($user_password);

     if($this->user->add_user($conn, $user_id, $user_firstname, $user_lastname, $user_email, $user_password,
      upload_user_profile_picture()) == true){
      // alert user not added
      //add user details to session
     }
     else{
      //alert user not added
      //allow user to try or ask if pass is forgotten
     }
  }

  ?>