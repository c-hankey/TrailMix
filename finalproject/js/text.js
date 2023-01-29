window.addEventListener("load", loadHTML);


//this fucntion is called when the page loads
async function loadHTML() {
    //gets the navbar
    let navbar = await fetch('navbar.html');
    //displays the navbar in html
    document.getElementById('navbar').innerHTML = await navbar.text();

    let header = await fetch('header.html');
    document.getElementById('header').innerHTML = await header.text();

    let footer = await fetch('footer.html');
    document.getElementById('footer').innerHTML = await footer.text();
}





