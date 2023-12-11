function validateForm() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    if (email === "" || password === "") {
        alert("Please fill in all fields.");
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
