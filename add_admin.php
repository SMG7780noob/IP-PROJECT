<?php
$conn = new mysqli("localhost", "root", "", "college_portal");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = "Admin User";
$email = "admin@example.com";
$password = password_hash("admin123", PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO admins (name, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $password);
$stmt->execute();

echo "✅ Admin added!";
?>
