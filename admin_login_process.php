<?php
session_start();

$conn = new mysqli("localhost", "root", "", "college_portal");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['admin_login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, name, password FROM admins WHERE email = ?");
    
    if ($stmt) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                $_SESSION['admin_id'] = $row['id'];
                $_SESSION['admin_name'] = $row['name'];
                header("Location: admin_dashboard.php");
                exit;
            } else {
                echo "❌ Incorrect password.";
            }
        } else {
            echo "❌ Admin not found.";
        }

        $stmt->close();
    } else {
        echo "❌ SQL error: " . $conn->error;
    }
}

$conn->close();
?>
