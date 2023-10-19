<?php
function submitToDatabase($name, $phone) {
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "sms";

    try {
        // Create a PDO connection
        $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
        echo "Connected Succesfully";
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

}
?>
