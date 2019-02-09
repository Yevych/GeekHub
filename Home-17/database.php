<?php
/* Connection to the server MySQL */
$conn = new mysqli('localhost', 'root', '', 'registered_users');
$conn->query("SET NAMES utf8");

if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}