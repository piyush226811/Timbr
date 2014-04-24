(function() {
	var socket = io.connect(window.location.hostname);

	socket.on('nudgeleft', function(data) {
		window.location.replace("http://timbr.herokuapp.com/success.html");
	});

	socket.on('nudgeright', function(data) {
		console.log('Received nudge right');
		console.log(data);

		$.deck('prev');
	});
}());