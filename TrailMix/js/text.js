window.addEventListener("load", loadHTML);


//this fucntion is called when the page loads
async function loadHTML() {
    //gets the navbar
    let myObject = await fetch('../view/navbar.html');
    let myText = await myObject.text();
    //displays the navbar in html
    document.getElementById('aNav').innerHTML = myText;

    let head = await fetch('../view/header.html');
    let newText = await head.text();
    document.getElementById('head').innerHTML = newText;

    let foot = await fetch('../view/footer.html');
    let footText = await foot.text();
    document.getElementById('foot').innerHTML = footText;
    checkLogin();
}

//displays whether the user is logged in or not
function checkLogin()
{
    if(localStorage.getItem('loggedIn') == "TRUE")
    {
        document.getElementById("login").textContent = "Logout";
    }

    else
    {
        document.getElementById("login").textContent = "Login";
    }
}




