
$(document).ready(function() {

    $.ajax({
        url: "update_post.php",
        type: "GET",
        data: { post_id: 1 }, 
        dataType: "json",
        success: function(data) {
            $("#post_id").val(data.id);
            $("#title").val(data.title);
            $("#textarea").val(data.textarea);
        }
    });
    
    $("#editForm").submit(function(e) {
        e.preventDefault();
        
        var formData = new FormData(this); 
        
        $.ajax({
            url: "update_post.php",
            type: "POST",
            data: formData, 
            processData: false, 
            contentType: false, 
            success: function(response) {
                $("#result").html(response);
            }
        });
    });
});

