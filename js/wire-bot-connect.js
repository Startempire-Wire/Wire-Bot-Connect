(function() {

	document.addEventListener('DOMContentLoaded', function() {
        var button = document.getElementById('connect-extension-button');

        if (button) { // Check if the button was found
            button.addEventListener('click', function() {
                console.log('Button clicked On Website Now!');

                // Send a message to the extension
                window.postMessage({
                    source: 'my-website',
                    message: 'Button on Website Sending Message to Extension!'
                }, window.location.origin);
            });
        } else {
            console.log('Button not found');
        }
    });


})();
