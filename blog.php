<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Editor</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container" >
    <div class="error-msg1"></div>

        <form   id="form" method="post" enctype="multipart/form-data">  
            <button class="back" type="button" id="back" >Back</button>
        <!-- -->
        <h1>Create a New Blog Post</h1>        
            <label for="title">Title: </label>
            <input type="text" name="title" id="title"  placeholder="Enter blog title" required>
            
            <label for="content" class="label1">Content: </label>
            <div class="section"> 
                <div class="row">
                    <div class="col">
                        <div class="first box">
                            <input type="number" id="font-size" min="1" max="100" 
                            value="16" onchange="f1(this)">
                        </div>
                        <div class="second box">
                            <button type="button"
                            onclick="f2(this)"><i class="fa-solid fa-bold"></i></button>
                            <button type="button"
                            onclick="f3(this)"><i class="fa-solid fa-italic"></i></button>
                            <button type="button"
                            onclick="f4(this)"><i class="fa-solid fa-underline"></i></button>
                        </div>

                        <div class="third box">
                            <button type="button" 
                            onclick="f5(this)"><i class="fa-solid fa-align-left"></i></button>
                            <button type="button" 
                            onclick="f6(this)"><i class="fa-solid fa-align-center"></i></button>
                            <button type="button" 
                            onclick="f7(this)"><i class="fa-solid fa-align-right"></i></button>
                        </div>

                        <div class="fourth box">
                            <button type="button" onclick="f8(this)">aA</button>
                            <button type="button" onclick="f9(this)">
                                <i class="fa-solid fa-text-slash"></i></button>
                                <input type="color" onchange="f10(this)">
                                <button type="button" onclick="openDynamicUrl()">
                                    <i class="fa fa-link"></i>
                                    </button>      
                        
                        </div>

                    </div>
                    <br>

                    <div class="col">
                       <textarea id="textarea" name="textarea" class="text-area" placeholder="Enter your blog here" 
                       required></textarea>
                    </div>
                </div>

                </div>
           
            <label for="image">Upload an Image</label>
            <div class="file-input-container">
                <input type="file" id="image" name="image_url" >
              
                <label for="image-upload">Choose Image</label>
              </div>
              <p id="error-img" style="color: red; font-weight: bold;"></p>
              <div class="gallery" >
                <img src="uploads/default-img.png" alt=""  id="preImg" style="width:300px">
</div>
              <input type="submit" id="submit" value="Upload">
            <button type="button" id="saveDraft">Save as Draft</button>
            <button type="button" id="publish">Publish</button>
            </form>
    </div>
    </div>
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/a31a3f8384.js"></script>
    <script src= "script.js"></script>


    <script>
        document.getElementById("back").onclick = function(){
            location.href = "index.php";
        }
        $(document).ready(function(){

            $("#submit").click(function(e){
                e.preventDefault();
            
              let form_data = new FormData();
                let img= $("#image")[0].files;
             
                if(img.length > 0){
                    form_data.append('image',img[0]);

                    $.ajax({
                        url: 'upload.php',
                        type: 'post',
                        data: form_data,
                        processData: false,
                        contentType: false,
                        success: function(res){
                            const data = JSON.parse(res);

                            if(data.error != 1) {
                                let path = "uploads/" + data.src;
                                $("#preImg").attr("src", path);
                                $("#preImg").fadeOut(1).fadeIn(1000);
                                $("#image").val('');

                            }else{
                                $("#error-img").text(data.em);

                            }
                        }
                         
                    });

                }else{
                    $("#error-img").text("Please select an image");

                }
            });    
});
$("#publish").click(function() {
                var formData = new FormData($("#form")[0]);
                
                $.ajax({
                    url: "publish.php",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    success: function(response) {
    console.log(response); 
    
    if (response.status === "success") {
        alert(response.message);
    } else if (response.status === "error") {
        alert(response.message); 
    } else {
        alert("An unknown error occurred while publishing the blog post.");
    }
},
                }
                )
            });
        
            function openDynamicUrl() {
    var url = prompt("Enter the URL:");
    if (url) {
        window.open(url, '_blank');
    }
}

            $("#saveDraft").click(function() {
        var formData = new FormData($("#form")[0]);
        
        $.ajax({
            url: "save_draft.php", // Create a new PHP script to handle draft saving
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            dataType: "json",
            success: function(response) {
                if (response.status === "success") {
                    alert("Blog post saved as a draft.");
                    $('#title').val('');
                    $('#textarea').val('');
                    $('#image').val('');
                    $('#preImg').attr('src', 'uploads/default-img.png');
                } else if (response.status === "error") {
                    alert("An error occurred while saving the draft.");
                } else {
                    alert("An unknown error occurred while saving the draft.");
                }
            }
        });
    });

    document.getElementById("edit").addEventListener("click", function() {
            window.location.href = "edit.php";
        });
         
   

</script>
</body>
</html>