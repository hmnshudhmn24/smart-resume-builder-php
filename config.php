<?php
$host = 'localhost';
$db = 'smart_resume';
$user = 'root';
$pass = '';
$openai_api_key = 'YOUR_OPENAI_API_KEY';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>