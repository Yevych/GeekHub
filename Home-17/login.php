<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP - Login</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<div class="container">
    <h1 class="text-center">Log in</h1>
    <form action="authorization.php" name="login-form" method="post">
        <ul>
            <li>
                <label for="login">Enter your username:</label>
                <input type="text" name="user_name" id="login" required>
            </li>
            <li>
                <label for="password">Enter your password:</label>
                <input type="password" name="password" id="password" required>
            </li>
            <li>
                <button type="submit" name="submit">Sign in</button>
                <button type="submit" name="submit">
                    <a href="registration.php">Sign up</a>
                </button>
            </li>
        </ul>
    </form>
</div>

<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>