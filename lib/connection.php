<?php
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

$servername = "185.115.218.166";
$username = "natalia21";
$password = "DjAn0Ca3a9pF4s5Q71MJ";
$dbname = "natalia21";

function CreateConnection(){
    global $conn;
    global $servername, $dbname, $username, $password;
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
CreateConnection();