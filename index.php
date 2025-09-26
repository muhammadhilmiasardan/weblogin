<?php
session_start();
include "config.php";

// ===== 1. Auto login pakai cookie =====
if (!isset($_SESSION['username']) && isset($_COOKIE['username']) && isset($_COOKIE['nim'])) {
    $username = $_COOKIE['username'];
    $nim      = $_COOKIE['nim'];

    $sql = "SELECT * FROM users WHERE username='$username' AND nim='$nim'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Buat session dari cookie
        $_SESSION['username'] = $row['username'];
        $_SESSION['nama']     = $row['nama_lengkap'];
        $_SESSION['nim']      = $row['nim'];
        $_SESSION['foto']     = $row['foto'];

        header("Location: web.php");
        exit();
    }
}

// ===== 2. Kalau sudah login dengan session =====
if (isset($_SESSION['username'])) {
    header("Location: web.php");
    exit();
}

// ===== 3. Proses login form =====
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; // nim

    $sql = "SELECT * FROM users WHERE username='$username' AND nim='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Simpan session
        $_SESSION['username'] = $row['username'];
        $_SESSION['nama']     = $row['nama_lengkap'];
        $_SESSION['nim']      = $row['nim'];
        $_SESSION['foto']     = $row['foto'];

        // Kalau Remember Me dicentang → simpan cookie 7 hari
        if (!empty($_POST['remember'])) {
            setcookie("username", $row['username'], time() + (86400 * 7), "/"); 
            setcookie("nim", $row['nim'], time() + (86400 * 7), "/");
        }

        header("Location: web.php");
        exit();
    } else {
        echo "<script>alert('Username atau Password salah'); window.location='index.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
  <?php include "login.html"; ?>
</body>
</html>
