<?php
try {
    $handler = new PDO('mysql:host=127.0.0.1;dbname=app','root','111111');
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo $e->getMessage();
    die();
}


$query = $handler->query('SELECT * FROM guestbook');

$result = $query->fetchAll(PDO::FETCH_ASSOC);


if(count($result)) {
    echo 'There are result 결과가 있습니다.';
} else {
    echo 'There are no result 결과가 없습니다.';
}