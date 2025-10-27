<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="produk-dan-layanan">
    <div class="hero-section">
        <h1><?php echo $data['title']; ?></h1>
        <p class="description"><?php echo $data['description']; ?></p>
    </div>

    <div class="features">
        <!-- Features content will go here -->
        <div class="feature-item">
            <img src="<?php echo URLROOT; ?>/public/images/forex-icon.png" alt="Forex Trading">
            <h3>Forex Trading</h3>
            <p>Akses ke pasar valuta asing global dengan spread kompetitif dan eksekusi cepat.</p>
        </div>
        
        <div class="feature-item">
            <img src="<?php echo URLROOT; ?>/public/images/commodity-icon.png" alt="Komoditi">
            <h3>Komoditi</h3>
            <p>Perdagangan komoditas dengan beragam pilihan instrumen.</p>
        </div>
        
        <div class="feature-item">
            <img src="<?php echo URLROOT; ?>/public/images/stocks-icon.png" alt="Indeks Saham">
            <h3>Indeks Saham</h3>
            <p>Akses ke indeks saham global melalui satu platform terintegrasi.</p>
        </div>
    </div>

    <div class="certification">
        <img src="<?php echo URLROOT; ?>/public/images/certification.png" alt="Sertifikasi">
        <p>PT Global Investama Financial telah mendapat ijin sebagai PENYELENGGARA SISTEM PERDAGANGAN ALTERNATIF melalui Surat Keputusan (SK) Kepala Bappebti Nomor : No.05/UPTP/SP/10/2024</p>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>