<?php
require "database.php";

function del($key)
{
    return (isset($_POST[$key])) ? strip_tags(trim($_POST[$key])) : null;
}

//push button check
if (isset($_POST['submit'])) {
    $first_name = del('first_name');
    $last_name = del('last_name');
    $age = del('age');
    $email = del('email');
    $user_name = del('user_name');
    $password = md5(del('password'));
    $sex = del('sex');

    if (!empty($first_name) && !empty($user_name) && !empty($password)) {
        $query = "SELECT * FROM `users` WHERE user_name ='$user_name'";
        $result = $conn->query($query);

        if ($result->num_rows == 0) {
            $string_ins = $conn->query("INSERT INTO 
                       `users` (`id`, `first_name`, `last_name`, `age`, `email`, `user_name`, `password`, `sex`)
                        VALUES (' ', '$first_name', '$last_name', '$age', '$email', '$user_name', '$password', '$sex')");

            header('Location: /login.php');
            $conn->close();
            exit();
        } else {
            echo 'Login already exists. Select another login';
        }

    }
}