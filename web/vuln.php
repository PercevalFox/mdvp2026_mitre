<?php
$conn = new mysqli("db", "user", "password", "hackdb");
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id = '$id'");
while($row = $result->fetch_assoc()) {
    echo "User: " . $row['username'] . " - Pass: " . $row['password'];
}
?>
