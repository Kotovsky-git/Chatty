<?php
require "db.php";

$stmt = $pdo->query("SELECT username, message, created_at FROM messages ORDER BY created_at ASC");
$messages = $stmt->fetchAll();

header('Content-Type: application/json');
echo json_encode($messages);
?>
