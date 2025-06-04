<?php
// Backend: Handle form submission
$conn = new mysqli('localhost', 'root', '', 'userdb');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm-password'];

    if ($password === $confirm) {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $conn->prepare("INSERT INTO admins (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $hashedPassword);
        $stmt->execute();
        $stmt->close();
        echo "<script>alert('Signup successful! Redirecting to login...'); window.location.href='adminlogin.php';</script>";
    } else {
        echo "<script>alert('Passwords do not match');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
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
        .signup-container {
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
        .input-container { position: relative; }
        input[type="email"], input[type="password"], input[type="text"] {
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
            transition: color 0.3s ease;
        }
        .member-text a:hover {
            text-decoration: underline;
            color: #1565c0;
        }
    </style>
</head>
<body>
    <div class="signup-container">
        <div class="form-box">
            <h2>Signup Form</h2>
            <form class="form" method="POST" onsubmit="return validatePassword();">
                <input type="email" name="username" placeholder="Email Address" required>
                <div class="input-container">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <i class="fas fa-eye-slash eye-icon" id="toggle-password" onclick="togglePassword()"></i>
                </div>
                <div class="input-container">
                    <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password" required>
                    <i class="fas fa-eye-slash eye-icon" id="toggle-confirm-password" onclick="toggleConfirmPassword()"></i>
                </div>
                <button type="submit" class="submit-btn">Signup</button>
            </form>
            <p class="member-text">Already have an account? <a href="adminlogin.php">Login now</a></p>
        </div>
    </div>

    <script>
        function togglePassword() {
            const password = document.getElementById("password");
            const icon = document.getElementById("toggle-password");
            if (password.type === "password") {
                password.type = "text";
                icon.classList.replace("fa-eye-slash", "fa-eye");
            } else {
                password.type = "password";
                icon.classList.replace("fa-eye", "fa-eye-slash");
            }
        }

        function toggleConfirmPassword() {
            const confirm = document.getElementById("confirm-password");
            const icon = document.getElementById("toggle-confirm-password");
            if (confirm.type === "password") {
                confirm.type = "text";
                icon.classList.replace("fa-eye-slash", "fa-eye");
            } else {
                confirm.type = "password";
                icon.classList.replace("fa-eye", "fa-eye-slash");
            }
        }

        function validatePassword() {
            const pass = document.getElementById("password").value;
            const confirm = document.getElementById("confirm-password").value;
            if (pass !== confirm) {
                alert("Passwords do not match!");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
