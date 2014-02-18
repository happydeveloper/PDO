<?php
try {
    $hdlr = new PDO('mysql:host=127.0.0.1;dbname=app','root','111111');
    $hdlr->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
    echo $e->getMessage();
    die();
}

$name = 'Joshua2';
$message = 'Test3';

$sql = "INSERT INTO guestbook (name, message, posted) VALUES (?, ?, NOW())";
$query = $hdlr->prepare($sql);
$query->execute(array($name,$message));


$name = 'Joshua4';
$message = 'Test4';


$query->execute(array($name,$message));
