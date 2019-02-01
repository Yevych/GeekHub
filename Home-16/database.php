<?php
/* Connection to the server MySQL */
$mysqli = new mysqli('localhost', 'root', '', 'registered_users');

if (mysqli_connect_errno()) {
    printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}

echo 'success </br>';
