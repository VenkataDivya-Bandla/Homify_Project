function validateForm() {
    var username = document.getElementById('username').value;
    var phone = document.getElementById('phone').value;
    var email = document.getElementById('email').value;
    var documentFile = document.getElementById('document').value;
    var slot = document.getElementById('slot').value;

    if (username.trim() === '' || phone.trim() === '' || email.trim() === '' || documentFile.trim() === '' || slot.trim() === '') {
        alert('All fields are required');
        return false;
    }

    // Validate phone number
    var phoneRegex = /^\d{10}$/;
    if (!phoneRegex.test(phone)) {
        alert('Please enter a valid phone number');
        return false;
    }

    // Validate email
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        alert('Please enter a valid email address');
        return false;
    }

    // Add more validation rules as needed

    return true;
}

document.getElementById("signupForm").addEventListener("submit", function(event) {
    // Prevent the default form submission behavior
    event.preventDefault();

    // Validate the form
    if (validateForm()) {
        // If the form is valid, redirect to login.html
        window.location.href = "login.html";
    }
});
