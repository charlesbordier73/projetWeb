<?php
	
	setcookie("id", "", time()-3600);
	unset($_COOKIE['token']);
    //header('Location:index.php');
	echo "toto";
	echo $_COOKIE['id'];
?>

