<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage Pribadi</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Fade-in animation */
    .fade-in {
      opacity: 0;
      transform: translateY(50px);
      transition: all 0.8s ease;
    }
    .fade-in.show {
      opacity: 1;
      transform: translateY(0);
    }

    /* Card hover */
    .card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    /* Social icon hover */
    .social-icon img {
      transition: transform 0.4s ease;
    }
    .social-icon:hover img {
      transform: rotate(360deg) scale(1.2);
    }

     .btn-custom {
    background-color: transparent;
    color: var(--bs-body-color);
    border: 1px solid var(--bs-body-color);
    transition: all 0.3s ease;
  }

  .btn-custom:hover {
    background-color: var(--bs-primary);
    color: #fff;
    border-color: var(--bs-primary);
    transform: translateY(-2px);
  }

  /* Default state */
  .navbar .nav-link {
    color: var(--bs-body-color);
    transition: all 0.3s ease;
    position: relative;
  }

  /* Hover effect */
  .navbar .nav-link:hover {
    color: var(--bs-primary);
  }

  /* Active (halaman aktif / diklik) */
  .navbar .nav-link.active {
    color: var(--bs-primary);
    font-weight: 600;
  }

  /* Animasi underline */
  .navbar .nav-link::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 0;
    height: 2px;
    background-color: var(--bs-primary);
    transition: width 0.3s ease;
  }

  .navbar .nav-link:hover::after,
  .navbar .nav-link.active::after {
    width: 100%;
  }
  </style>
