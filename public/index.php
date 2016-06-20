<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<?php include '../include/modules.php'; ?>
</head>
<body>
	<h2>Login Page</h2>
	<form action="login" method="POST">	
		<label>Username</label>
		<input type="text" name="username" required="" />
		<label>Password</label>
		<input type="password" name="password" required="" />
		<input type="submit" name="login" value="login" />
	</form>
</body>
</html>