// DOM Elements
const curseTextElement = document.getElementById('curse-text');
const glassContainer = document.getElementById('glass-container');

// ==========================================
// GENERATE EFEK PECAHAN KACA
// ==========================================
function createShards() {
    const shardCount = 35;
    for (let i = 0; i < shardCount; i++) {
        let shard = document.createElement('div');
        shard.classList.add('shard');
        
        let size = Math.random() * 60 + 20; 
        shard.style.width = `${size}px`;
        shard.style.height = `${size}px`;
        shard.style.left = `${Math.random() * 100}vw`;
        
        shard.style.animationDuration = `${Math.random() * 10 + 10}s`;
        shard.style.animationDelay = `${Math.random() * 15}s`;
        
        glassContainer.appendChild(shard);
    }
}
createShards();

// ==========================================
// KONEKSI API NODE.JS (ASLI)
// ==========================================
function fetchRealAPI() {
    // Tampilkan efek loading
    curseTextElement.className = 'loading';
    curseTextElement.innerText = 'Mendeteksi residu kutukan...';

    // Menyedot data dari container Node.js milikmu di port 3000
    fetch('http://localhost:3000/api/curse')
        .then(response => response.json())
        .then(data => {
            curseTextElement.className = ''; 
            curseTextElement.innerText = data.curse; // Tampilkan hasil dari Node.js
        })
        .catch(error => {
            curseTextElement.className = '';
            curseTextElement.innerText = 'Koneksi ke Node.js Terputus!';
            console.error('Error API:', error);
        });
}

// Jalankan saat halaman pertama kali dibuka
fetchRealAPI();

// Tarik data baru dari Node.js setiap 5 detik
setInterval(fetchRealAPI, 5000);
