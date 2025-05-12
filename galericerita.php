<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Beranda - Ruang Cerita</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <!-- Hamburger Menu Button -->
  <div class="hamburger-menu" onclick="toggleSidebar()">
    &#9776;
  </div>

  <!-- Sidebar Dashboard -->
  <div class="sidebar" id="sidebar">
    <div class="sidebar-header">
      <h2>Dashboard</h2>
      <span class="close-btn" onclick="toggleSidebar()">&times;</span>
    </div>
    <div class="sidebar-menu">
      <a href="galericerita.php" class="sidebar-item">
        <span class="sidebar-icon">&#127968;</span> Galeri Cerita
      </a>
      <a href="kirimcerita.php" class="sidebar-item">
        <span class="sidebar-icon">&#128221;</span> Kirim Cerita
      </a>
      <a href="edukasi.php"  class="sidebar-item">
        <span class="sidebar-icon">&#128218;</span> Edukasi Mental Health
      </a>
      <a href="logout.php" class="sidebar-item">
        <span class="sidebar-icon">&#128682;</span> Logout
      </a>
    </div>
  </div>

  <!-- Main Content -->
  <div class="main-content">
    <!-- Filter Section -->
    <div class="filter-container">
      <h2>Galeri Cerita</h2>
      <div class="filters">
        <div class="filter">
          <label for="location">Lokasi</label>
          <select id="location" onchange="applyFilter()">
            <option value="">Semua</option>
            <option value="loa-janan">Loa Janan</option>
            <option value="jalan-juanda">Jalan Juanda</option>
            <option value="samarinda-seberang">Samarinda Seberang</option>
            <option value="bengkuring">Bengkuring</option>
            <option value="jalan-m-yamin">Jalan M Yamin</option>
            <option value="sungai-dama">Sungai Dama</option>
          </select>
        </div>
        <div class="filter">
          <label for="emotion">Emosi</label>
          <select id="emotion" onchange="applyFilter()">
            <option value="">Semua</option>
            <option value="sedih">Sedih</option>
            <option value="bahagia">Bahagia</option>
            <option value="inspiratif">Inspiratif</option>
            <option value="mistis">Mistis</option>
          </select>
        </div>
      </div>
    </div>

    <!-- Gallery of Cards -->
    <div class="card-container" id="cardContainer">
      <div class="card" data-location="loa-janan" data-emotion="inspiratif">
        <h3>Menemukan Harapan</h3>
        <p class="story-snippet">Cerita inspiratif dari Dika yang menemukan harapan setelah mengalami kegagalan...</p>
        <p class="author">oleh: Dika, Loa Janan</p>
        <a href="baca.php?id=menemukan-harapan" class="read-more">Baca Selengkapnya</a>
      </div>

      <div class="card" data-location="jalan-juanda" data-emotion="sedih">
        <h3>Di Balik Senyum</h3>
        <p class="story-snippet">Sarah berbagi tentang perjuangan menghadapi kesedihan sambil tetap tersenyum di Jalan Juanda...</p>
        <p class="author">oleh: Sarah, Jalan Juanda</p>
        <a href="baca.php?id=di-balik-senyum" class="read-more">Baca Selengkapnya</a>
      </div>

      <div class="card" data-location="sungai-dama" data-emotion="mistis">
        <h3>Malam di Sungai Dama</h3>
        <p class="story-snippet">Anton menceritakan pengalaman mistis yang ia alami saat melintasi Sungai Dama di malam hari...</p>
        <p class="author">oleh: Anton, Sungai Dama</p>
        <a href="baca.php?id=malam-di-sungai-dama" class="read-more">Baca Selengkapnya</a>
      </div>

      <div class="card" data-location="loa-janan" data-emotion="bahagia">
        <h3>Langkah Baru</h3>
        <p class="story-snippet">Liana merasa bahagia saat memulai langkah baru dalam hidupnya di Loa Janan...</p>
        <p class="author">oleh: Liana, Loa Janan</p>
        <a href="baca.php?id=langkah-baru" class="read-more">Baca Selengkapnya</a>
      </div>

      <div class="card" data-location="samarinda-seberang" data-emotion="bahagia">
        <h3>Petualangan Dua Sahabat</h3>
        <p class="story-snippet">Dua sahabat menghabiskan waktu menyenangkan menjelajahi Samarinda Seberang bersama...</p>
        <p class="author">oleh: Joko, Samarinda Seberang</p>
        <a href="baca.php?id=petualangan-dua-sahabat" class="read-more">Baca Selengkapnya</a>
      </div>

      <div class="card" data-location="sungai-dama" data-emotion="inspiratif">
        <h3>Damainya Alam</h3>
        <p class="story-snippet">Rina menceritakan kedamaian yang ia rasakan saat menjelajah alam di sekitar Sungai Dama...</p>
        <p class="author">oleh: Rina, Sungai Dama</p>
        <a href="baca.php?id=damainya-alam" class="read-more">Baca Selengkapnya</a>
      </div>

      <div class="card" data-location="bengkuring" data-emotion="sedih">
        <h3>Bayangan di Bengkuring</h3>
        <p class="story-snippet">Cerita sedih tentang kehilangan seseorang terdekat dan proses penyembuhan yang panjang...</p>
        <p class="author">oleh: Aldi, Bengkuring</p>
        <a href="baca.php?id=bayangan-di-bengkuring" class="read-more">Baca Selengkapnya</a>
      </div>

      <div class="card" data-location="jalan-m-yamin" data-emotion="inspiratif">
        <h3>Cahaya di Ujung Jalan</h3>
        <p class="story-snippet">Di Jalan M Yamin, seseorang menemukan kekuatan untuk bangkit dari keterpurukan hidupnya...</p>
        <p class="author">oleh: Fira, Jalan M Yamin</p>
        <a href="baca.php?id=cahaya-di-ujung-jalan" class="read-more">Baca Selengkapnya</a>
      </div>

      <div class="card" data-location="jalan-juanda" data-emotion="mistis">
        <h3>Suara Tengah Malam</h3>
        <p class="story-snippet">Cerita mistis tentang suara aneh yang sering terdengar di lorong rumah tua di Jalan Juanda...</p>
        <p class="author">oleh: Yuni, Jalan Juanda</p>
        <a href="baca.php?id=suara-tengah-malam" class="read-more">Baca Selengkapnya</a>
      </div>
    </div>
  </div>

  <script>
    function toggleSidebar() {
      document.getElementById('sidebar').classList.toggle('active');
    }

    function applyFilter() {
      const locationFilter = document.getElementById('location').value;
      const emotionFilter = document.getElementById('emotion').value;
      const cards = document.querySelectorAll('.card');
      let hasVisibleCard = false;

      cards.forEach(card => {
        const cardLocation = card.dataset.location;
        const cardEmotion = card.dataset.emotion;

        const matchesLocation = !locationFilter || cardLocation === locationFilter;
        const matchesEmotion = !emotionFilter || cardEmotion === emotionFilter;

        if (matchesLocation && matchesEmotion) {
          card.style.display = 'block';
          hasVisibleCard = true;
        } else {
          card.style.display = 'none';
        }
      });

      if (!hasVisibleCard) {
        document.getElementById('cardContainer').innerHTML = '<p style="text-align:center; width:100%">Belum ada cerita untuk filter ini.</p>';
      }
    }
  </script>
</body>
</html>