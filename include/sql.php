<?php 

// user credentials
$login_user = $pdo->prepare('select * from haratisystem.username where username=? and password=?');

$image_path = $pdo->prepare('insert into haratisystem.username(username, password) values(?, ?)');

?>