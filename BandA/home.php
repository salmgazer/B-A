<?php

echo '<h1>Welcome to B&F '.$controller->user_control->user->user_details['user_firstname'].'</h1>';

?>
<html>
	<img src="<?php echo $controller->user_control->user->user_details['user_picture']; ?>">
</html>