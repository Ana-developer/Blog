<!DOCTYPE html>
<html lang="en">
<head>
<title>My Blogs</title>
</head>
<body>
    <div class="container">
        <h1>Blog Posts</h1>
        <?php

include "db_conn.php";

    $sql = "SELECT * FROM blog_posts";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div>";
            echo "<h2>" . $row["title"] . "</h2>";
            echo "<p>" . $row["textarea"] . "</p>";
            if (!empty($row["image_url"])) {
                echo '<img src="' . $row["image_url"] . '" alt="Blog Image">';
            }
            echo "</div>";
        }
    } else {
        echo "No blogs found.";
    }

    $conn->close();
        
        ?>

</body>
</html>