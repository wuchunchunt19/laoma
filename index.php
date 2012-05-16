<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>MLGB</title>
</head>
<h1>login</h1>
<body>
	<form action= "./main/login-handle.php" method="post">
	Enter your id: <input type="text" name="user_id" />
	Enter your password: <input type="text" name="user_psd" />
	<input value="login" type="submit" />
</form>
</body>
</html>

<?php
	session_start(); 
?>