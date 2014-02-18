<?php
try {
	$db = new PDO('mysql:host=127.0.0.1;dbname=app','root','111111');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
	echo $e->getMessage();
	die('sorry, database problem');
}


class GuestbookEntry {
    public $id, $name, $message, $posted, $entry;
    
    public function __construct() {
        $this->entry = "{$this->name} posted : {$this->message}";
    }
}

$qry = $db->query('SELECT * FROM guestbook');

$qry->setFetchMode(PDO::FETCH_CLASS,'GuestbookEntry');

while($r = $qry->fetch()) {
	//echo '<pre>', print_r($r) , '</pre>';
	echo $r->entry, '<br>';
}
