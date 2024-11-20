// Add event listener to full portfolio button
document.querySelector('.full-portfolio-button').addEventListener('click', function(event) {
    event.preventDefault();
    window.location.href = 'full-portfolio.php';
});
// Add event listener to read more buttons
document.querySelectorAll('.read-more-button').forEach(function(button) {
    button.addEventListener('click', function(event) {
        event.preventDefault();
        window.location.href = button.href;
    });
});
// Add event listener to send button
document.querySelector('.send-button').addEventListener('click', function(event) {
    event.preventDefault();
    var form = document.getElementById('contact-form');
    form.submit();
});