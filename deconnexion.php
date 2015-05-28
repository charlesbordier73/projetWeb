<?php
	if(isset($_COOKIE['id']) && isset($_COOKIE['token']))
    {	
    	setcookie("id", "", time()-1,"/");
		setcookie("token", "", time()-1,"/");
    	header('Location:index.php');
    }
?>

