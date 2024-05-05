document.getElementById("email-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent default form submission

    // Get form values
    var to = document.getElementById("to").value;
    var subject = document.getElementById("subject").value;
    var message = document.getElementById("message").value;

    // Compose email URL
    var emailUrl = "mailto:" + encodeURIComponent(to) +
                   "?subject=" + encodeURIComponent(subject) +
                   "&body=" + encodeURIComponent(message);

    // Open default email client
    window.location.href = emailUrl;
});
