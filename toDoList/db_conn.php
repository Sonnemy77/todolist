<?php
$sName = "localhost";
$uName = "root";
$pass = "root";
$db_name = "to_do_list";

try {
    $db = new PDO("mysql:host=localhost;dbname=to_do_list;metacharset=utf8", 'root', 'root');

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connected !"; //pour verifier en se connectant directement a partir de l'url db_conn.php
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
