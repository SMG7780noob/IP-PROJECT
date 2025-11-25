<?php
$conn = new mysqli("localhost", "root", "", "college_portal");

$username = "admin";
$password = password_hash("admin123", PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO admins (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $password);

if ($stmt->execute()) {
    echo "Admin created.";
} else {
    echo "Error: " . $stmt->error;
}
?>
