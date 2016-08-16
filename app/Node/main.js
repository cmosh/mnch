var express = require('express');
var env     = process.env;
var port    = process.env.NODEPHP_PORT;
var app = express();

app.get('/', function (req, res) {
  res.send('Hello World!');
});

app.listen(port, function () {
  console.log('Example express app on php!');
});
