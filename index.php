<?php
// Get the requested URL (path)
$request_uri = $_SERVER['REQUEST_URI'];

// Start buffering the output (optional, for cleaner output)
ob_start();

// Decide what to include based on the route
switch ($request_uri) {
    case '/':
        $title = "PT. Arya Cakra Mahkota - Home";
        break;

    case '/about':
        $title = "PT. Arya Cakra Mahkota - About";
        break;

    case '/catalog':
        $title = "PT. Arya Cakra Mahkota - Catalog";
        break;

    case '/contact':
        $title = "PT. Arya Cakra Mahkota - Contact";
        break;

    default:
        $title = "404 - Page Not Found";
        break;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="assets/styles/style.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main>
        <!-- Hero Section -->
        <?php if ($request_uri == '/'): ?>
        <section class="hero">
            <div class="hero-content">
                <h1>Solusi Terbaik untuk Kebutuhan Jasa & Perdagangan Anda</h1>
                <p>PT. Arya Cakra Mahkota hadir sebagai mitra terpercaya dalam layanan dan distribusi produk berkualitas, berlokasi strategis di jantung Jakarta Pusat.</p>
                <div class="cta-buttons">
                    <a href="/about" class="cta-button">Pelajari Lebih Lanjut</a>
                    <a href="tel:+0213922566" class="cta-button">Hubungi Kami</a>
                </div>
            </div>
            <div class="hero-image-container">
                <img src="assets/images/img.png" alt="Hero Image" class="hero-image">
            </div>
        </section>
        <?php endif; ?>

        <!-- Tentang Kami Section -->
        <?php if ($request_uri == '/about'): ?>
        <section class="about">
            <h2>Tentang PT. Arya Cakra Mahkota</h2>
            <p>PT. Arya Cakra Mahkota adalah perusahaan yang bergerak di bidang jasa dan perdagangan, berlokasi di Hotel Bintang Wisata Mandiri Building, Lantai 1, Seroja -1, Jl. Raden Saleh, Cikini, Jakarta Pusat. Sejak awal berdiri, kami berkomitmen untuk memberikan layanan terbaik dan produk berkualitas tinggi kepada pelanggan di berbagai sektor industri.</p>
            <a href="/contact" class="cta-button">Lihat Kontak Kami</a>
        </section>
        <?php endif; ?>

        <!-- Katalog Section -->
        <?php if ($request_uri == '/catalog'): ?>
        <section class="catalog">
            <h2>Katalog</h2>
            <p>Solusi terbaik untuk kebutuhan industri Anda, mulai dari alat berat, perlindungan kerja, hingga sistem perpipaan.</p>
            <div class="catalog-items">
                <div class="catalog-item">
                    <img src="assets/images/img produk 1.png" alt="Heavy Equipment & Parts">
                    <h3>Heavy Equipment & Parts</h3>
                    <p>Ropes, chain hoist, wire rope system, lifting slings, untuk mendukung operasional industri berat dan proyek besar.</p>
                </div>
                <div class="catalog-item">
                    <img src="assets/images/img produk 2.png" alt="Safety & Equipment">
                    <h3>Safety & Equipment</h3>
                    <p>Perlengkapan keselamatan seperti helm, sarung tangan, sepatu safety, respirator, hingga shower darurat untuk perlindungan kerja maksimal.</p>
                </div>
                <div class="catalog-item">
                    <img src="assets/images/img produk 3.png" alt="Pipe & Fitting / Plates">
                    <h3>Pipe & Fitting / Plates</h3>
                    <p>Beragam pipa baja, fitting (elbow, flange), dan plat logam berkualitas tinggi untuk konstruksi dan industri.</p>
                </div>
            </div>
            <a href="/catalog" class="cta-button">Lihat Lebih Banyak</a>
        </section>
        <?php endif; ?>

        <!-- Contact Section -->
        <?php if ($request_uri == '/contact'): ?>
        <section class="contact">
            <div class="contact-inner">
                <h2>Hubungi Kami</h2>
                <p class="contact-intro">
                    Kami siap membantu Anda. Jangan ragu untuk menghubungi kami untuk
                    informasi produk, konsultasi, atau penawaran kerja sama.
                </p>
                <dl class="contact-list">
                    <dt>Alamat Kantor</dt>
                    <dd>Hotel Bintang Wisata Mandiri Building 1st Floor, Seroja -1, Jl. Raden Saleh, Cikini, Jakarta Pusat</dd>
                    <dt>Telepon</dt>
                    <dd>021 – 392 – 2566</dd>
                    <dt>Handphone</dt>
                    <dd>0811 – 8129 – 6000</dd>
                    <dt>Email</dt>
                    <dd><a href="mailto:aryacakramahkota@gmail.com">aryacakramahkota@gmail.com</a><br>
                        <a href="mailto:cakramahkota168@gmail.com">cakramahkota168@gmail.com</a></dd>
                </dl>
            </div>
        </section>
        <?php endif; ?>

        <!-- 404 Section (For unrecognized routes) -->
        <?php if (!in_array($request_uri, ['/', '/about', '/catalog', '/contact'])): ?>
        <section class="error">
            <h2>404 - Page Not Found</h2>
            <p>Sorry, the page you are looking for does not exist. Please check the URL or go back to the <a href="/">home page</a>.</p>
        </section>
        <?php endif; ?>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>

<?php
// Flush the output buffer if started
ob_end_flush();
?>
