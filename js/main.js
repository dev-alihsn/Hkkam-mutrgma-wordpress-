
// pagination candition

function pagination_active_candition() {
    let pagin = document.querySelectorAll(".pagination .container > div");

    if(pagin[0].childElementCount !== 1) {
        pagin[0].style.opacity = .7;
        pagin[0].style.cursor = "not-allowed";
        pagin[0].textContent = "no posts";
    }
    
    if(pagin[1].childElementCount !== 1) {
        pagin[1].style.opacity = .7;
        pagin[1].style.cursor = "not-allowed";
        pagin[1].textContent = "no posts";
    }
}

pagination_active_candition()