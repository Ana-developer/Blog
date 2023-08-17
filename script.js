const textarea = document.getElementById("textarea")

function f1(e){
    let value = e.value;
    textarea.style.fontSize = value + "px";
}

function f2(e){
    if(textarea.style.fontWeight == "bold")
    {
        textarea.style.fontWeight = "normal";
        e.classList.remove("active");
    }
    else{
        textarea.style.fontWeight = "bold";
        e.classList.add("active");
    }
}

function f3(e){
    if(textarea.style.fontStyle == "italic"){
        textarea.style.fontStyle = "normal";
        e.classList.remove("active");
    }
    else{
        textarea.style.fontStyle = "italic";
        e.classList.add("active");
    }
}

function f4(e){
    if(textarea.style.textDecoration == "underline"){
        textarea.style.textDecoration = "none";
        e.classList.remove("active");
    }
    else{
        textarea.style.textDecoration = "underline";
        e.classList.add("active");
    }
}

function f5(e){
    textarea.style.textAlign = "left";
}

function f6(e){
    textarea.style.textAlign = "center";
}

function f7(e){
    textarea.style.textAlign = "right";
}

function f8(e){
    if(textarea.style.textTransform == "uppercase"){
        textarea.style.textTransform = "none";
        e.classList.remove("active");
    }
    else{
        textarea.style.textTransform = "uppercase";
        e.classList.add("active");
    }
}

function f9(e){
    textarea.style.fontWeight = "normal";
    textarea.style.textAlign = "left";
    textarea.style.fontStyle = "normal";
    textarea.style.textTransform = "capitalize";
    textarea.value = " ";
}

function f10(e){
    let value = e.value;
    textarea.style.color = value;
}

window.addEventListener('load'), ()=>{
    textarea.value = " ";
}

document.getElementById("saveDraft").addEventListener("click", function() {
    const postTitle = document.getElementById("title").value;
    const postContent = document.getElementById("textarea").value;
    const postImage = document.getElementById("image").files[0];

    const formData = new FormData();
    formData.append("title", postTitle);
    formData.append("textarea", postContent);
    formData.append("image", postImage);

    fetch('save_draft.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("message").innerHTML = data;
    })
    .catch(error => {
        console.error('Error:', error);
    });
});


