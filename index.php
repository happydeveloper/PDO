<?php
try {
	$db = new PDO('mysql:host=127.0.0.1;dbname=app','root','111111');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
	echo $e->getMessage();
	die('sorry, database problem');
}

$qry = $db->query('SELECT * FROM guestbook');

$r = $qry->fetch();

echo '', print_r($r);

