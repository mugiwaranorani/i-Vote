$(document).ready(function() {
    setInterval(function() {
        $.ajax({
            url: 'result.php', // URL to your server-side script that generates new data
            type: 'GET',
            success: function(response) {
                $('#result-content').html(response); // Update the content of the div with the new data
            }
        });
    }, 5000); // Set the interval time (in milliseconds) for how frequently you want to update the content (e.g., every 5 seconds)
});