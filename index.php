<?php
try {
	print_r(PDO::getAvailableDrivers());	
	$db = new PDO('mysql:host=127.0.0.1;dbname=appp','root','111111');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
	echo $e->getMessage();
	die('sorry, database problem');
}

$query = $db->query('SELECT * FROM guestbook');

$r = $query->fetch();

var_dump($r);
