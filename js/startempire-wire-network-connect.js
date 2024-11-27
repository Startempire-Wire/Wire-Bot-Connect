(function() {

	document.addEventListener('DOMContentLoaded', function() {
        var button = document.getElementById('connect-extension-button');

        if (button) {
            button.addEventListener('click', function() {
                console.log('Button clicked On Website Now! From URL: ' + window.location.origin);

				var extensionId = 'pogcdjhlgfgkkjakdjoikjafhbgejkpg';

				chrome.runtime.sendMessage(extensionId, {
					source: 'my-website',
					message: 'I am the Startempire Wire Network Connect Plugin Connecting to Your Extension! & I am here to help you!',
				  }, function(response) {
					console.log('ON WEBSITE - Received response:', response);
				});

            });
        } else {
            console.log('Button not found');
        }
    });

})();
