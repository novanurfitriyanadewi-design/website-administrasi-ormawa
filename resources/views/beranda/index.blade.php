@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@300;400;500&display=swap');

    .hero-section {
    position: relative;
    width: 100%;
    min-height: 100vh;
    height: 100vh;
    margin-top: -80px;
    overflow: hidden;
    font-family: 'DM Sans', sans-serif;
}

   .hero-bg {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center center;
    filter: brightness(.45) saturate(.85);
    transform: scale(1.05);
    transition: transform 8s ease;
}
    .hero-section:hover .hero-bg {
        transform: scale(1.0);
    }

    .hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(
            160deg,
            rgba(0,0,0,0.15) 0%,
            rgba(0,0,0,0.0) 40%,
            rgba(0,0,0,0.6) 100%
        );
    }

    .hero-content {
        position: relative;
        z-index: 10;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        height: 100%;
        padding: 0 6vw 7vh;
        color: #fff;
    }

    .hero-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-size: 11px;
        letter-spacing: 0.25em;
        text-transform: uppercase;
        color: rgba(255,255,255,0.6);
        margin-bottom: 16px;
    }

    .hero-eyebrow::before {
        content: '';
        display: block;
        width: 32px;
        height: 1px;
        background: rgba(255,255,255,0.5);
    }

    .hero-title {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: clamp(3rem, 8vw, 6.5rem);
        font-weight: 900;
        line-height: 0.95;
        letter-spacing: -0.02em;
        color: #fff;
        margin: 0 0 20px;
    }

    .hero-title span {
        color: #F0C040;
    }

    .hero-sub {
        font-size: clamp(0.9rem, 1.5vw, 1.1rem);
        font-weight: 300;
        color: rgba(255,255,255,0.7);
        max-width: 480px;
        line-height: 1.65;
        margin-bottom: 36px;
    }

    .hero-actions {
        display: flex;
        gap: 14px;
        flex-wrap: wrap;
        align-items: center;
    }

    .btn-primary-hero {
        background: #F0C040;
        color: #111;
        padding: 13px 28px;
        border-radius: 4px;
        font-size: 13px;
        font-weight: 500;
        letter-spacing: 0.04em;
        text-decoration: none;
        transition: background 0.2s, transform 0.2s;
    }

    .btn-primary-hero:hover {
        background: #FFD54F;
        transform: translateY(-1px);
    }

    .btn-ghost-hero {
        border: 1px solid rgba(255,255,255,0.35);
        color: rgba(255,255,255,0.85);
        padding: 12px 24px;
        border-radius: 4px;
        font-size: 13px;
        font-weight: 400;
        letter-spacing: 0.04em;
        text-decoration: none;
        backdrop-filter: blur(4px);
        transition: border-color 0.2s, color 0.2s, background 0.2s;
    }

    .btn-ghost-hero:hover {
        border-color: rgba(255,255,255,0.75);
        color: #fff;
        background: rgba(255,255,255,0.08);
    }

    /* Stats strip */
    .stats-strip {
        position: absolute;
        bottom: 0;
        right: 0;
        z-index: 10;
        display: flex;
        gap: 0;
    }

    .stat-item {
        padding: 20px 28px;
        background: rgba(255,255,255,0.07);
        backdrop-filter: blur(12px);
        border-left: 1px solid rgba(255,255,255,0.12);
        text-align: center;
        color: #fff;
    }

    .stat-number {
        font-family: 'Playfair Display', serif;
        font-size: 1.75rem;
        font-weight: 700;
        line-height: 1;
        color: #F0C040;
    }

    .stat-label {
        font-size: 10px;
        letter-spacing: 0.15em;
        text-transform: uppercase;
        color: rgba(255,255,255,0.5);
        margin-top: 4px;
    }

    /* About section */
    .about-section {
        display: grid;
        grid-template-columns: 1fr 1fr;
        max-width: 1100px;
        margin: 0 auto;
        padding: 96px 6vw;
        gap: 80px;
        align-items: center;
        font-family: 'DM Sans', sans-serif;
    }

    .about-label {
        font-size: 11px;
        letter-spacing: 0.2em;
        text-transform: uppercase;
        color: #B8922A;
        font-weight: 500;
        margin-bottom: 16px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .about-label::before {
        content: '';
        display: block;
        width: 24px;
        height: 1px;
        background: #B8922A;
    }

    .about-title {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: clamp(1.8rem, 3vw, 2.6rem);
        font-weight: 700;
        color: #1a1a1a;
        line-height: 1.2;
        margin: 0 0 20px;
    }

    .about-body {
        color: #5a5a5a;
        font-size: 15px;
        font-weight: 300;
        line-height: 1.8;
    }

    .about-divider {
        width: 48px;
        height: 2px;
        background: #F0C040;
        margin: 28px 0;
    }

    .about-visual {
        position: relative;
    }

    .about-visual-inner {
        aspect-ratio: 4/5;
        background: #f0ece4;
        border-radius: 2px;
        overflow: hidden;
        position: relative;
    }

    .about-visual-inner img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        filter: saturate(0.7);
    }

    .about-badge {
        position: absolute;
        bottom: -20px;
        left: -24px;
        background: #1a1a1a;
        color: #fff;
        padding: 20px 24px;
        font-family: 'DM Sans', sans-serif;
    }

    .about-badge strong {
        font-family: 'Playfair Display', serif;
        font-size: 2rem;
        font-weight: 700;
        color: #F0C040;
        display: block;
        line-height: 1;
    }

    .about-badge span {
        font-size: 10px;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: rgba(255,255,255,0.55);
        margin-top: 4px;
        display: block;
    }

    /* Features section */
    .features-section {
        background: #0f0f0f;
        padding: 88px 6vw;
        font-family: 'DM Sans', sans-serif;
    }

    .features-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .features-label {
        font-size: 11px;
        letter-spacing: 0.2em;
        text-transform: uppercase;
        color: #B8922A;
        font-weight: 500;
        margin-bottom: 14px;
    }

    .features-title {
        font-family: 'Playfair Display', Georgia, serif;
        font-size: clamp(1.8rem, 3vw, 2.4rem);
        font-weight: 700;
        color: #fff;
        line-height: 1.2;
    }

    .features-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1px;
        max-width: 1100px;
        margin: 0 auto;
        background: rgba(255,255,255,0.06);
        border: 1px solid rgba(255,255,255,0.06);
    }

    .feature-card {
        background: #0f0f0f;
        padding: 44px 36px;
        transition: background 0.2s;
        text-decoration: none;
    }

    .feature-card:hover {
        background: #181818;
    }

    .feature-icon {
        width: 44px;
        height: 44px;
        border: 1px solid rgba(240,192,64,0.3);
        border-radius: 2px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 24px;
        font-size: 20px;
        color: #F0C040;
        transition: border-color 0.2s, background 0.2s;
    }

    .feature-card:hover .feature-icon {
        border-color: #F0C040;
        background: rgba(240,192,64,0.08);
    }

    .feature-number {
        font-size: 11px;
        letter-spacing: 0.15em;
        color: rgba(255,255,255,0.2);
        font-weight: 500;
        margin-bottom: 10px;
    }

    .feature-title {
        font-family: 'Playfair Display', serif;
        font-size: 1.2rem;
        font-weight: 700;
        color: #fff;
        margin: 0 0 12px;
    }

    .feature-desc {
        font-size: 13px;
        color: rgba(255,255,255,0.45);
        line-height: 1.7;
        font-weight: 300;
    }

    .feature-arrow {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 12px;
        color: #F0C040;
        margin-top: 20px;
        letter-spacing: 0.04em;
        opacity: 0;
        transform: translateX(-6px);
        transition: opacity 0.2s, transform 0.2s;
    }

    .feature-card:hover .feature-arrow {
        opacity: 1;
        transform: translateX(0);
    }

   /* ===========================
   Laptop Besar
=========================== */

