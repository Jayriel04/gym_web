$(document).ready(function() {
    // Initial state
    $('#signupForm').hide();

    // Switch to signup form
    $('#signupLink').click(function(e) {
        e.preventDefault();
        $('#loginForm').addClass('flip-out').hide();
        $('#signupForm').addClass('flip-in').show();
    });

    // Switch to login form
    $('#loginLink').click(function(e) {
        e.preventDefault();
        $('#signupForm').addClass('flip-out').hide();
        $('#loginForm').removeClass('flip-out').addClass('flip-in').show();
    });
});