var http = require("http");
var fs = require("fs");
console.log("Starting...");
var host = "127.0.0.1";
var port = 80;
var server = http.createServer( function (request, response) {
	console.log("Got a request: " + request.url);
	fs.readFile("." + request.url, function (error, data) {
		if (error) {
			response.writeHead(404, {"Content-type": "text/plain"});
			response.end("File not found.");
		} else {
			response.writeHead(200, {"Content-type": "text/html"});
			response.end(data);
		}
	});
});

server.listen(port, host, function () {
	console.log("Listening...");
});