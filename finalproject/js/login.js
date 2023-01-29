const loginForm = document.getElementById("login-form");
const loginButton = document.getElementById("login-form-submit");
const loginErrorMessage = document.getElementById("login-error-message");
window.addEventListener("load", loadHTML3);

async function loadHTML3() {
    let myObject = await fetch('../view/navbar.html');
    let myText = await myObject.text();
    document.getElementById('aNav').innerHTML = myText;

    let head = await fetch('../view/header.html');
    let newText = await head.text();
    document.getElementById('head').innerHTML = newText;

    let foot = await fetch('../view/footer.html');
    let footText = await foot.text();
    document.getElementById('foot').innerHTML = footText;
    checkLogin();
}

//when the user clicks submit it check the input
loginButton.addEventListener("click", (e) =>{
    e.preventDefault();
    const username = loginForm.username.value;
    const password = loginForm.password.value;

    if (username === "student" && password === "student"){
        alert("Successfully logged In");
        window.location = "../view/index.php";
        localStorage.setItem('loggedIn', 'TRUE');
    }
    else{
        alert("Bad >:(");
    }
})

function checkLogin()
{
    if(localStorage.getItem('loggedIn') == "TRUE")
    {
        document.getElementById("logout").hidden = false;
        document.getElementById("login").hidden = true;
    }

    else
    {
        document.getElementById("logout").hidden = true;
        document.getElementById("login").hidden = false;
    }
}