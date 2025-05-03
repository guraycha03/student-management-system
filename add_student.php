<?php
require 'config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $full_name = $_POST['full_name'];
    $phone_num = $_POST['phone_num'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $stmt = $pdo->prepare("INSERT INTO student (full_name, phone_num, address, email, course) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$full_name, $phone_num, $address, $email, $course]);

    header("Location: list_students.php");
}
?>

<head>
  <link rel="stylesheet" href="style.css">
</head>

<h2>Add New Student</h2>

<form method="post">
    <label>Fullname:</label>
    <input type="text" name="full_name" required>

    <label>Phone:</label>
    <input type="number" name="phone_num" required>

    <label>Address:</label>
    <input type="text" name="address" required>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Course:</label>
    <input type="text" name="course" required>

    <input type="submit" value="Save">
</form>

<br>

<a href="list_students.php" class="add-btn">← Back to List</a>


