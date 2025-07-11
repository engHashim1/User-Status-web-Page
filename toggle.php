<?php
$conn = new mysqli("localhost", "root", "", "user_data");

$id = $_GET['id'];
$result = $conn->query("SELECT status FROM users1 WHERE id=$id");
$row = $result->fetch_assoc();
$new_status = $row['status'] == 0 ? 1 : 0;

$conn->query("UPDATE users1 SET status=$new_status WHERE id=$id");

echo $new_status;
?>
