<html>
<head>
	<title>Just Checking</title>
	<link rel="stylesheet" type="text/css" href="design/style.css">
	<link rel="stylesheet" type="text/css" href="design/bootstrap.min.css">
</head>
<body>
	<?php 
	$del = unlink('image/C20160618hotel-512.png');

	if ($del) {
		echo "Deleted";
	} else {
		echo "Not Deleted";
	}
	?>
</body>
</html>