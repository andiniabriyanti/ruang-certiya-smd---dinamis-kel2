<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Edukasi Mental Health - Ruang Cerita</title>
  
  <!-- Link ke Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"/>

  <link rel="stylesheet" href="style.css" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
      background: #fef6ff;
    }

    .container {
      max-width: 960px;
      margin: 40px auto;
      padding: 0 24px;
    }

    h1 {
      text-align: center;
      color: #6c3483;
      font-size: 32px;
      margin-bottom: 40px;
      font-weight: 700;
    }

    /* Sidebar Styling */
    .sidebar {
      width: 250px;
      background-color: #6c3483;
      color: white;
      padding: 20px;
      height: 100vh;
      position: fixed;
      top: 0;
      left: -300px;
      transition: left 0.3s ease;
      display: flex;
      flex-direction: column;
      z-index: 1000;
    }

    .sidebar.active {
      left: 0;
    }

    .sidebar-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .sidebar-header h2 {
      font-size: 1.8em;
      margin: 0;
    }

    .close-btn {
      font-size: 24px;
      cursor: pointer;
    }

    .sidebar-menu {
      display: flex;
      flex-direction: column;
      gap: 15px;
      margin-top: 30px;
    }

    .sidebar-item {
      color: white;
      text-decoration: none;
      font-size: 1.2em;
      display: flex;
      align-items: center;
      transition: color 0.3s ease-in-out;
    }

    .sidebar-item:hover {
      color: #e8daef;
    }

    .sidebar-icon {
      margin-right: 10px;
    }
    
    /* Card layout untuk informasi */
    .info-card {
      background: #fff;
      border-radius: 16px;
      box-shadow: 0 4px 16px rgba(0,0,0,0.1);
      margin-bottom: 24px;
      padding: 16px;
      transition: transform 0.3s ease;
    }

    .info-card:hover {
      transform: translateY(-4px);
    }

    .info-title {
      font-size: 24px;
      font-weight: 600;
      margin-bottom: 12px;
      color: #333;
    }

    .info-text {
      font-size: 16px;
      color: #666;
    }

    /* Styling untuk list atau daftar */
    .info-list {
      margin: 0;
      padding: 0;
      list-style-type: none;
    }

    .info-list li {
      font-size: 16px;
      margin-bottom: 12px;
      color: #555;
      padding-left: 1rem;
    }

    .info-list li:before {
      content: "✔";
      color: #6c3483;
      margin-right: 8px;
    }

    /* Button untuk membuka sidebar */
    .open-sidebar-btn {
      background-color: transparent;
      border: none;
      cursor: pointer;
      position: fixed;
      top: 20px;
      left: 20px;
      z-index: 1001;
    }

    .hamburger-icon {
      display: inline-block;
      position: relative;
      width: 25px;
      height: 3px;
      background-color: #6c3483;
    }

    .hamburger-icon::before,
    .hamburger-icon::after {
      content: '';
      position: absolute;
      width: 25px;
      height: 3px;
      background-color: #6c3483;
      transition: 0.3s ease-in-out;
    }

    .hamburger-icon::before {
      top: -8px;
    }

    .hamburger-icon::after {
      top: 8px;
    }
  </style>
</head>
<body>
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

  <!-- Tombol untuk membuka sidebar -->
  <button class="open-sidebar-btn" onclick="toggleSidebar()">
    <span class="hamburger-icon"></span>
  </button>

  <div class="container">
    <h1>Edukasi Mental Health</h1>

    <!-- Card pertama -->
    <div class="info-card">
      <div class="info-title">Cara Menghadapi Stres</div>
      <div class="info-text">
        Stres bisa datang kapan saja. Berikut adalah beberapa cara untuk menghadapinya:
        <ul class="info-list">
          <li>Luangkan waktu untuk relaksasi setiap hari.</li>
          <li>Berbicara dengan seseorang yang dipercaya.</li>
          <li>Berolahraga ringan untuk melepaskan ketegangan.</li>
        </ul>
      </div>
    </div>

    <!-- Card kedua -->
    <div class="info-card">
      <div class="info-title">Mengenal Overthinking</div>
      <div class="info-text">
        Overthinking bisa mengganggu pikiran kita. Cobalah cara ini untuk menghadapinya:
        <ul class="info-list">
          <li>Identifikasi pemicu overthinking.</li>
          <li>Fokus pada solusi daripada masalah.</li>
          <li>Cobalah meditasi atau teknik pernapasan untuk menenangkan diri.</li>
        </ul>
      </div>
    </div>

    <!-- Card ketiga -->
    <div class="info-card">
      <div class="info-title">Pentingnya Self-Care</div>
      <div class="info-text">
        Menjaga diri sendiri itu penting untuk kesejahteraan mental. Berikut adalah cara melakukannya:
        <ul class="info-list">
          <li>Jaga tidur yang cukup setiap malam.</li>
          <li>Melakukan aktivitas yang disukai untuk melepaskan stres.</li>
          <li>Makan makanan bergizi dan seimbang.</li>
        </ul>
      </div>
    </div>

    <!-- Card keempat -->
    <div class="info-card">
      <div class="info-title">Menjaga Kesehatan Emosional</div>
      <div class="info-text">
        Kesehatan emosional penting untuk kebahagiaan. Beberapa cara untuk menjaga kesehatan emosional:
        <ul class="info-list">
          <li>Belajar untuk menerima perasaan negatif.</li>
          <li>Berlatih berbicara positif pada diri sendiri.</li>
          <li>Temukan dukungan dari orang-orang terdekat.</li>
        </ul>
      </div>
    </div>
  </div>

  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById("sidebar");
      sidebar.classList.toggle("active");
    }
  </script>
</body>
</html>
