<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=school", "root", "");
} catch (PDOException $e) {
    echo " Connection failed: " . $e->getMessage();
}
?>