<?php
session_start();

// Hapus semua data session
session_unset();
session_destroy();

// Arahkan kembali ke halaman index
header("Location: index.php");
exit();