<?php
// selected and uploaded a file

if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['size'] > 0) {


// Temporary file name stored on the server

$tmpName = $_FILES['profile_picture']['tmp_name'];


// Read the file

$fp = fopen($tmpName, 'r');

$profile_picture = fread($fp, filesize($tmpName));

$profile_picture = addslashes($data);

fclose($fp);

return $profile_picture;
}

else {

return "You have not selected a picture"

}

?>