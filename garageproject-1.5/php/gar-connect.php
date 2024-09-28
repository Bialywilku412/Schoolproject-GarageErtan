<?php
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "projectertan";

try {
    $database = new PDO("mysql:host=localhost;dbname=projectertan", $dbUsername, $dbPassword);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connectie mislukt:" . $e->getMessage();
}

?>