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

// Fetch students for the table
$students = $conn->query("SELECT id, name, email FROM students");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #eef1f5;
            margin: 0;
        }
        .navbar {
            background-color: #2c3e50;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 20px;
        }
        .tabs {
            display: flex;
            justify-content: center;
            background: #34495e;
        }
        .tabs button {
            background: #34495e;
            color: white;
            border: none;
            padding: 14px 20px;
            cursor: pointer;
        }
        .tabs button:hover {
            background: #2c3e50;
        }
        .tabs button.active {
            background: #1abc9c;
        }
        .tab-content {
            padding: 30px;
            display: none;
        }
        .tab-content.active {
            display: block;
        }
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background: #2980b9;
            color: white;
        }
        tr:hover {
            background: #f1f1f1;
        }
        .logout {
            float: right;
            margin-right: 20px;
            margin-top: -40px;
            background: #e74c3c;
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<div class="navbar">
    Welcome Admin 👋
    <form method="post" action="logout.php" style="display:inline;">
        <button class="logout" type="submit" name="logout">Logout</button>
    </form>
</div>

<div class="tabs">
    <button class="tab-btn active" onclick="showTab('dashboard')">Dashboard</button>
    <button class="tab-btn" onclick="showTab('students')">View Students</button>
</div>

<div id="dashboard" class="tab-content active">
    <h2>🎓 This is the secure admin dashboard.</h2>
    <p>You can manage students, courses, and more from here.</p>
</div>

<div id="students" class="tab-content">
    <h2>📋 Registered Students</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php while($row = $students->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= htmlspecialchars($row['name']); ?></td>
            <td><?= htmlspecialchars($row['email']); ?></td>
        </tr>
        <?php } ?>
    </table>
</div>

<script>
    function showTab(tabId) {
        document.querySelectorAll('.tab-content').forEach(el => el.classList.remove('active'));
        document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
        document.getElementById(tabId).classList.add('active');
        event.target.classList.add('active');
    }
</script>

</body>
</html>

<?php $conn->close(); ?>
