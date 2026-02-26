<?php
try {
    $conn = new PDO("mysql:host=127.0.0.1;port=3306", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("CREATE DATABASE IF NOT EXISTS GAZA");
    file_put_contents('db_creation_log.txt', "Database GAZA creation attempted.\n");
} catch(PDOException $e) {
    file_put_contents('db_creation_log.txt', "Connection failed: " . $e->getMessage() . "\n");
}