@media (min-width:1200px){

.hero-section{
    height:100vh;
}

.hero-bg{
    object-position:center center;
}

}


/* ===========================
   Laptop
=========================== */

@media (max-width:1199px){

.hero-section{
    height:90vh;
}

.hero-bg{
    object-position:center center;
}

.hero-content{
    padding:0 6vw 8vh;
}

}


/* ===========================
   Tablet
=========================== */

@media (max-width:992px){

.hero-section{
    height:80vh;
}

.hero-bg{
    object-position:center;
}

.hero-content{
    padding:0 6vw 8vh;
}

.hero-title{
    font-size:clamp(3rem,7vw,5rem);
}

.stats-strip{
    display:none;
}

.about-section{
    grid-template-columns:1fr;
    gap:50px;
}

.about-visual{
    display:none;
}

.features-grid{
    grid-template-columns:1fr;
}

}


/* ===========================
   HP
=========================== */

@media (max-width:768px){

.hero-section{
    height:70vh;
    margin-top:-70px;
}

.hero-bg{
    object-position:center;
}

.hero-content{
    justify-content:flex-end;
    padding:0 20px 45px;
}

.hero-title{
    font-size:clamp(2.5rem,10vw,4rem);
}

.hero-sub{
    max-width:100%;
    font-size:.95rem;
}

.hero-actions{
    flex-direction:column;
    width:100%;
}

.btn-primary-hero,
.btn-ghost-hero{
    width:100%;
    text-align:center;
}

.stats-strip{
    display:none;
}

}


