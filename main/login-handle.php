<?php
	include_once "C:/wamp/www/laoma/main_class/user.php";
	
	$user_id = $_POST["user_id"];
	$user_psd = $_POST["user_psd"];
	
	$user = new LaomaUser();
	$user->login($user_id, $user_psd);
	