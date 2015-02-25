<?php
require_once('includes/initiate.php');
include_once('includes/functions.php');

echo '<br><h1 style="color: red;">'.upload_user_profile_picture().'</h1>';

if($control->user_control->master_add_user($control->connect->dbc, '98794nk78hjgk', '98hiw89jhmb8jhgbjer', 'Joe12mhvj3', 'salhvhg@gmail.com', 'tobethbvcgfgmjfgebest', 'mshsb8738fj.jpg')){
	echo "User has been added";
}else{
	echo "Problem adding user";
}

if ($control->user_control->master_sign_in($control->connect->dbc,'sajsfbhjl@gmail.com', 'tobethsgnvchmjfgebest')) {
	echo "Sign in successful<br>";
	echo 'user email is : '.$control->user_control->user->user_details['user_email'];
}else{
	echo "Sign in False";
}
?>







<!--
<!DOCTYPE html>
<html>
<head>
	<title>Testing BandA</title>
</head>
<body>
<form method="POST" enctype="multipart/form-data" action="<?php $_SERVER[PHP_SELF]; ?>">
	<div><label>Upload Resume (pdf)</label>
    <input type="file" id="profile_picture" name="profile_picture" value="Upload picture"> </div>
    <button type="submit">Submit</button>
</form>
</body>
</html>
-->
