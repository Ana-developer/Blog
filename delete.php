<?php

require "db_conn.php";

$query = "SELECT * FROM blog_posts WHERE is_deleted = 1 ORDER BY deleted_at DESC";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<div>";
    echo "Title: " . $row['title'] . "<br>";
    echo "Deleted At: " . $row['deleted_at'] . "<br>";
    
    echo "<a href='restore.php?post_id=" . $row['id'] . "'>Restore</a>";
    echo " | ";
    echo "<a href='permanent_delete.php?post_id=" . $row['id'] . "'>Permanently Delete</a>";
    echo "</div>";
}


?>
