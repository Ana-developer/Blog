<?php
session_start();
require "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Blog</title>
</head>
<body>
    
<div class="container">
<?php include('message.php')?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Blog Posts</h4>
                    <a href="blog.php" class="btn btn-primary float-end">Add Blog</a>
                </div>
                <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Image</th>
                            <th>Action</th>
</tr>
</thead>
<tbody>
    <?php
    $query = "SELECT * FROM blog_posts";
    $query_run = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
foreach($query_run as $blog)
{
?>
  <tr>
        <td><?=$blog['id'];?></td>
        <td><?=$blog['title'];?></td>
        <td><?=$blog['textarea'];?></td> 
        <td><?=$blog['image_url'];?></td>
        <td>
            <a href="edit.php?id=<?=$blog['id'];?>"  class="btn btn-success btn-sm">Edit</a>

<form action="code.php" method="POST" class="d-inline">
<button  type="submit" name="delete" id="delete" value="<?=$blog['id'];?>" class="btn btn-danger btn-sm delete">Delete</a>

        </td>
    </tr>
<?php
 
}
    }
    else{
        echo "<h5>No record found</h5>";
    }
    ?>

</tbody>
                </table>

                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>