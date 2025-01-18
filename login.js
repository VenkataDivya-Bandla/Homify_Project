document.getElementById("loginForm").addEventListener("submit", function(event) {
    // Prevent the default form submission behavior
    event.preventDefault();

    // Redirect to home.html
    window.location.href = "home.html";
});
