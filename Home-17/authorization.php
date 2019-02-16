<?php
require "database.php";
session_start();
if (isset($_POST['submit'])) {

    $username = mysqli_real_escape_string($conn, trim($_POST['user_name']));
    $password = md5(mysqli_real_escape_string($conn, trim($_POST['password'])));
    if ($result = $conn->query("SELECT * FROM users WHERE user_name ='$username' AND password = '$password'")) {
        if ($row = $result->fetch_assoc()) {
            $_SESSION['session_userID'] = $row['id'];
            $_SESSION['user_name'] = $username;
            header('Location: /welcome.php');
        } else {
            header('Location: /login.php');
        }
    }
    $conn->close();
}
