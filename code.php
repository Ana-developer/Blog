<?php
session_start();
require "db_conn.php";

//delete and move to trash
 if (isset($_GET['delete']) && is_numeric($_GET['delete'])) {
        $postId = $_GET['delete'];

        
        $conn->query("SET FOREIGN_KEY_CHECKS = 0");

        // Move post to trash
        $moveToTrashSql = "INSERT INTO trash (post_id) VALUES ($postId)";
        if ($conn->query($moveToTrashSql) === TRUE) {
            $_SESSION['message'] = "Blog Deleted  and Moved to Trash Successfully";
            header("Location: index.php");
            exit(0);
            // Delete post
            $deletePostSql = "DELETE FROM blog_posts WHERE id = $postId";
            if ($conn->query($deletePostSql) === TRUE) {
                $_SESSION['message'] = "Blog Deleted Successfully";
                header("Location: index.php");
                exit(0);
            } else {
                echo "Error deleting post: " . $conn->error;
            }
        } else {
            echo "Error moving post to trash: " . $conn->error;
        }

        $conn->query("SET FOREIGN_KEY_CHECKS = 1");
    }


    $activePostsSql = "SELECT id, title, textarea, image_url  FROM blog_posts";
    $activePostsResult = $conn->query($activePostsSql);

    if ($activePostsResult->num_rows > 0) {
        while ($row = $activePostsResult->fetch_assoc()) {
            echo "<h2>" . $row["title"] . "</h2>";
            echo "<p>" . $row["textarea"] . "</p>";
            
            echo "<a href=\"?delete={$row['id']}\">
            <p>Delete and Move to Trash</a></p>";
        }
    } else {
        echo "No active posts found.";
    }

    $conn->close();



if(isset($_POST['update']))
{
    $blog_id = mysqli_real_escape_string($conn, $_POST['blog_id']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['textarea']);
    $image = mysqli_real_escape_string($conn, $_POST['image_url']);

    $query = "UPDATE blog_posts  SET title='$title', textarea='$content', image_url='$image'
     WHERE id='$blog_id'";

     $query_run = mysqli_query($conn, $query);

     if($query_run )
     {
      $_SESSION['message'] = "Blog Updated Successfully";
        header("Location: index.php");
        exit(0);
     }
     else{
      $_SESSION['message'] = "Blog Not Updated";
        header("Location: index.php");
        exit(0);
     }

}


?>
