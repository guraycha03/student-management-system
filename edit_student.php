<?php
require 'config.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT*FROM student WHERE id = ?");
$stmt->execute([$id]);
$student = $stmt->fetch();

if (!$student){
    die("Student not found!");
}

if ($_SERVER['REQUEST_METHOD']== 'POST'){
    $full_name = $_POST['full_name'];
    $phone = $_POST['phone_num'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    $stmt = $pdo->prepare("UPDATE student SET full_name=?, phone_num=?, address=?, email=?, course=? WHERE id=?");
    $stmt->execute([$full_name, $phone_num, $address, $email, $course, $id]);

    header("Location: list_students.php");
}
?>

<head>
  <link rel="stylesheet" href="style.css">
</head>

<h1>Edit Student</h2>
<form method="post">
    Fullname: <input type="text" name="full_name" value="<?= $student['full_name'] ?>" required><br>
    Phone: <input type="number" name="phone_num" value="<?= $student['phone_num'] ?>" required><br>
    Address: <input type="text" name="address" value="<?= $student['address'] ?>" required><br>
    Email: <input type="email" name="email" value="<?= $student['email'] ?>" required><br>
    Course: <input type="text" name="course" value="<?= $student['course'] ?>" required><br>
    <input type="submit" value="Update">
</form>
<a href="list_students.php" class="add-btn">← Back to List</a>



