<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jujutsu Kaisen - Hidden Inventory</title>


    <!-- Mengambil font bergaya anime/elegan dari Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/jujutsu.css') }}?v=3" rel="stylesheet">
</head>
<body>

    <!-- Navigasi Atas -->
    <nav>
        <a href="#home">Utama</a>
        <a href="#story">Sinopsis</a>
        <a href="#characters">Karakter</a>
        <a href="#system">Sistem</a>
    </nav>

    <!-- Latar Belakang Parallax -->
    <div class="background-sky"></div>

    <!-- Animasi Pecahan Kaca Mengambang di Seluruh Layar -->
    <div class="glass-container" id="glass-container"></div>

    <!-- ================= SECTION 1: HOME ================= -->
    <section id="home">
        <h1>Jujutsu Kaisen</h1>
        <h2>Hidden Inventory / Premature Death</h2>
        <a href="#story" class="scroll-btn">Mulai Eksplorasi ↓</a>
    </section>

    <!-- ================= SECTION 2: STORY ================= -->
    <section id="story">
        <div class="glass-panel">
            <h3 class="section-title">Musim Semi 2006</h3>
            <p>
                Sebelum peristiwa tragis di Shibuya, Satoru Gojo dan Suguru Geto adalah siswa tahun kedua di SMA Jujutsu Tokyo. 
                Mereka ditugaskan dalam sebuah misi krusial: mengawal Riko Amanai, sang "Star Plasma Vessel", menuju Master Tengen.
                Namun, bayangan pembunuh bayaran tanpa kutukan, Toji Fushiguro, mengintai dari sudut kegelapan. 
                Inilah masa lalu yang mendefinisikan kawan menjadi lawan.
            </p>
        </div>
    </section>
	

    <section id="characters">
        <h3 class="section-title">Karakter</h3>
        <div class="character-grid">
            
            @foreach ($characters as $char)
            <div class="char-card">
                <div class="char-avatar" style="background-image: url('{{ asset($char->image )}}'); background-size: cover; background-position: center;"></div>
                <h4>{{ $char->name }}</h4>
                <p style="color: #FF0000; font-size: 1.2rem; margin-bottom: 10px;">{{ $char->curse_technique }}</p>
                <p>{{ $char->description }}</p>
            </div>
            @endforeach

        </div>
    </section>
            
            
    <!-- ================= SECTION 3: CHARACTERS =================
    <section id="characters">
        <h3 class="section-title">Tokoh Utama</h3>
        <div class="character-grid">
            <div class="char-card">
                <div class="char-avatar" style="background-image: url('images/Gojo.jpg'); background-size: cover;"></div>
                <h4>Satoru Gojo</h4>
                <p>Pengguna Limitless dan Six Eyes. Pemilik bakat mutlak yang belum mencapai potensi maksimalnya.</p>
            </div>
            <div class="char-card">
                <div class="char-avatar" style="background-image: url('images/Geto.png'); background-size: cover; background-position: top;"></div>
                <h4>Suguru Geto</h4>
                <p>Sahabat Gojo. Pengguna Manipulasi Roh Kutukan yang memiliki pedoman moral pelindung kaum lemah.</p>
            </div>
            <div class="char-card">
                <div class="char-avatar" style="background-image: url('images/Toji.webp'); background-size: cover; background-position: top;"></div>
                <h4>Toji Fushiguro</h4>
                <p>Dikenal sebagai "Sorcerer Killer". Pria tanpa energi kutukan yang memiliki fisik luar biasa.</p>
            </div>
            <div class="char-card">
                <div class="char-avatar" style="background-image: url('images/Riko.webp'); background-size: cover;"></div>
                <h4>Riko Amanai</h4>
                <p>Star Plasma Vessel. Gadis muda ceria yang ditakdirkan untuk melebur dengan Master Tengen.</p>
            </div>
        </div>
    </section> -->
 
    <!-- ================= SECTION 4: API / SYSTEM ================= -->
    <section id="system">
        <div class="glass-panel api-panel">
            <h3 class="section-title" style="font-size: 2.5rem; margin-bottom: 5px;">Sistem Jujutsu</h3>
            <div class="panel-subtitle">Koneksi Node.js: Memantau Teknik Kutukan</div>
            <div id="curse-text" class="loading">Menyelaraskan Energi...</div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        &copy; 2024 Sunny Project - Jujutsu Kaisen Database. Dibangun dengan Laravel & Node.js
    </footer>

    <script src ="{{ asset('js/jujutsu.js')}}"></script>
</body>
</html>
