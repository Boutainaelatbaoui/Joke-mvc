function addJoke(){
    document.getElementById('joke-save-btn').style.display   = "block";
    document.getElementById('joke-update-btn').style.display = "none";

    document.getElementById('form-joke').reset();
}

function editJoke(id){
    document.getElementById('joke-save-btn').style.display   = "none";
    document.getElementById('joke-update-btn').style.display = "block";
    document.getElementById("joke-id").value = id;
    document.getElementById('joke-text').value = document.getElementById(id).getAttribute("text");
}