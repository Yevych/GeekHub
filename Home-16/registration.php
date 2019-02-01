<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<div class="container">
    <form action="register.php" name="registration-form" method="post">
        <ul>
            <li>
                <label for="first_name">Enter your name:</label>
                <input type="text" name="first_name" id="first_name" required>
            </li>
            <li>
                <label for="last_name">Enter your last name:</label>
                <input type="text" name="last_name" id="last_name" required>
            </li>
            <li>
                <label for="age">Enter you age:</label>
                <input type="number" name="age" id="age" max="100" required>
            </li>
            <li>
                <label for="email">Enter you e-mail:</label>
                <input type="email" name="email" id="email" required>
            </li>
            <li>
                <label for="user_name">Write a username:</label>
                <input type="text" id="user_name" name="user_name" required>
            </li>
            <li>
                <label for="password">Choose a password:</label>
                <input type="password" name="password" id="password" required>
            </li>
            <li>
                <label for="password_repeat">Confirm password:</label>
                <input type="password" name="password_repeat" id="password_repeat" required>
                <span id="message"></span>
            </li>
            <li>
                <label for="sex">Indicate your gender:</label>
                <select name="sex" id="sex">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </li>
            <li>
                <input type="submit" id="submit" name="submit" value="Register">
            </li>
        </ul>

    </form>
</div>

<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>