<?php

include 'db_conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $content = $_POST["textarea"];

    
    $draft_token = uniqid(); 

 
    // $imagePath = "";
    // if ($_FILES["image"]["size"] > 0) {
    //     $targetDir = "upload/";
    //     $imagePath = $targetDir . basename($_FILES["image"]["name"]);
    //     move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath);
    // }
$targetDir = "uploads/";
// $imageName = ($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $imageName;
move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);

    // Prepare and execute SQL query
    $sql = "INSERT INTO drafts ( title, content, image_url, draft_token) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $title, $content, $imagePath, $draft_token);

    if ($stmt->execute()) {
        echo "Draft saved successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
