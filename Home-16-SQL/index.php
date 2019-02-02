<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "home";

$conn = new Mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// get data
$sql = "SELECT * FROM block WHERE theme = 'bartik' AND module = 'system'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<pre>SELECT * FROM block WHERE theme = 'bartik' AND module = 'system'</pre>";
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["bid"] . ";" . " - Module: " . $row["module"] . ";" . " - Theme: " . $row["theme"] . ";" . "<br>" . "<br>";
    }
} else {
    echo "0 results";
}

$sql = "SELECT * FROM node WHERE type = 'delivery' AND title LIKE '8046%' 
AND DATE_FORMAT(FROM_UNIXTIME(created), '%M') = 'October'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<br><pre>SELECT * FROM node WHERE type = 'delivery' AND title LIKE '8046%' 
AND DATE_FORMAT(FROM_UNIXTIME(created), '%M') = 'October'</pre>";
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["nid"] . ";" . " - Type: " . $row["type"] . ";" . " - Title: " . $row["title"] .
            ";" . " - Created: " . date("d.m.Y H:i", $row['created']) . ";" . "<br>" . "<br>";
    }
} else {
    echo "0 results";
}

// get data with join
$sql = "SELECT node.nid, node.title, users.name, users.mail FROM node 
LEFT JOIN users ON node.uid = users.uid WHERE users.name = 'serhiy' ORDER BY node.created DESC LIMIT 20";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<br><pre>SELECT node.nid, node.title, users.name, users.mail FROM node 
LEFT JOIN users ON node.uid = users.uid WHERE users.name = 'serhiy' ORDER BY node.created DESC LIMIT 20</pre>";
    while ($row = $result->fetch_assoc()) {
        echo " Node id: " . $row["nid"] . ";" . " Node title: " . $row["title"] . ";" . " - Username: " . $row["name"] . ";" .
            " - User email: " . $row["mail"] . "<br>" . "<br>";
    }
} else {
    echo "0 results";
}

$sql = "SELECT * FROM variable WHERE name LIKE '%cache%' AND name != 'cache'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<br><pre>SELECT * FROM variable WHERE name LIKE '%cache%' AND name != 'cache'</pre>";
    while ($row = $result->fetch_assoc()) {
        echo " Variable name: " . $row["name"] . ";" . "<br>" . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();