function mylinkfunction(e) {

    window.location.href="#targetDiv";

    e.preventDefault();
    e.stopPropagation(); 

}

function ShowSignUp() {
    document.getElementById('login-div').style.display = "none";
    document.getElementById('signup-div').style.display = "block";
}

function HideSignUp() {
    document.getElementById('login-div').style.display = "block";
    document.getElementById('signup-div').style.display = "none";    
}