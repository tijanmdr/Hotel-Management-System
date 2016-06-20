<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<?php include '../include/modules.php'; ?>
</head>
<body>
	<?php

	$username = $_REQUEST['username'];
	$password = md5($_REQUEST['password']);
	$count = 0;

	$login_user->execute([$username, $password]);

	// if ($login_user->rowCount() == 1) {
	// 	$_SESSION['htlsession'] = $username;

	// 	header("Location: dashboard");
	// } else if ($login_user->rowCount() == 0) {
	// 	echo "Login credentials are wrong";
	// }

	while ($r = $login_user->fetch()) {
		$count++;
	}

	if ($count == 1) {
		$_SESSION['htlsession'] = $username;
		header("Location: dashboard.php");
	} else {
		
	}

	?>
</body>
</html>