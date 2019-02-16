<?php
require "database.php";
require "authorization.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP - Add Post</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<div class="container">
    <h1 class="text-center">Add New Post</h1>
    <form action="add-post.php" method="post" class="add-post">
        <ul>
            <li>
                <label for="title">Title post:</label>
                <input type="text" name="title" id="title" required>
            </li>
            <li>
                <label for="text"> Enter text:</label>
                <textarea type="password" name="text" id="text" required></textarea>
            </li>
            <li>
                <label for="author">Author:</label>
                <input type="text" name="author" id="author" value="<?php echo $_SESSION["user_name"]; ?>" required disabled>
            </li>
            <li>
                <input type="hidden" name="date" value="<?php echo date('Y-m-d'); ?>">
            </li>
            <li>
                <input type="submit" name="add" value="Add post">
            </li>
        </ul>
    </form>
</div>

<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>