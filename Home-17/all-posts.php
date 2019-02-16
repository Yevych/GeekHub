<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP - All Posts</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<div class="container">
    <button>
        <a href="add.php">Add post</a>
    </button>
    <button>
        <a href="welcome.php">Go to the Welcome Page</a>
    </button>

    <?php
    require "database.php";

    $sql = "SELECT * FROM posts ORDER BY id DESC";
    $result = $conn->query($sql);
    ?>
    <ul class="all-posts">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <li>
                    <h2><?php echo $row['title'] ?></h2>
                    <p><?php echo $row['text'] ?></p>
                    <p>Date published: <?php echo $row['date'] ?></p>
                    <p>Author: <?php echo $row['author'] ?></p>
                </li>
                <?php
            }
        } else {
            echo '<p>' . "0 results" . '</p>';
        }
        ?>
    </ul>
</div>

<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>