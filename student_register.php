<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f2f2f2;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .register-box {
            background-color: #fff;
            padding: 40px 30px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            border-radius: 10px;
            text-align: center;
            width: 350px;
        }

        .register-box h2 {
            color: #003366;
            margin-bottom: 25px;
        }

        .message {
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 6px;
            font-weight: bold;
        }

        .success { background-color: #d4edda; color: #155724; }
        .error { background-color: #f8d7da; color: #721c24; }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }

        input[type="submit"] {
            background-color: #003366;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            width: 100%;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0059b3;
        }
    </style>
</head>
<body>
    <div class="register-box">
        <h2>Register as Student</h2>

        <?php
        if (isset($_GET['msg'])) {
            if ($_GET['msg'] == 'success') {
                echo '<div class="message success">✅ Registered successfully!</div>';
            } elseif ($_GET['msg'] == 'error') {
                echo '<div class="message error">❌ Something went wrong. Try again.</div>';
            } elseif ($_GET['msg'] == 'exists') {
                echo '<div class="message error">⚠️ Email already exists!</div>';
            }
        }
        ?>

        <form method="POST" action="register.php">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <input type="password" name="password" placeholder="Your Password" required>
            <input type="submit" name="register" value="Register">
        </form>
    </div>
</body>
</html>
