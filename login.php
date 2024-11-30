<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <div class="container">
        <h1></h1>
        <div class="login-container">
            <h2>Sign in</h2>
            <form action="index.php" method="POST">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Login</button>
            </form>
            
            <div class="register-link">
                <p>Don't have an account? <a href="register.php">Register di sini</a></p>
            </div>
        </div>
</body>
</html>