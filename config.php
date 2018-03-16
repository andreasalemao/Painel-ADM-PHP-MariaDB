<?php

define(HOST,'localhost');
define(USER,'root');
define(PASS,'alema0');
define(DBSA,'siebert');

//class Conn {

try {
    $conn = new PDO('mysql:host=HOST;dbname=DBSA', USER, PASS);
    foreach($conn->query('SELECT * from FOO') as $row) {
        print_r($row);
    }
    $conn = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

//}

?>