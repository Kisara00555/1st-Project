<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "db.php"; // include database connection

$message = '';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $age = $_POST['age'];

    // Insert query
    $sql = "INSERT INTO students (name, address, age) VALUES ('$name', '$address', '$age')";
    if (mysqli_query($connection, $sql)) {
        $message = "✅ Student added successfully!";
    } else {
        $message = "❌ Error: " . mysqli_error($connection);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP SAMPLE CRUD APPLICATION</title>
    <style>
        .form-group {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        .form-group label {
            width: 130px;
            font-weight: bold;
        }
        .form-group input {
            width: 200px;
            padding: 5px;
            flex:unset;
        }
        .message {
            font-size: 1.1em;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <?php if ($message) echo "<div class='message'>$message</div>"; ?>

    <h1>Add Student</h1>
    <form method="POST">
        <div class="form-group">
            <label for="name">Student Name:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div class="form-group">
            <label for="address">Student Address:</label>
            <input type="text" name="address" id="address" required>
        </div>
        <div class="form-group">
            <label for="age">Student Age:</label>
            <input type="text" name="age" id="age" required>
        </div>
        <input type="submit" name="submit" value="Save">