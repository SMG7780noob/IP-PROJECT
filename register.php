<?php
$conn = new mysqli("localhost", "root", "", "college_portal");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

   
    $check = $conn->prepare("SELECT id FROM students WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        
        header("Location: student_register.php?msg=exists");
        exit;
    } else {
        $stmt = $conn->prepare("INSERT INTO students (name, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $password);

        if ($stmt->execute()) {
           
            header("Location: student_login.php?msg=registered");
            exit;
        } else {
            
            header("Location: student_register.php?msg=error");
            exit;
        }
        $stmt->close();
    }

    $check->close();
    $conn->close();
}
?>
