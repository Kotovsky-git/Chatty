<?php
session_start();
require "db.php";

if(!isset($_SESSION['user_id'])) exit;

if(isset($_POST['msg']) && trim($_POST['msg']) !== '') {
    $msg = trim($_POST['msg']);
    $stmt = $pdo->prepare("INSERT INTO messages (username, message) VALUES (?, ?)");
    $stmt->execute([$_SESSION['username'], $msg]);
}
?>
