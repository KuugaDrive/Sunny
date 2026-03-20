const express = require('express');
const cors = require('cors');
const app = express();

app.use(cors());

const curses = [
    "Limitless: Blue",
    "Limitless: Red",
    "Hollow Purple",
    "Cursed Spirit Manipulation",
    "Heavenly Restriction",
    "Inverted Spear of Heaven",
    "Reverse Cursed Technique"
];

app.get('/api/curse', (req, res) => {
    const randomCurse = curses[Math.floor(Math.random() * curses.length)];
    res.json({ curse: randomCurse });
});

app.listen(3000, '0.0.0.0', () => {
    console.log('Node API aktif dan menembus CORS di port 3000');
});
