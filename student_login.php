<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      background-color: #f0f4f7;
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
    }

    .login-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-box {
      background: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
      text-align: center;
    }

    .login-box h2 {
      margin-bottom: 20px;
      color: #003366;
    }

    .alert {
      margin-bottom: 15px;
      padding: 10px 15px;
      border-radius: 5px;
      font-size: 14px;
    }

    .alert i {
      margin-right: 8px;
    }

    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 12px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }

    input[type="submit"] {
      background-color: #003366;
      color: white;
      border: none;
      padding: 12px 0;
      width: 100%;
      border-radius: 6px;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
    }

    input[type="submit"]:hover {
      background-color: #0059b3;
    }
  </style>
</head>
<body>

<div class="login-container">
  <div class="login-box">
    <h2>Student Login</h2>

    <?php
    if (isset($_GET['msg']) && $_GET['msg'] === 'registered') {
        echo '<div class="alert" style="background-color: #d4edda; color: #155724; border-left: 4px solid #28a745;">
                ✅ Registration successful. Please log in.
              </div>';
    } elseif (isset($_GET['error'])) {
        if ($_GET['error'] === 'invalid') {
            echo '<div class="alert" style="background-color: #f8d7da; color: #721c24; border-left: 4px solid #dc3545;">
                    ❌ Invalid password.
                  </div>';
        } elseif ($_GET['error'] === 'notfound') {
            echo '<div class="alert" style="background-color: #f8d7da; color: #721c24; border-left: 4px solid #dc3545;">
                    ❌ User not found.
                  </div>';
        }
    } else {
        echo '<div class="alert" style="background-color: #e7f3fe; color: #084298; border-left: 4px solid #2196F3;">
                <i class="fa fa-user"></i> <strong>Students</strong> login with Email and Password.
              </div>';
    }
    ?>

    <form method="POST" action="login_process.php">
      <input type="email" name="email" placeholder="Enter Email" required>
      <input type="password" name="password" placeholder="Enter Password" required>
      <input type="submit" name="login" value="Login">
    </form>
  </div>
</div>

</body>
</html>
