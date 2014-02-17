<?php
try {
	$db = new PDO('mysql:host=127.0.0.1;dbname=app','root','111111');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
	echo $e->getMessage();
	die('sorry, database problem');
}

$qry = $db->query('SELECT * FROM guestbook');

//$r = $qry->fetch(PDO::FETCH_BOTH);
//$r = $qry->fetch(PDO::FETCH_NUM);
//$r = $qry->fetch(PDO::FETCH_ASSOC);
//$r = $qry->fetch(PDO::FETCH_OBJ);
//echo '<pre>', print_r($r), '</pre>';

while($r = $qry->fetch(PDO::FETCH_OBJ)) {
	echo $r->message, '<br>';
}

