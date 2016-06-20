<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<?php include '../include/modules.php'; ?>
</head>
<body>
	<h2>Dashboard</h2>
	
	<?php
	if ($_SESSION['htlsession']) {
		echo "Session Correct";
	} else {
		echo $_SESSION['htlsession'];
	}
	?>
</body>
</html>