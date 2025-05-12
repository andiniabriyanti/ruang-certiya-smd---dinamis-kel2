<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Kirim Cerita</title>
  
  <!-- Link ke Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"/>
  
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #fbeaff;
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }

    .form-container {
      background-color: #fff;
      padding: 30px;
      max-width: 600px;
      margin: 100px auto 0 auto;
      border-radius: 15px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    label {
      font-weight: bold;
      margin-top: 15px;
      display: block;
      color: #6c3483;
    }

    input, select, textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    .checkbox-group {
      display: flex;
      align-items: center;
      margin-top: 20px;
    }

    .checkbox-group input[type="checkbox"] {
      width: auto;
      margin-right: 10px;
    }

    .button-group {
      display: flex;
      justify-content: flex-end;
      margin-top: 25px;
      gap: 10px;
    }

    .btn {
      padding: 8px 16px;
      font-size: 14px;
      border-radius: 6px;
      border: none;
      cursor: pointer;
    }

    .btn-kirim {
      background-color: #6c3483;
      color: white;
    }

    .btn-kirim:hover {
      background-color: #5b2c6f;
    }

    .btn-batal {
      background-color: #6c3483;
      color: white;
    }

    .btn-batal:hover {
      background-color: #5b2c6f;
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
  <!-- Sidebar -->
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

  <!-- Form Kirim Cerita -->
  <div class="form-container">
    <h2>Kirim Cerita Kamu</h2>
    <form method="POST" action="proses_kirimcerita.php">
      <label for="judul">Judul Cerita</label>
      <input type="text" id="judul" name="judul" required>

      <div id="namaField">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama">
      </div>

      <label for="lokasi">Lokasi</label>
      <input type="text" id="lokasi" name="lokasi" required>

      <label for="kategori">Kategori</label>
      <select id="kategori" name="kategori" required>
        <option value="">Pilih Kategori</option>
        <option value="sedih">Sedih</option>
        <option value="bahagia">Bahagia</option>
        <option value="inspiratif">Inspiratif</option>
        <option value="mistis">Mistis</option>
      </select>

      <label for="isi">Isi Cerita (maks. 1000 kata)</label>
      <textarea id="isi" name="isi" rows="6" placeholder="Tulis ceritamu di sini..." required></textarea>

      <div class="checkbox-group">
        <input type="checkbox" id="anonim" name="anonim" onclick="toggleNamaField()">
        <label for="anonim">Kirim sebagai anonim</label>
      </div>

      <div class="button-group">
        <button type="button" class="btn btn-batal" onclick="window.location.href='beranda.html'">Batal</button>
        <button type="submit" class="btn btn-kirim">Kirim Cerita</button>
      </div>
    </form>
  </div>

  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById("sidebar");
      sidebar.classList.toggle("active");
    }

    function toggleNamaField() {
      const anonim = document.getElementById("anonim").checked;
      const namaField = document.getElementById("namaField");
      namaField.style.display = anonim ? "none" : "block";
    }

    window.onload = toggleNamaField;
  </script>
</body>
</html>