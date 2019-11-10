const http = require('http');
var url = require('url');

http.createServer(function(request, response) {
    console.log(request.url);
    var urlName = url.parse(request.url, true);

    if (urlName.pathname == "/home") {
        //write to page?
        console.log("home");
        response.write('<h1>Welcome to the Home Page</h1>');
        response.end();
    } else if (urlName.pathname == "/getData") {
        //data
        var myData = {"name":"Audrey Spjut","class":"CS 313"}
        console.log("data");

        response.writeHead(200, {"Content-Type": "application/json"});
        //stringify first then write to doc
        var jsonString = JSON.stringify(myData);

        response.write(jsonString);
        response.end();
        
        
    } else {
        //write to page error 404 page not found
        response.write('<h1>Error 404</h1><h2>Page not Found');
        response.end();
    }
  
  }).listen(8888);