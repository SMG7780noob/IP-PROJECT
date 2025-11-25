<?php
session_start();
$conn = new mysqli("localhost", "root", "", "college_portal");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM students WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $res = $stmt->get_result();

    if ($res->num_rows === 1) {
        $row = $res->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['student_id'] = $row['id'];
            $_SESSION['student_name'] = $row['name'];
            header("Location: student_dashboard.php");
            exit;
        } else {
            echo "❌ Incorrect password.";
        }
    } else {
        echo "❌ Student not found.";
    }
}
?>
