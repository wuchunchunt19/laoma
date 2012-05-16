<?php
	include_once 'C:/wamp/www/laoma/main_clase/user.php';
	
	$user_id = $_POST["user_id"];
	$user_name = $_POST["user_name"];
	$user_psd = $_POST["user_psd"];
	
	$user = new LaomaUser();
	$user->register($user_id, $user_name, $user_psd);