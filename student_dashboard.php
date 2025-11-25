<?php
session_start();
if (!isset($_SESSION['student_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f0f2f5;
            margin: 0;
            padding: 0;
        }

        .dashboard {
            max-width: 600px;
            margin: 100px auto;
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        h2 {
            color: #333;
        }

        .logout-btn {
            margin-top: 20px;
            background: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        .logout-btn:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <h2>Welcome, <?php echo $_SESSION['student_name']; ?> 👋</h2>
        <p>You are logged in as a student.</p>
        <a class="logout-btn" href="logout.php">Logout</a>
    </div>
</body>
</html>
