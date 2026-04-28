<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>RUBBY Anabul Store</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1 class="logo">🐾 RUBBY Anabul Store</h1>
    <nav>
        <a href="#">Home</a>
        <a href="#produk">Produk</a>
        <a href="#about">About</a>
    </nav>
</header>

<section class="hero">
    <div class="hero-text">
        <h2>Tempat Terbaik untuk Anabul Kesayangan 🐶🐱</h2>
        <p>Makanan, aksesoris, dan kebutuhan terbaik untuk peliharaanmu</p>
        <button onclick="scrollToProduk()">Lihat Produk</button>
    </div>
</section>

<section id="produk" class="produk">
    <h2>Produk Kami</h2>

    <div class="card-container">

        <?php
        $query = mysqli_query($conn, "SELECT * FROM produk");

        while ($data = mysqli_fetch_assoc($query)) {
        ?>

        <div class="card">
            <img src="<?php echo $data['gambar']; ?>">
            <h3><?php echo $data['nama']; ?></h3>
            <p>Rp <?php echo number_format($data['harga'], 0, ',', '.'); ?></p>
        </div>

        <?php } ?>

    </div>
</section>

<section id="about" class="about">
    <h2>Tentang Kami</h2>
    <p>Kami menyediakan produk terbaik untuk hewan peliharaan kesayangan Anda dengan kualitas premium dan harga terjangkau.</p>
</section>

<footer>
    <p>© 2026 RUBBY KHAIRI ZAKKY Dibuat dengan ❤️</p>
</footer>

<script src="script.js"></script>
</body>
</html>