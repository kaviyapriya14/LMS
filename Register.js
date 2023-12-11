function validateForm() {
    var firstname = document.getElementById("firstname").value;
    var lastname = document.getElementById("lastname").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    firstname = firstname.trim();
    lastname = lastname.trim();
    email = email.trim();
    password = password.trim();

    if (firstname === "" || lastname === "" || email === "" || password === "") {
        alert("Please fill in all the fields.");
        return false;
    }

    var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!emailRegex.test(email)) {
        alert("Please enter a valid email address.");
        return false;
    }

    if (password.length < 8) {
        alert("Password must be at least 8 characters.");
        return false;
    }

    return true;
}
