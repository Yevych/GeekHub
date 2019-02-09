<?php
require "database.php";
require "authorization.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP - Admin</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<div class="container">
    <h1>Profile - Admin</h1>
    <p><?php echo "Hello , " . $_SESSION["user_name"] . "!" ?></p>
    <button class="exit_btn">
        <a href="logout.php">Exit</a>
    </button>
    <button>
        <a href="add.php">Add post</a>
    </button>
    <button>
        <a href="all-posts.php">All posts</a>
    </button>
</div>

<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>