function loadContent(){
    console.log("hey");
    var div = document.createElement("div");
    div.setAttribute("id","content");
    for (i=0;i<4;i++){
        let child = document.createElement("div");
        switch (i) {
            case 1:
                child.setAttribute("id","img_moon");
                break;
            case 2:
                child.setAttribute("id","media");
                break;
            case 3:
                child.setAttribute("id","social");
                break;
            default:
                child.setAttribute("id","welcome");
                break;
        }
        div.appendChild(child);
    }
    document.getElementById("home").appendChild(div);
    document.getElementById("welcome").innerText = "Robert Koziel";
}

// document.addEventListener("DOMContentLoaded", loadContent);