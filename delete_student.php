<?php
require 'config.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("DELETE FROM student WHERE id =?");
$stmt->execute([$id]);

// Redirect to list after deletion
header("Location: list_students.php");
exit;
?>
