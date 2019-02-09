<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP - Add Post</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<div class="container">
    <h1>Status post</h1>

    <?php
    require "database.php";

    if (isset($_POST['add'])) {
        $title = strip_tags(trim($_POST['title']));
        $text = strip_tags(trim($_POST['text']));
        $author = strip_tags(trim($_POST['author']));
        $date = $_POST['date'];

        $sql = "INSERT INTO posts(title, text, date, author) VALUES ('$title', '$text', '$date', '$author')";
        $result = $conn->query($sql);
        $conn->close();

        echo 'Congratulations! The post is added!</br>' .
            '<p><button><a href="all-posts.php">All posts</a></button></p>';
    } else {
        echo "Error adding post";
    }
    ?>

</div>

<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
