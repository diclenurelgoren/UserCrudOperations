
const tabletitle = document.querySelector(".mesaj");

console.log(tabletitle);
function showalert(message) {

    const alert = document.createElement("div");

    alert.className = 'alert alert-danger';
    alert.style.height = "50px";
    alert.style.width = "1050px";
    alert.textContent = message;
    tabletitle.appendChild(alert);

    setTimeout(function () {
        //2 saniyede silinsin 
        alert.remove();
    }, 2000);
}