/* ===========================
   HP Kecil
=========================== */

@media (max-width:480px){

.hero-section{
    height:65vh;
}

.hero-title{
    font-size:2.4rem;
}

.hero-sub{
    font-size:.85rem;
}

.hero-content{
    padding:0 16px 35px;
}

}
</style>

<!-- ===== HERO ===== -->
<section class="hero-section">

    <img
    src="{{ asset('images/ormawa.jpeg') }}"
    class="hero-bg"
    alt="ORMAWA F.SAINTEK">

    <div class="hero-overlay"></div>

    <div class="hero-content">
        <p class="hero-eyebrow">Selamat Datang Di</p>

        <h1 class="hero-title">
            ORMAWA<br>
            F.<span>SAINTEK</span>
        </h1>

        <p class="hero-sub">
            Platform digital pengelolaan administrasi organisasi mahasiswa —
            surat, program kerja, dan laporan kegiatan dalam satu sistem.
        </p>

        <div class="hero-actions">
            <a href="/program" class="btn-primary-hero">Lihat Program Kerja</a>
            <a href="/surat-masuk" class="btn-ghost-hero">Kelola Surat →</a>
        </div>
    </div>

    <!-- Stats strip -->
    <div class="stats-strip">
        <div class="stat-item">
            <div class="stat-number">3</div>
            <div class="stat-label">Organisasi</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">20</div>
            <div class="stat-label">Surat Terarsip</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">12+</div>
            <div class="stat-label">Program Kerja</div>
        </div>
    </div>

</section>


<!-- ===== TENTANG ===== -->
<section class="about-section">

    <div>
        <p class="about-label">Tentang Sistem</p>

        <h2 class="about-title">
            Administrasi yang Terstruktur &amp; Efisien
        </h2>

        <div class="about-divider"></div>

        <p class="about-body">
            Sistem Administrasi ORMAWA F.SAINTEK merupakan platform digital yang dirancang
            untuk membantu pengelolaan kegiatan organisasi mahasiswa — mulai dari pengarsipan
            surat masuk dan keluar, penyusunan program kerja, hingga pembuatan laporan
            kegiatan secara terstruktur dan efisien.
        </p>

        <p class="about-body" style="margin-top: 14px;">
            Seluruh proses administrasi dapat dikelola dalam satu sistem terpusat,
            meminimalkan kerja manual dan mempercepat alur birokrasi.
        </p>
    </div>

    <div class="about-visual">
        <div class="about-visual-inner">
            <img src="/images/ormawa.jpeg" alt="Kegiatan ORMAWA">
        </div>
        <div class="about-badge">
            <strong>2024</strong>
            <span>Tahun Aktif</span>
        </div>
    </div>

</section>


<!-- ===== FITUR ===== -->
<section class="features-section">

    <div class="features-header">
        <p class="features-label">Fitur Utama</p>
        <h2 class="features-title">Semua yang Anda Butuhkan</h2>
    </div>

    <div class="features-grid">

        <a href="/surat-masuk" class="feature-card">
            <div class="feature-icon">📄</div>
            <p class="feature-number">01</p>
            <h3 class="feature-title">Surat Masuk</h3>
            <p class="feature-desc">
                Pengelolaan dan pengarsipan surat masuk secara digital, rapi, dan mudah ditelusuri kapan saja.
            </p>
            <span class="feature-arrow">Kelola sekarang →</span>
        </a>

        <a href="/surat-keluar" class="feature-card">
            <div class="feature-icon">📤</div>
            <p class="feature-number">02</p>
            <h3 class="feature-title">Surat Keluar</h3>
            <p class="feature-desc">
                Pembuatan dan pencatatan surat keluar secara sistematis dengan nomor urut otomatis.
            </p>
            <span class="feature-arrow">Buat surat →</span>
        </a>

        <a href="/laporan" class="feature-card">
            <div class="feature-icon">📊</div>
            <p class="feature-number">03</p>
            <h3 class="feature-title">Laporan Kegiatan</h3>
            <p class="feature-desc">
                Penyusunan laporan kegiatan secara otomatis dan terstruktur berdasarkan data yang telah tersimpan.
            </p>
            <span class="feature-arrow">Lihat laporan →</span>
        </a>

    </div>

</section>

@endsection