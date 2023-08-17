<?php
session_start();
include "db_conn.php"; 


if (isset($_POST['title'])) {
        $title = $_POST['title'];
    } else {

        // $response = array('status' => 'error', 'message' => 'Title field is missing in the form data');
        // echo json_encode($response);
        // exit(); t
    }

    if (isset($_POST['textarea'])) {
            $content = $_POST['textarea'];
        } else {
        
            $response = array('status' => 'error', 'message' => 'Content field is missing in the form data');
            echo json_encode($response);
            exit(); 
        }

$targetDir = "uploads/";
// $imageName = ($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $imageName;
move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);

$query = "INSERT INTO blog_posts (title, textarea, image_url, published) VALUES (?, ?, ?, 1)";
$stmt = $conn->prepare($query);
$stmt->bind_param("sss", $title, $content, $targetFilePath);
if ($stmt->execute()) {    
    $response = array('status' => 'success', 'message' => 'Blog post published successfully');
} else {
    $response = array('status' => 'error', 'message' => 'Error inserting blog post data: ' . $stmt->error);
}
$stmt->close();

echo json_encode($response);

?>



