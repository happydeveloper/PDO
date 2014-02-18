<?php
try {
    $hdlr = new PDO('mysql:host=127.0.0.1;dbname=app','root','111111');
    $hdlr->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
    echo $e->getMessage();
    die();
}

$name = 'Joshua1';
$message = 'Test1';

$sql = "INSERT INTO guestbook (name, message, posted) VALUES (:name, :message, NOW())";
$query = $hdlr->prepare($sql);
$query->execute(array(
    ':name' => $name,
    ':message' => $message
));
