<?php
// Cegah akses langsung ke file tanpa submit dari form
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Akses ditolak.");
}

// Koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "ruangcerita_db");

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}

// Ambil data dari form
$judul = $_POST['judul'] ?? '';
$lokasi = $_POST['lokasi'] ?? '';
$kategori = $_POST['kategori'] ?? '';
$isi = $_POST['isi'] ?? '';
$anonim = isset($_POST['anonim']) ? 1 : 0;
$nama = $anonim ? 'Anonim' : ($_POST['nama'] ?? '');

// Validasi input (minimal, bisa dikembangkan lagi)
if (empty($judul) || empty($lokasi) || empty($kategori) || empty($isi)) {
    die("Semua field wajib diisi, kecuali nama jika anonim.");
}

// Siapkan dan eksekusi query
$stmt = $koneksi->prepare("INSERT INTO kirim_cerita (judul_cerita, nama_penulis, lokasi, kategori, isi_cerita, anonim) VALUES (?, ?, ?, ?, ?, ?)");

if (!$stmt) {
    die("Query prepare gagal: " . $koneksi->error);
}

$stmt->bind_param("sssssi", $judul, $nama, $lokasi, $kategori, $isi, $anonim);

if ($stmt->execute()) {
    echo "<script>alert('Cerita berhasil dikirim!'); window.location.href = 'galericerita.php';</script>";
} else {
    echo "Terjadi kesalahan saat menyimpan data: " . $stmt->error;
}

$stmt->close();
$koneksi->close();
?>