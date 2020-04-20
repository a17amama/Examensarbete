<?php

include_once 'database.php';

$json = file_get_contents('php://input');

$data = json_decode($json, true);

$sql = 'CREATE TABLE IF NOT EXISTS datalog(id INTEGER auto_increment PRIMARY KEY,datum text,phpdatum TIMESTAMP,itemName text,pageurl text);';
$conn->query($sql);

$query = $conn->prepare('INSERT INTO datalog(datum,phpdatum,itemName,pageurl) VALUES ( ?,CURRENT_TIMESTAMP, ?, ?)');

if($query !== false) {
    $query->bind_param('sss', $data['datum'], $data['name'], $data['url']);
} else {
    print_r($conn->error);
}


if(!$query->execute()) {
        $error=$query->errorInfo();
        return "Error:\nImporting  element\n".$error[2];
}    

return 'success';

?>