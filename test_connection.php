<?php
echo "Testing MySQL connection...\n";
try {
    $pdo = new PDO('mysql:host=mysql;dbname=fusio', 'root', 'test1234');
    echo "Connection successful!\n";
} catch (Exception $e) {
    echo "Connection failed: " . $e->getMessage() . "\n";
}
?>