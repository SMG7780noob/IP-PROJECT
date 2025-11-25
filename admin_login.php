<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: #f5f6fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-box {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            text-align: center;
            width: 350px;
        }
        .login-box img {
            width: 70px;
            margin-bottom: 20px;
        }
        .login-box h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .login-box input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 6px;
            border: 1px solid #ccc;
        }
        .login-box input[type="submit"] {
            background-color: #2e86de;
            color: white;
            border: none;
            cursor: pointer;
        }
        .login-box input[type="submit"]:hover {
            background-color: #1b4f72;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <!-- Lock icon or logo -->
        <img src="lock.png" alt="Admin Lock Icon">
        <h2>Admin Login</h2>
        <form method="POST" action="admin_login_process.php">
            <input type="email" name="email" placeholder="Admin Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <input type="submit" name="admin_login" value="Login">
        </form>
    </div>
</body>
</html>
