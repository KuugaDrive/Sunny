const express = require('express');
const cors = require('cors'); // Tambahkan baris ini
const app = express();

// Tambahkan baris ini SEBELUM mendefinisikan rute (app.get / app.post)
app.use(cors());

import './bootstrap';
