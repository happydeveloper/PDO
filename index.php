<?php
try {
	$handler = new PDO('mysql:host=127.0.0.1;dbname=app','root','111111');
	$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo $e->getMessage();
	die();
}

$query = $handler->query('SELECT * FROM guestbook');

while($r = $query->fetch()) {
	echo $r["message"], '<br>';
}	