</head>
<body>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="#Home">Muhammad Hilmi Asardan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" href="#About">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#Project">Project</a></li>
          <li class="nav-item"><a class="nav-link" href="#Tech">Techstack</a></li>
          <li class="nav-item"><a class="nav-link" href="#Certificate">Certificate</a></li>
          <li class="nav-item"><a class="nav-link" href="#Contact">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <br><br><br><br>

  <!--ABOUT/BIO-->
  <div class="container fade-in" id="About">
    <div class="row align-items-center">
      <div class="col-md-4 text-center">
        <img src="assets/FP-FORMAL.jpeg" class="img-fluid rounded-circle shadow" alt="" style="width: 200px; height: 200px; object-fit: cover;">
      </div>
      <div class="col-md-8">
        <h2>ABOUT</h2>
        <p>
          Halo teman teman perkenalkan nama saya <b>Muhammad Hilmi Asardan</b> <br>
          Dengan NIM 2304140051 Prodi Sistem Informasi Rombel 2. <br>
          Ini adalah desktop pribadi pertama saya.
        </p>
        <a href="https://drive.google.com/file/d/1FOtEESXaDquMOe2Kclnkgg73QfDXiKuS/view?usp=drive_link" class="btn btn-custom btn-sm">CV</a>
        <a href="https://github.com/muhammadhilmiasardan?tab=repositories" class="btn btn-custom btn-sm">Portofolio</a>
      </div>
    </div>
  </div>

  <br><br><br>

  <!--Project-->
  <div class="container fade-in" id="Project">
    <h2 class="text-center mb-4">Project</h2>
    <div class="row justify-content-center">
      <!-- Card 1 -->
      <div class="col-md-4 mb-4 d-flex">
        <div class="card shadow-sm flex-fill">
          <img src="assets/Sepatustore.jpeg" class="card-img-top" alt="SepatuStore">
          <div class="card-body text-center">
            <h5 class="card-title">SepatuStore E-Commerce</h5>
            <p class="card-text">Platform e-commerce sepatu berbasis Laravel dengan antarmuka responsif.</p>
            <a href="https://github.com/muhammadhilmiasardan/Sepatu-Store" class="btn btn-custom btn-sm">Kunjungi</a>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-md-4 mb-4 d-flex">
        <div class="card shadow-sm flex-fill">
          <img src="assets/SPK.png" class="card-img-top" alt="Best Lecturers">
          <div class="card-body text-center">
            <h5 class="card-title">Best Lecturers Decision Support System</h5>
            <p class="card-text">Sistem pendukung keputusan berbasis web untuk pemilihan dosen terbaik.</p>
            <a href="https://github.com/muhammadhilmiasardan/Best-Lecturers-Decision-Support-System-Web-Based-on-SINTA-Metrics" class="btn btn-custom btn-sm">Kunjungi</a>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-md-4 mb-4 d-flex">
        <div class="card shadow-sm flex-fill">
          <img src="assets/travelin.png" class="card-img-top" alt="Travelin">
          <div class="card-body text-center">
            <h5 class="card-title">Travelin</h5>
            <p class="card-text">Prototype website perjalanan menggunakan Figma dengan UCD.</p>
            <a href="https://www.figma.com/design/XjXPJl5YAx2rl9Dqv0K9Tv/TRAVELIN" class="btn btn-custom btn-sm">Kunjungi</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br><br><br>

  <!-- Techstack -->
  <div class="container text-center fade-in" id="Tech">
    <h2>Techstack</h2>
    <div class="d-flex justify-content-center gap-3 mt-3 flex-wrap">
      <img src="assets/html.png" alt="" width="50">
      <img src="assets/css.png" alt="" width="50">
      <img src="assets/js.png" alt="" width="50">
      <img src="assets/python.png" alt="" width="50">
      <img src="assets/mysql.png" alt="" width="50">
      <img src="assets/laravel.png" alt="" width="50">
    </div>
  </div>

  <br><br><br>

  <!-- Certificate -->
  <div class="container fade-in" id="Certificate">
    <h2 class="text-center mb-4">Certificate</h2>
    <div class="row">
      <div class="col-md-4 mb-4 d-flex">
        <div class="card shadow-sm flex-fill">
          <img src="assets/Oracle.png" class="card-img-top" alt="">
          <div class="card-body text-center">
            <h5 class="card-title">Java Fundamentals</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 d-flex">
        <div class="card shadow-sm flex-fill">
          <img src="assets/dicoding.png" class="card-img-top" alt="">
          <div class="card-body text-center">
            <h5 class="card-title">DevOps Dicoding</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 d-flex">
        <div class="card shadow-sm flex-fill">
          <img src="assets/Cyber.png" class="card-img-top" alt="">
          <div class="card-body text-center">
            <h5 class="card-title">Junior Cybersecurity Analyst</h5>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-dark text-light py-5 mt-5 fade-in" id="Contact">
    <div class="container text-center">
      <h2 class="mb-4">Contact Me</h2>
      <div class="d-flex justify-content-center gap-3 mb-4">
        <a href="https://www.linkedin.com/in/muhammad-hilmi-asardan" class="social-icon" target="_blank">
          <img src="assets/linkedin.png" alt="" width="50">
        </a>
        <a href="https://github.com/muhammadhilmiasardan?tab=repositories" class="social-icon" target="_blank">
          <img src="assets/github.png" alt="" width="50">
        </a>
        <a href="https://www.instagram.com/vxzehil" class="social-icon" target="_blank">
          <img src="assets/instagram.png" alt="" width="50">
        </a>
      </div>
      <p class="mb-0">&copy; 2025 Muhammad Hilmi Asardan. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Intersection Observer untuk animasi fade-in
    const faders = document.querySelectorAll('.fade-in');
    const options = {
      threshold: 0.2
    };
      document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".navbar .nav-link");

    navLinks.forEach(link => {
      link.addEventListener("click", function () {
        // Hapus active dari semua nav-link
        navLinks.forEach(l => l.classList.remove("active"));
        // Tambahkan active ke link yang diklik
        this.classList.add("active");
      });
    });
  });
    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if(entry.isIntersecting){
          entry.target.classList.add('show');
          observer.unobserve(entry.target);
        }
      });
    }, options);

    faders.forEach(fade => {
      observer.observe(fade);
    });
  </script>
</body>
</html>
