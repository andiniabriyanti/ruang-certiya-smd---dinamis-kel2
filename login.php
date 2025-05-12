<?php
session_start();

// Koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "ruangcerita_db");
if ($koneksi->connect_error) {
  die("Koneksi gagal: " . $koneksi->connect_error);
}

// Jika user sudah login, arahkan langsung
if (isset($_SESSION['username'])) {
  header("Location: galericerita.php");
  exit();
}

$error = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'] ?? '';
  $password = $_POST['password'] ?? '';

  $stmt = $koneksi->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
  if (!$stmt) {
    die("Prepare failed: " . $koneksi->error);
  }
  $stmt->bind_param("ss", $username, $password);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows === 1) {
    $_SESSION['username'] = $username;
    header("Location: galericerita.php");
    exit();
  } else {
    $error = "Username atau password salah.";
  }

  $stmt->close();
}
?><!DOCTYPE html><html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Ruang Cerita</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="login-body">
  <div class="login-box">
    <h1>Masuk ke Ruang Cerita</h1>
    <p>Silakan login untuk mulai berbagi cerita.</p>
    <?php if ($error): ?>
      <p style="color:red;">
        <?= $error ?>
      </p>
    <?php endif; ?>
    <form class="login-form" method="POST" action="">
      <input type="text" id="username" name="username" placeholder="Username" required />
      <input type="password" id="password" name="password" placeholder="Password" required />
      <button type="submit">Login</button>
    </form>
  </div>
</body>
</html>