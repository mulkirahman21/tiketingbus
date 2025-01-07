<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: white;
            width: 350px;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .login-container img {
            display: block;
            margin: 0 auto 15px;
            max-width: 100px;
        }

        .login-container h1 {
            text-align: center;
            font-size: 18px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        .form-group input:focus {
            outline: none;
            border-color: red;
        }

        .login-container .btn {
            width: 100%;
            padding: 10px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .login-container .btn:hover {
            background-color: darkred;
        }

        .login-container .forgot-password {
            text-align: right;
            margin-top: 10px;
            font-size: 12px;
        }

        .login-container .forgot-password a {
            color: red;
            text-decoration: none;
        }

        .login-container .register {
            text-align: center;
            margin-top: 15px;
            font-size: 12px;
        }

        .login-container .register a {
            color: red;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="logo.png" alt="Biu Bus">
        <h1>Biu Bus</h1>
        <form action="process_login.php" method="POST">
            <div class="form-group">
                <label for="email_phone">Email / Phone number</label>
                <input type="text" id="email_phone" name="email_phone" placeholder="Enter your email or phone number" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="forgot-password">
                <a href="#">Lupa Password</a>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
        <div class="register">
            Belum punya akun? <a href="register.php">Daftar</a>
        </div>
    </div>
</body>
</html>
