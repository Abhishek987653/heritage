<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'userdb');

// Handle login POST request
$error = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM admins WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            header('Location: admin_dashboard.php');
            exit();
        } else {
            $error = "Invalid username or password.";
        }
    } else {
        $error = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <style>
        /* Same styles as before */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #ee70cc, #de52d0);
            color: #333;
            overflow: hidden;
        }
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            max-width: 400px;
        }
        .form-box {
            background-color: #fff;
            padding: 40px;
            border-radius: 12px;
            width: 100%;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.15);
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
            color: #0d47a1;
            position: relative;
        }
        h2::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 50%;
            width: 50px;
            height: 3px;
            background-color: #0d47a1;
            transform: translateX(-50%);
        }
        .form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        input[type="email"], input[type="password"] {
            padding: 12px;
            font-size: 16px;
            border-radius: 6px;
            border: 1px solid #ccc;
            width: 100%;
            transition: all 0.3s ease;
            font-family: monospace;
            letter-spacing: 1px;
        }
        input:focus {
            outline: none;
            border-color: #0d47a1;
            box-shadow: 0 0 5px rgba(13, 71, 161, 0.3);
        }
        .input-container {
            position: relative;
        }
        .eye-icon {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #0d47a1;
            font-size: 18px;
        }
        .submit-btn {
            background-color: #420d3d;
            color: #fff;
            border: none;
            padding: 12px;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .submit-btn:hover {
            background-color: #1565c0;
            transform: translateY(-2px);
            box-shadow: 0 5px 10px rgba(13, 71, 161, 0.3);
        }
        .member-text {
            margin-top: 20px;
            font-size: 14px;
        }
        .member-text a {
            color: #0d47a1;
            text-decoration: none;
        }
        .member-text a:hover {
            text-decoration: underline;
            color: #1565c0;
        }
        .error-msg {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="form-box">
            <h2>Admin Login Form</h2>
            <?php if ($error): ?>
                <div class="error-msg"><?php echo htmlspecialchars($error); ?></div>
            <?php endif; ?>
            <form id="login-form" class="form" method="POST" action="">
                <input type="email" name="username" placeholder="Email Address" required>
                <div class="input-container">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <i class="fas fa-eye-slash eye-icon" id="toggle-password" onclick="togglePassword()"></i>
                </div>
                <button type="submit" class="submit-btn">Login</button>
            </form>
            <br>
            <a href="./login.php" style="border:0;">Go to User Login</a>
            <p class="member-text">Not a Admin? <a href="adminsignup.php">Signup now</a></p>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const icon = document.getElementById('toggle-password');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            } else {
                passwordField.type = 'password';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            }
        }
    </script>
</body>
</html>
