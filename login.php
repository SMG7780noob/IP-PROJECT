<!DOCTYPE html>
<html>
<head>
    <title>Student Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        .logo {
            margin-bottom: 30px;
        }
        .logo img {
            width: 200px; 
        }
        .login-box {
            background-color: #ffffff;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            text-align: center;
        }
        .login-box h2 {
            margin-bottom: 25px;
            color: #333;
        }
        input[type="email"], input[type="password"] {
            width: 85%;
            padding: 12px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }
        input[type="submit"] {
            padding: 12px 30px;
            background-color: #0056b3;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #004494;
        }
    </style>
</head>
<body>

  
    <div class="logo">
        <img src="logo.png" alt="College Logo">
    </div>

    <div class="login-box">
        <h2>Login as Student</h2>
        <form method="POST" action="login_process.php">
            <input type="email" name="email" placeholder="Enter Email" required><br>
            <input type="password" name="password" placeholder="Enter Password" required><br>
            <input type="submit" name="login" value="Login">
        </form>
    </div>

</body>
</html>
