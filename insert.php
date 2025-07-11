<?php
$conn = new mysqli("localhost", "root", "", "user_data");

$name = $_POST['name'];
$age = $_POST['age'];

$conn->query("INSERT INTO users1 (name, age) VALUES ('$name', $age)");

header("Location: index.php");
?>
