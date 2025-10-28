<?php
echo "Testing MySQL connection...\n";
try {
    $pdo = new PDO('mysql:host=mysql;dbname=fusio', 'root', 'test1234');
    echo "SUCCESS: Connected to MySQL\n";

    // Test query
    $stmt = $pdo->query("SELECT COUNT(*) as count FROM information_schema.tables WHERE table_schema = 'fusio'");
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "Tables in fusio database: " . $result['count'] . "\n";

    $pdo = null;
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
}
?>