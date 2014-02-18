<?php
try {
    $hdlr = new PDO('mysql:host=127.0.0.1;dbname=app','root','111111');
    $hdlr->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
    echo $e->getMessage();
    die();
}

$sql = "INSERT INTO guestbook (name, message, posted) VALUES ('Joshua', 'Test', NOW())";
$hdlr->query($sql);