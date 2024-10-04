// server.js
const express = require('express');
const app = express();

// Define a route
app.get('/', (req, res) => {
  res.send('Hello, this is your local server running!');
});

// Listen on port 3000
app.listen(3000, () => {
  console.log('Server running at http://localhost:3000/');
});

