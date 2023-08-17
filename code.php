<?php
session_start();
require "db_conn.php";


//delete post
// if(isset($_POST['delete']))
// {
//    $blog_id = mysqli_real_escape_string($conn, $_POST['delete']);
//    $query = "DELETE FROM blog_posts WHERE id='$blog_id'";
//    $query_run = mysqli_query($conn, $query);

//    if($query_run){
//       $_SESSION['message'] = "Blog Deleted Successfully";
//       header("Location: index.php");
//       exit(0);
//    }else{
//       $_SESSION['message'] = "Blog Not Deleted";
//       header("Location: index.php");
//       exit(0);
//    }
// }


//Trash
if (isset($_GET['delete']) && isset($_GET['id'])) {
   $blog_id = $_GET['id'];


   $sql = "UPDATE blog_posts SET status = 'deleted' WHERE id = ?";
   $stmt = $conn->prepare($sql);
   
   $stmt->bind_param("i", $blog_id); 
   if ($stmt->execute()) {
       echo "Post moved to trash successfully.";
   } else {
       echo "Error: " . $stmt->error;
   }
   $stmt->close();
}

//displays active posts to be deleted
$sql = "SELECT * FROM blog_posts WHERE status = 'active'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   while ($row = $result->fetch_assoc()) {
       echo "<div>";
       echo "<h3>" . $row['title'] . "</h3>";
       echo "<p>" . $row['textarea'] . "</p>";
       echo "<a href='index.php?delete=true&id=" . $row['id'] . "'>Delete</a>";
       echo "</div>";
   }
} else {
   echo "No active posts found.";
}

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