<?php
$globleConnectDB = array();
$globleConnectCartCheckout = array();
$globleConnectReport = array(); 
$globleRoutes = array();
require('configuration_db.php');

try {
    $username = $activedbusername;
    $password = $activedbpassword;
    $dbname = $activedb;

    $conn = new PDO("mysql:host=localhost;dbname=$activedb", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
    $stmt = $conn->prepare('SELECT * FROM configuration_site');
    $stmt->execute();
    while($row = $stmt->fetch()) {
        $globleConnectDB = $row;
    }
    
    $stmt = $conn->prepare('SELECT * FROM configuration_report');
    $stmt->execute();
    while($row = $stmt->fetch()) {
        $globleConnectReport = $row;
    }
    
    $stmt = $conn->prepare('SELECT * FROM configuration_cartcheckout');
    $stmt->execute();
    while($row = $stmt->fetch()) {
        $globleConnectCartCheckout = $row;
    }
    
    $stmt = $conn->prepare('SELECT id, uri FROM content_pages');
    $stmt->execute();
    while($row = $stmt->fetch()) {
        array_push($globleRoutes, $row);
    }
    
    
    
} catch(PDOException $e) {
 
}
