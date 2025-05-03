<?php
require 'config.php';

$stmt =$pdo->query("SELECT * FROM student");
$students = $stmt->fetchAll();
?>

<head>
  <link rel="stylesheet" href="style.css">
</head>


<h2>Student List</h2>
<a href="add_student.php">Add New Student</a>
<table border="1" cellpadding="10">
    <tr>
        <th>ID</th><th>Fullname</th><th>Phone</th><th>Address</th><th>Email</th><th>Course</th><th>Actions</th>
    </tr>
    <?php foreach ($students as $student): ?>
        <tr>
            <td><?= $student['id'] ?></td>
            <td><?= $student['full_name'] ?></td>
            <td><?= $student['phone_num'] ?></td>
            <td><?= $student['address'] ?></td>
            <td><?= $student['email'] ?></td>
            <td><?= $student['course'] ?></td>
            <td>
                <a href="edit_student.php?id=<?= $student['id'] ?>">Edit</a>
                <a href="delete_student.php?id=<?= $student['id'] ?>" onclick="return confirm('Delete student?');">Delete</a>

            </td>
        </tr>
    <?php endforeach; ?>
</table>



