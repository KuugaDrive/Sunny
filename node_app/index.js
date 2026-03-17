const express = require('express'); const app = express(); app.get ('/', (req, res) => res.send('Node.js menyala')); app.listen(3000, () => console.log('siap di port 3000'));
