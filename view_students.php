<?php
session_start();


if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit();
}


$conn = new mysqli("localhost", "root", "", "college_portal");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$result = $conn->query("SELECT id, name, email FROM students");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registered Students</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            padding: 30px;
        }
        h2 {
            text-align: center;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #4a90e2;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .back-btn {
            display: block;
            width: 100px;
            margin: 20px auto;
            text-align: center;
            background: #4a90e2;
            color: white;
            text-decoration: none;
            padding: 10px;
            border-radius: 5px;
        }
        .back-btn:hover {
            background: #357abd;
        }
    </style>
</head>
<body>

<h2>📋 Registered Students</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
    <?php while($row = $result->fetch_assoc()) { ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= htmlspecialchars($row['name']); ?></td>
        <td><?= htmlspecialchars($row['email']); ?></td>
    </tr>
    <?php } ?>
</table>

<a class="back-btn" href="admin_dashboard.php">⬅ Dashboard</a>

</body>
</html>

<?php $conn->close(); ?>
