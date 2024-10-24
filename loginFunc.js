document.querySelector('#loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); 

    var email = document.querySelector('#inputEmail').value;
    var password = document.querySelector('#inputPassword').value;

    if (email === "" || password === "") {
    
        document.querySelector('#inputEmail').classList.add('border-danger');
        document.querySelector('#inputPassword').classList.add('border-danger');
    } else if (email === "Antonius@gmail.com" && password === "Wapii123") { 
        window.location.href = "landing.php";
    } else {
        alert("Invalid username or password.");
        document.querySelector('#inputEmail').classList.add('border-danger');
        document.querySelector('#inputPassword').classList.add('border-danger');
    }
});