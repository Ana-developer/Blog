<!DOCTYPE html>
<html>
<head>
    <title>My Drafts</title>
</head>
<body>
    <h1>My Drafts</h1>
    
    <?php
  include "db_conn.php";

    $sql = "SELECT * FROM drafts";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div>";
            echo "<h2>" . $row["title"] . "</h2>";
            echo "<p>" . $row["content"] . "</p>";
            if (!empty($row["image_url"])) {
                echo '<img src="' . $row["image_url"] . '" alt="Draft Image">';
            }
            echo "</div>";
        }
    } else {
        echo "No drafts found.";
    }

    $conn->close();
    ?>
</body>
</html>
