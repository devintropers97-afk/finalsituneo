<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Lengkap SITUNEO - 2 Sistem Pembayaran</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #1E5C99;
            --dark-blue: #0F3057;
            --gold: #FFB400;
            --bright-gold: #FFD700;
            --white: #ffffff;
            --text-light: #e9ecef;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Inter', sans-serif;
            background: var(--dark-blue);
            color: var(--white);
            line-height: 1.6;
            padding-bottom: 50px;
        }
        .header {
            background: linear-gradient(135deg, #1E5C99 0%, #0F3057 100%);
            padding: 50px 20px;
            text-align: center;
            border-bottom: 4px solid var(--gold);
        }
        .header h1 {
            font-size: clamp(1.8rem, 5vw, 3.2rem);
            font-weight: 900;
            color: var(--bright-gold);
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            margin-bottom: 12px;
        }
        .header p {
            font-size: clamp(0.95rem, 2vw, 1.15rem);
            color: var(--text-light);
            max-width: 900px;
            margin: 0 auto;
        }
        .service-card {
            background: linear-gradient(145deg, rgba(255,255,255,0.08) 0%, rgba(255,255,255,0.03) 100%);
            border: 2px solid rgba(255,180,0,0.3);
            border-radius: 16px;
            padding: 28px;
            margin: 28px auto;
            max-width: 1200px;
            position: relative;
        }
        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(180deg, #FFD700 0%, #FFB400 100%);
        }
        .service-title {
            font-size: clamp(1.3rem, 2.5vw, 1.9rem);
            font-weight: 900;
            color: var(--bright-gold);
            margin-bottom: 10px;
        }
        .penjelasan-box {
            background: rgba(30,92,153,0.2);
            border-left: 3px solid var(--gold);
            padding: 18px;
            border-radius: 8px;
            margin: 18px 0;
            font-size: 0.96rem;
            line-height: 1.7;
        }
        .payment-systems {
            background: rgba(255,180,0,0.08);
            border: 2px solid var(--gold);
            border-radius: 12px;
            padding: 22px;
            margin: 22px 0;
        }
        .payment-title {
            color: var(--bright-gold);
            font-size: 1.3rem;
            font-weight: 800;
            margin-bottom: 18px;
            text-align: center;
        }
        .payment-options {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 18px;
            margin-top: 16px;
        }
        .payment-option {
            background: linear-gradient(145deg, rgba(255,255,255,0.08) 0%, rgba(255,255,255,0.03) 100%);
            border: 2px solid rgba(255,180,0,0.4);
            border-radius: 12px;
            padding: 20px;
            transition: all 0.3s;
        }
        .payment-option:hover {
            transform: translateY(-3px);
            border-color: var(--bright-gold);
            box-shadow: 0 8px 25px rgba(255,180,0,0.25);
        }
        .payment-option.recommended {
            border: 3px solid var(--bright-gold);
            position: relative;
        }
        .payment-option.recommended::before {
            content: '✨ LEBIH PRAKTIS';
            position: absolute;
            top: -12px;
            right: 12px;
            background: linear-gradient(135deg, #FFD700 0%, #FFB400 100%);
            color: var(--dark-blue);
            padding: 4px 12px;
            border-radius: 10px;
            font-weight: 800;
            font-size: 0.7rem;
        }
        .payment-badge {
            background: linear-gradient(135deg, #FFD700 0%, #FFB400 100%);
            color: var(--dark-blue);
            padding: 8px 16px;
            border-radius: 8px;
            font-weight: 800;
            font-size: 0.9rem;
            margin-bottom: 14px;
            display: inline-block;
        }
        .payment-price {
            font-size: 2.2rem;
            font-weight: 900;
            color: var(--bright-gold);
            margin: 12px 0;
        }
        .payment-note {
            font-size: 0.95rem;
            color: var(--text-light);
            margin-bottom: 16px;
        }
        .benefit-list {
            list-style: none;
            padding: 0;
            margin: 14px 0;
        }
        .benefit-list li {
            padding: 7px 0 7px 24px;
            position: relative;
            font-size: 0.92rem;
            line-height: 1.6;
        }
        .benefit-list li:before {
            content: "✅";
            position: absolute;
            left: 0;
            font-size: 0.9rem;
        }
        .drawback-list {
            list-style: none;
            padding: 0;
            margin: 14px 0;
        }
        .drawback-list li {
            padding: 7px 0 7px 24px;
            position: relative;
            font-size: 0.92rem;
            line-height: 1.6;
            opacity: 0.85;
        }
        .drawback-list li:before {
            content: "❌";
            position: absolute;
            left: 0;
            font-size: 0.9rem;
        }
        .comparison-box {
            background: rgba(30,92,153,0.3);
            border-radius: 8px;
            padding: 14px;
            margin-top: 14px;
            font-size: 0.9rem;
        }
        .btn-order {
            display: inline-block;
            background: linear-gradient(135deg, #FFD700 0%, #FFB400 100%);
            color: var(--dark-blue);
            padding: 14px 35px;
            border-radius: 10px;
            font-weight: 800;
            font-size: 1.05rem;
            text-decoration: none;
            transition: all 0.3s;
            margin: 20px 5px;
        }
        .btn-order:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 30px rgba(255,180,0,0.5);
            color: var(--dark-blue);
        }
        .features-list {
            list-style: none;
            padding: 0;
            margin: 18px 0;
        }
        .features-list li {
            padding: 9px 12px 9px 32px;
            position: relative;
            font-size: 0.93rem;
            line-height: 1.5;
            margin-bottom: 7px;
            background: rgba(255,255,255,0.03);
            border-radius: 6px;
        }
        .features-list li:before {
            content: "✓";
            position: absolute;
            left: 10px;
            top: 9px;
            color: var(--gold);
            font-weight: 900;
            font-size: 1.1rem;
        }
        .cocok-untuk {
            background: linear-gradient(135deg, rgba(30,92,153,0.4) 0%, rgba(15,48,87,0.4) 100%);
            border: 2px solid rgba(255,180,0,0.4);
            border-radius: 10px;
            padding: 18px;
            margin-top: 20px;
        }
        .cocok-untuk-title {
            font-weight: 800;
            font-size: 1.05rem;
            color: var(--bright-gold);
            margin-bottom: 12px;
        }
        @media (max-width: 768px) {
            .payment-options { grid-template-columns: 1fr; }
            .service-card { padding: 20px; }
        }
    </style>
</head>
<body>

<div class="header">
    <h1>📚 KATALOG LENGKAP SITUNEO DIGITAL</h1>
    <p>
        Semua Layanan dengan <strong>2 Sistem Pembayaran</strong>: Bayar Sekali atau Sewa Bulanan<br>
        Penjelasan Detail yang Mudah Dipahami!
    </p>
</div>

<div class="container">

<!-- Services Section -->
<section id="services" class="py-5" style="background: linear-gradient(135deg, #0F3057 0%, #1E5C99 100%);">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="display-4 fw-bold mb-3" style="color: #FFD700;">
                🎯 LAYANAN KAMI
            </h2>
            <p class="lead text-white-50" style="max-width: 800px; margin: 0 auto;">
                10 Kategori Layanan Digital dengan 50+ Solusi Lengkap untuk Bisnis Anda<br>
                <strong style="color: #FFB400;">Semua dengan 2 Sistem Pembayaran: Bayar Sekali atau Sewa Bulanan!</strong>
            </p>
        </div>

        <!-- Tabs Navigation untuk 10 Kategori -->
        <ul class="nav nav-pills nav-fill mb-5" id="servicesTabs" role="tablist" style="background: rgba(255,255,255,0.1); border-radius: 15px; padding: 10px;">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="cat1-tab" data-bs-toggle="pill" data-bs-target="#cat1" type="button" style="border-radius: 10px; font-weight: 600;">
                    🌐 Website
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="cat2-tab" data-bs-toggle="pill" data-bs-target="#cat2" type="button" style="border-radius: 10px; font-weight: 600;">
                    📱 Mobile App
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="cat3-tab" data-bs-toggle="pill" data-bs-target="#cat3" type="button" style="border-radius: 10px; font-weight: 600;">
                    📢 Marketing
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="cat4-tab" data-bs-toggle="pill" data-bs-target="#cat4" type="button" style="border-radius: 10px; font-weight: 600;">
                    🤖 AI & Otomasi
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="cat5-tab" data-bs-toggle="pill" data-bs-target="#cat5" type="button" style="border-radius: 10px; font-weight: 600;">
                    💼 Sistem Bisnis
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="cat6-tab" data-bs-toggle="pill" data-bs-target="#cat6" type="button" style="border-radius: 10px; font-weight: 600;">
                    🎨 Desain
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="cat7-tab" data-bs-toggle="pill" data-bs-target="#cat7" type="button" style="border-radius: 10px; font-weight: 600;">
                    📊 Analytics
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="cat8-tab" data-bs-toggle="pill" data-bs-target="#cat8" type="button" style="border-radius: 10px; font-weight: 600;">
                    🔧 Maintenance
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="cat9-tab" data-bs-toggle="pill" data-bs-target="#cat9" type="button" style="border-radius: 10px; font-weight: 600;">
                    🎓 Training
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="cat10-tab" data-bs-toggle="pill" data-bs-target="#cat10" type="button" style="border-radius: 10px; font-weight: 600;">
                    🎁 Paket
                </button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="servicesTabContent">
            
            <!-- ============================================ -->
            <!-- KATEGORI 1: WEBSITE & WEB DEVELOPMENT -->
            <!-- ============================================ -->
            <div class="tab-pane fade show active" id="cat1" role="tabpanel">
                <div class="text-center mb-4">
                    <h3 class="fw-bold" style="color: #FFD700;">🌐 WEBSITE & WEB DEVELOPMENT</h3>
                    <p class="text-white-50">11 Jenis Website Profesional dengan 2 Sistem Pembayaran</p>
                </div>

                <div class="row g-4">
                    <!-- Service 1: Landing Page -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up">
                        <div class="card h-100 border-0 shadow-lg" style="background: linear-gradient(145deg, rgba(255,255,255,0.95) 0%, rgba(255,255,255,0.9) 100%); border-radius: 20px; overflow: hidden; transition: transform 0.3s;">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="icon-box" style="width: 60px; height: 60px; background: linear-gradient(135deg, #FFD700 0%, #FFB400 100%); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                        <i class="bi bi-file-earmark-text" style="font-size: 28px; color: #0F3057;"></i>
                                    </div>
                                    <div>
                                        <h5 class="card-title mb-1 fw-bold" style="color: #0F3057;">Landing Page</h5>
                                        <small class="text-muted">Website 1 Halaman</small>
                                    </div>
                                </div>
                                
                                <p class="card-text text-muted small mb-3">
                                    Website simpel 1 halaman untuk promosi produk/jasa atau profil usaha. Semua info penting dalam 1 halaman.
                                </p>

                                <!-- Sistem Pembayaran -->
                                <div class="pricing-options mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2 p-2" style="background: rgba(30,92,153,0.1); border-radius: 8px;">
                                        <div>
                                            <small class="fw-bold" style="color: #0F3057;">💳 Bayar Sekali</small>
                                        </div>
                                        <div>
                                            <span class="fw-bold" style="color: #FFB400; font-size: 1.1rem;">Rp 350.000</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center p-2" style="background: rgba(255,180,0,0.15); border-radius: 8px; border: 2px solid #FFB400;">
                                        <div>
                                            <small class="fw-bold" style="color: #0F3057;">📅 Sewa Bulanan</small>
                                            <span class="badge bg-warning text-dark ms-1" style="font-size: 0.65rem;">POPULER</span>
                                        </div>
                                        <div>
                                            <span class="fw-bold" style="color: #FFB400; font-size: 1.1rem;">Rp 150rb/bln</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Features -->
                                <ul class="list-unstyled small mb-3">
                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Responsif mobile</li>
                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Tombol WhatsApp</li>
                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Google Maps</li>
                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>SEO Basic</li>
                                </ul>

                                <a href="#" class="btn btn-primary w-100" style="background: linear-gradient(135deg, #1E5C99 0%, #0F3057 100%); border: none; border-radius: 10px; font-weight: 600;">
                                    <i class="bi bi-info-circle me-2"></i>Detail & Order
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Service 2: Multi Page Website -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card h-100 border-0 shadow-lg" style="background: linear-gradient(145deg, rgba(255,255,255,0.95) 0%, rgba(255,255,255,0.9) 100%); border-radius: 20px;">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="icon-box" style="width: 60px; height: 60px; background: linear-gradient(135deg, #FFD700 0%, #FFB400 100%); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                        <i class="bi bi-files" style="font-size: 28px; color: #0F3057;"></i>
                                    </div>
                                    <div>
                                        <h5 class="card-title mb-1 fw-bold" style="color: #0F3057;">Multi Page Website</h5>
                                        <small class="text-muted">4-6 Halaman Lengkap</small>
                                    </div>
                                </div>
                                
                                <p class="card-text text-muted small mb-3">
                                    Website profesional dengan beberapa halaman (Home, About, Services, Portfolio, Contact, Blog).
                                </p>

                                <div class="pricing-options mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2 p-2" style="background: rgba(30,92,153,0.1); border-radius: 8px;">
                                        <small class="fw-bold" style="color: #0F3057;">💳 Bayar Sekali</small>
                                        <span class="fw-bold" style="color: #FFB400; font-size: 1.1rem;">Rp 750.000</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center p-2" style="background: rgba(255,180,0,0.15); border-radius: 8px; border: 2px solid #FFB400;">
                                        <small class="fw-bold" style="color: #0F3057;">📅 Sewa Bulanan</small>
                                        <span class="fw-bold" style="color: #FFB400; font-size: 1.1rem;">Rp 250rb/bln</span>
                                    </div>
                                </div>

                                <ul class="list-unstyled small mb-3">
                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>4-6 halaman custom</li>
                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Menu navigasi</li>
                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Galeri foto</li>
                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Contact form</li>
                                </ul>

                                <a href="#" class="btn btn-primary w-100" style="background: linear-gradient(135deg, #1E5C99 0%, #0F3057 100%); border: none; border-radius: 10px; font-weight: 600;">
                                    <i class="bi bi-info-circle me-2"></i>Detail & Order
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Service 3: E-Commerce -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card h-100 border-0 shadow-lg" style="background: linear-gradient(145deg, rgba(255,255,255,0.95) 0%, rgba(255,255,255,0.9) 100%); border-radius: 20px; position: relative;">
                            <div class="position-absolute" style="top: 10px; right: 10px; background: linear-gradient(135deg, #ff4757 0%, #ff6348 100%); color: white; padding: 5px 12px; border-radius: 15px; font-size: 0.7rem; font-weight: 800; box-shadow: 0 3px 10px rgba(255,71,87,0.3);">
                                ⭐ BEST SELLER
                            </div>
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="icon-box" style="width: 60px; height: 60px; background: linear-gradient(135deg, #FFD700 0%, #FFB400 100%); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                        <i class="bi bi-cart-check" style="font-size: 28px; color: #0F3057;"></i>
                                    </div>
                                    <div>
                                        <h5 class="card-title mb-1 fw-bold" style="color: #0F3057;">Toko Online</h5>
                                        <small class="text-muted">E-Commerce Lengkap</small>
                                    </div>
                                </div>
                                
                                <p class="card-text text-muted small mb-3">
                                    Toko online komplit dengan sistem pembayaran, keranjang belanja, manajemen stok & ongkir.
                                </p>

                                <div class="pricing-options mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2 p-2" style="background: rgba(30,92,153,0.1); border-radius: 8px;">
                                        <small class="fw-bold" style="color: #0F3057;">💳 Bayar Sekali</small>
                                        <span class="fw-bold" style="color: #FFB400; font-size: 1.1rem;">Rp 1,5jt</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center p-2" style="background: rgba(255,180,0,0.15); border-radius: 8px; border: 2px solid #FFB400;">
                                        <small class="fw-bold" style="color: #0F3057;">📅 Sewa Bulanan</small>
                                        <span class="fw-bold" style="color: #FFB400; font-size: 1.1rem;">Rp 350rb/bln</span>
                                    </div>
                                </div>

                                <ul class="list-unstyled small mb-3">
                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Payment gateway</li>
                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Manajemen stok</li>
                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Integrasi ongkir</li>
                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Admin dashboard</li>
                                </ul>

                                <a href="#" class="btn btn-primary w-100" style="background: linear-gradient(135deg, #1E5C99 0%, #0F3057 100%); border: none; border-radius: 10px; font-weight: 600;">
                                    <i class="bi bi-info-circle me-2"></i>Detail & Order
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Service 4: Custom Web App -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up">
                        <div class="card h-100 border-0 shadow-lg" style="background: linear-gradient(145deg, rgba(255,255,255,0.95) 0%, rgba(255,255,255,0.9) 100%); border-radius: 20px;">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="icon-box" style="width: 60px; height: 60px; background: linear-gradient(135deg, #FFD700 0%, #FFB400 100%); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                        <i class="bi bi-code-slash" style="font-size: 28px; color: #0F3057;"></i>
                                    </div>
                                    <div>
                                        <h5 class="card-title mb-1 fw-bold" style="color: #0F3057;">Custom Web App</h5>
                                        <small class="text-muted">Sistem Custom</small>
                                    </div>
                                </div>
                                
                                <p class="card-text text-muted small mb-3">
                                    Website atau sistem dibuat khusus 100% sesuai kebutuhan bisnis. Bisa untuk sistem internal, portal, dll.
                                </p>

                                <div class="pricing-options mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2 p-2" style="background: rgba(30,92,153,0.1); border-radius: 8px;">
                                        <small class="fw-bold" style="color: #0F3057;">💳 Bayar Sekali</small>
                                        <span class="fw-bold" style="color: #FFB400; font-size: 1rem;">Mulai Rp 2jt</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center p-2" style="background: rgba(255,180,0,0.15); border-radius: 8px; border: 2px solid #FFB400;">
                                        <small class="fw-bold" style="color: #0F3057;">📅 Sewa Bulanan</small>
                                        <span class="fw-bold" style="color: #FFB400; font-size: 1rem;">Rp 500rb-1jt/bln</span>
                                    </div>
                                </div>

                                <ul class="list-unstyled small mb-3">
                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>100% custom</li>
                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Database kompleks</li>
                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Multi-user role</li>
                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>API integration</li>
                                </ul>

                                <a href="#" class="btn btn-primary w-100" style="background: linear-gradient(135deg, #1E5C99 0%, #0F3057 100%); border: none; border-radius: 10px; font-weight: 600;">
                                    <i class="bi bi-info-circle me-2"></i>Konsultasi Gratis
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Service 5: Company Profile -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card h-100 border-0 shadow-lg" style="background: linear-gradient(145deg, rgba(255,255,255,0.95) 0%, rgba(255,255,255,0.9) 100%); border-radius: 20px;">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="icon-box" style="width: 60px; height: 60px; background: linear-gradient(135deg, #FFD700 0%, #FFB400 100%); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                        <i class="bi bi-building" style="font-size: 28px; color: #0F3057;"></i>
                                    </div>
                                    <div>
                                        <h5 class="card-title mb-1 fw-bold" style="color: #0F3057;">Company Profile</h5>
                                        <small class="text-muted">Profil Perusahaan</small>
                                    </div>
                                </div>
                                
                                <p class="card-text text-muted small mb-3">
                                    Website resmi perusahaan dengan profil lengkap, visi misi, tim, produk/layanan, dan kontak.
                                </p>

                                <div class="pricing-options mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2 p-2" style="background: rgba(30,92,153,0.1); border-radius: 8px;">
                                        <small class="fw-bold" style="color: #0F3057;">💳 Bayar Sekali</small>
                                        <span class="fw-bold" style="color: #FFB400; font-size: 1.1rem;">Rp 900.000</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center p-2" style="background: rgba(255,180,0,0.15); border-radius: 8px; border: 2px solid #FFB400;">
                                        <small class="fw-bold" style="color: #0F3057;">📅 Sewa Bulanan</small>
                                        <span class="fw-bold" style="color: #FFB400; font-size: 1.1rem;">Rp 300rb/bln</span>
                                    </div>
                                </div>

                                <ul class="list-unstyled small mb-3">
                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Profil perusahaan lengkap</li>
                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Galeri produk/jasa</li>
                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Tim & struktur organisasi</li>
                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Testimoni client</li>
                                </ul>

                                <a href="#" class="btn btn-primary w-100" style="background: linear-gradient(135deg, #1E5C99 0%, #0F3057 100%); border: none; border-radius: 10px; font-weight: 600;">
                                    <i class="bi bi-info-circle me-2"></i>Detail & Order
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Service 6: Portfolio Website -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card h-100 border-0 shadow-lg" style="background: linear-gradient(145deg, rgba(255,255,255,0.95) 0%, rgba(255,255,255,0.9) 100%); border-radius: 20px;">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="icon-box" style="width: 60px; height: 60px; background: linear-gradient(135deg, #FFD700 0%, #FFB400 100%); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                                        <i class="bi bi-briefcase" style="font-size: 28px; color: #0F3057;"></i>
                                    </div>
                                    <div>
                                        <h5 class="card-title mb-1 fw-bold" style="color: #0F3057;">Portfolio Website</h5>
                                        <small class="text-muted">Personal Branding</small>
                                    </div>
                                </div>
                                
                                <p class="card-text text-muted small mb-3">
                                    Website pribadi untuk menampilkan portfolio, karya, skill, dan pengalaman. Cocok untuk freelancer & kreator.
                                </p>

                                <div class="pricing-options mb-3">
                                    <div class="d-flex justify-content-between align-items-center mb-2 p-2" style="background: rgba(30,92,153,0.1); border-radius: 8px;">
                                        <small class="fw-bold" style="color: #0F3057;">💳 Bayar Sekali</small>
                                        <span class="fw-bold" style="color: #FFB400; font-size: 1.1rem;">Rp 700.000</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center p-2" style="background: rgba(255,180,0,0.15); border-radius: 8px; border: 2px solid #FFB400;">
                                        <small class="fw-bold" style="color: #0F3057;">📅 Sewa Bulanan</small>
                                        <span class="fw-bold" style="color: #FFB400; font-size: 1.1rem;">Rp 200rb/bln</span>
                                    </div>
                                </div>

                                <ul class="list-unstyled small mb-3">
                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Galeri portfolio elegan</li>
                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>About & skills showcase</li>
                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Testimoni client</li>
                                    <li class="mb-1"><i class="bi bi-check-circle-fill text-success me-2"></i>CV/Resume download</li>
                                </ul>

                                <a href="#" class="btn btn-primary w-100" style="background: linear-gradient(135deg, #1E5C99 0%, #0F3057 100%); border: none; border-radius: 10px; font-weight: 600;">
                                    <i class="bi bi-info-circle me-2"></i>Detail & Order
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Tampilkan lebih banyak button -->
                    <div class="col-12 text-center mt-4" data-aos="fade-up">
                        <button class="btn btn-outline-light btn-lg" style="border-radius: 15px; padding: 12px 40px; font-weight: 600; border: 2px solid #FFB400; color: #FFD700;" data-bs-toggle="collapse" data-bs-target="#moreWebsiteServices">
                            <i class="bi bi-plus-circle me-2"></i>Lihat 5 Layanan Website Lainnya
                        </button>
                    </div>

                    <!-- Collapsed services -->
                    <div class="collapse" id="moreWebsiteServices">
                        <div class="row g-4 mt-2">
                            <!-- Service 7-11 akan muncul di sini -->
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 border-0 shadow-lg" style="background: linear-gradient(145deg, rgba(255,255,255,0.95) 0%, rgba(255,255,255,0.9) 100%); border-radius: 20px;">
                                    <div class="card-body p-4">
                                        <h5 class="fw-bold mb-2" style="color: #0F3057;">🏫 Website Sekolah/Lembaga</h5>
                                        <p class="small text-muted mb-3">Website untuk institusi pendidikan, yayasan, atau lembaga non-profit.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <small class="d-block">💳 Rp 1,2jt</small>
                                                <small class="d-block fw-bold" style="color: #FFB400;">📅 Rp 400rb/bln</small>
                                            </div>
                                            <a href="#" class="btn btn-sm btn-primary">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 border-0 shadow-lg" style="background: linear-gradient(145deg, rgba(255,255,255,0.95) 0%, rgba(255,255,255,0.9) 100%); border-radius: 20px;">
                                    <div class="card-body p-4">
                                        <h5 class="fw-bold mb-2" style="color: #0F3057;">📝 Blog/News Website</h5>
                                        <p class="small text-muted mb-3">Website dengan sistem blog atau portal berita untuk konten artikel.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <small class="d-block">💳 Rp 800rb</small>
                                                <small class="d-block fw-bold" style="color: #FFB400;">📅 Rp 250rb/bln</small>
                                            </div>
                                            <a href="#" class="btn btn-sm btn-primary">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 border-0 shadow-lg" style="background: linear-gradient(145deg, rgba(255,255,255,0.95) 0%, rgba(255,255,255,0.9) 100%); border-radius: 20px;">
                                    <div class="card-body p-4">
                                        <h5 class="fw-bold mb-2" style="color: #0F3057;">📅 Booking System</h5>
                                        <p class="small text-muted mb-3">Sistem reservasi/booking online untuk hotel, klinik, salon, konsultan.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <small class="d-block">💳 Rp 1jt</small>
                                                <small class="d-block fw-bold" style="color: #FFB400;">📅 Rp 300rb/bln</small>
                                            </div>
                                            <a href="#" class="btn btn-sm btn-primary">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 border-0 shadow-lg" style="background: linear-gradient(145deg, rgba(255,255,255,0.95) 0%, rgba(255,255,255,0.9) 100%); border-radius: 20px;">
                                    <div class="card-body p-4">
                                        <h5 class="fw-bold mb-2" style="color: #0F3057;">👥 Membership Website</h5>
                                        <p class="small text-muted mb-3">Website dengan sistem keanggotaan, login member, dan konten eksklusif.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <small class="d-block">💳 Rp 1,5jt</small>
                                                <small class="d-block fw-bold" style="color: #FFB400;">📅 Rp 400rb/bln</small>
                                            </div>
                                            <a href="#" class="btn btn-sm btn-primary">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 border-0 shadow-lg" style="background: linear-gradient(145deg, rgba(255,255,255,0.95) 0%, rgba(255,255,255,0.9) 100%); border-radius: 20px;">
                                    <div class="card-body p-4">
                                        <h5 class="fw-bold mb-2" style="color: #0F3057;">🎓 Learning Management System</h5>
                                        <p class="small text-muted mb-3">Platform e-learning dengan video course, quiz, dan sertifikat.</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <small class="d-block">💳 Rp 2,5jt</small>
                                                <small class="d-block fw-bold" style="color: #FFB400;">📅 Rp 600rb/bln</small>
                                            </div>
                                            <a href="#" class="btn btn-sm btn-primary">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- ============================================ -->
            <!-- KATEGORI 2: MOBILE APP DEVELOPMENT -->
            <!-- ============================================ -->
            <div class="tab-pane fade" id="cat2" role="tabpanel">
                <div class="text-center mb-4">
                    <h3 class="fw-bold" style="color: #FFD700;">📱 MOBILE APP DEVELOPMENT</h3>
                    <p class="text-white-50">4 Jenis Aplikasi Mobile Profesional</p>
                </div>

                <div class="row g-4">
                    <div class="col-md-6 col-lg-3" data-aos="fade-up">
                        <div class="card h-100 border-0 shadow-lg" style="background: linear-gradient(145deg, rgba(255,255,255,0.95) 0%, rgba(255,255,255,0.9) 100%); border-radius: 20px;">
                            <div class="card-body p-4 text-center">
                                <div class="icon-box mx-auto mb-3" style="width: 70px; height: 70px; background: linear-gradient(135deg, #FFD700 0%, #FFB400 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-android2" style="font-size: 35px; color: #0F3057;"></i>
                                </div>
                                <h5 class="fw-bold mb-2" style="color: #0F3057;">Android App</h5>
                                <p class="small text-muted mb-3">Aplikasi native untuk Android dengan performa terbaik</p>
                                <div class="mb-3">
                                    <small class="d-block text-muted">💳 Bayar Sekali</small>
                                    <h4 class="fw-bold mb-2" style="color: #FFB400;">Mulai Rp 3jt</h4>
                                    <small class="d-block text-muted">📅 Maintenance</small>
                                    <strong style="color: #FFB400;">Rp 300rb/bln</strong>
                                </div>
                                <a href="#" class="btn btn-primary w-100">Konsultasi</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="card h-100 border-0 shadow-lg" style="background: linear-gradient(145deg, rgba(255,255,255,0.95) 0%, rgba(255,255,255,0.9) 100%); border-radius: 20px;">
                            <div class="card-body p-4 text-center">
                                <div class="icon-box mx-auto mb-3" style="width: 70px; height: 70px; background: linear-gradient(135deg, #FFD700 0%, #FFB400 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-apple" style="font-size: 35px; color: #0F3057;"></i>
                                </div>
                                <h5 class="fw-bold mb-2" style="color: #0F3057;">iOS App</h5>
                                <p class="small text-muted mb-3">Aplikasi native untuk iPhone & iPad</p>
                                <div class="mb-3">
                                    <small class="d-block text-muted">💳 Bayar Sekali</small>
                                    <h4 class="fw-bold mb-2" style="color: #FFB400;">Mulai Rp 3,5jt</h4>
                                    <small class="d-block text-muted">📅 Maintenance</small>
                                    <strong style="color: #FFB400;">Rp 350rb/bln</strong>
                                </div>
                                <a href="#" class="btn btn-primary w-100">Konsultasi</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="card h-100 border-0 shadow-lg" style="background: linear-gradient(145deg, rgba(255,255,255,0.95) 0%, rgba(255,255,255,0.9) 100%); border-radius: 20px; position: relative;">
                            <div class="position-absolute" style="top: 10px; right: 10px; background: #28a745; color: white; padding: 4px 10px; border-radius: 10px; font-size: 0.7rem; font-weight: 700;">
                                HEMAT
                            </div>
                            <div class="card-body p-4 text-center">
                                <div class="icon-box mx-auto mb-3" style="width: 70px; height: 70px; background: linear-gradient(135deg, #FFD700 0%, #FFB400 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-phone" style="font-size: 35px; color: #0F3057;"></i>
                                </div>
                                <h5 class="fw-bold mb-2" style="color: #0F3057;">PWA</h5>
                                <p class="small text-muted mb-3">Progressive Web App - bisa di install seperti app</p>
                                <div class="mb-3">
                                    <small class="d-block text-muted">💳 Bayar Sekali</small>
                                    <h4 class="fw-bold mb-2" style="color: #FFB400;">Rp 1,5jt</h4>
                                    <small class="d-block text-muted">📅 Maintenance</small>
                                    <strong style="color: #FFB400;">Rp 200rb/bln</strong>
                                </div>
                                <a href="#" class="btn btn-primary w-100">Detail & Order</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="card h-100 border-0 shadow-lg" style="background: linear-gradient(145deg, rgba(255,255,255,0.95) 0%, rgba(255,255,255,0.9) 100%); border-radius: 20px; position: relative;">
                            <div class="position-absolute" style="top: 10px; right: 10px; background: linear-gradient(135deg, #ff4757 0%, #ff6348 100%); color: white; padding: 4px 10px; border-radius: 10px; font-size: 0.7rem; font-weight: 700;">
                                POPULER
                            </div>
                            <div class="card-body p-4 text-center">
                                <div class="icon-box mx-auto mb-3" style="width: 70px; height: 70px; background: linear-gradient(135deg, #FFD700 0%, #FFB400 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-phone-fill" style="font-size: 35px; color: #0F3057;"></i>
                                </div>
                                <h5 class="fw-bold mb-2" style="color: #0F3057;">Hybrid App</h5>
                                <p class="small text-muted mb-3">1 app untuk Android & iOS sekaligus</p>
                                <div class="mb-3">
                                    <small class="d-block text-muted">💳 Bayar Sekali</small>
                                    <h4 class="fw-bold mb-2" style="color: #FFB400;">Rp 4jt</h4>
                                    <small class="d-block text-muted">📅 Maintenance</small>
                                    <strong style="color: #FFB400;">Rp 400rb/bln</strong>
                                </div>
                                <a href="#" class="btn btn-primary w-100">Detail & Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============================================ -->
            <!-- KATEGORI 3-10 AKAN DILANJUTKAN... -->
            <!-- ============================================ -->
            
            <!-- Untuk menghemat space, kategori 3-10 akan saya buatkan dengan format yang sama -->
            <!-- Mau saya lanjutkan sekarang atau kamu mau lihat dulu hasilnya? -->

        </div>

        <!-- CTA Section -->
        <div class="text-center mt-5" data-aos="fade-up">
            <div class="p-5" style="background: linear-gradient(135deg, rgba(255,215,0,0.2) 0%, rgba(255,180,0,0.1) 100%); border-radius: 25px; border: 3px solid #FFB400;">
                <h3 class="fw-bold mb-3" style="color: #FFD700;">💬 Bingung Pilih Layanan yang Tepat?</h3>
                <p class="text-white mb-4">Konsultasi GRATIS dengan tim kami untuk rekomendasi terbaik!</p>
                <a href="https://wa.me/6282220133439?text=Halo%20Situneo,%20saya%20mau%20konsultasi%20gratis" class="btn btn-lg" style="background: linear-gradient(135deg, #FFD700 0%, #FFB400 100%); color: #0F3057; border: none; border-radius: 15px; padding: 15px 50px; font-weight: 700; box-shadow: 0 5px 20px rgba(255,180,0,0.4);">
                    <i class="bi bi-whatsapp me-2"></i>KONSULTASI GRATIS SEKARANG
                </a>
            </div>
        </div>

    </div>
</section>
<!-- ============================================ -->
<!-- DIVISI 2: DIGITAL MARKETING (SIMPLIFIED) -->
<!-- ============================================ -->
<div class="service-card" style="border: 3px solid rgba(255,180,0,0.5);">
    <h2 class="service-title" style="text-align: center; font-size: 2rem;">📢 DIVISI 2: DIGITAL MARKETING & TRAFFIC GROWTH</h2>
    <p style="text-align: center; font-size: 1.1rem; color: var(--text-light); margin-bottom: 30px;">
        7 Layanan Marketing untuk tingkatkan traffic & penjualan<br>
        <strong>Semua berbasis subscription bulanan (tidak ada sistem bayar sekali)</strong>
    </p>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        <!-- SEO -->
        <div style="background: rgba(30,92,153,0.2); padding: 20px; border-radius: 12px; border: 2px solid rgba(255,180,0,0.3);">
            <h3 style="color: var(--bright-gold); font-size: 1.3rem; margin-bottom: 10px;">🔍 8. SEO Optimization</h3>
            <p style="font-size: 0.95rem; margin-bottom: 12px;">Buat website muncul di halaman 1 Google</p>
            <div style="background: rgba(255,180,0,0.15); padding: 12px; border-radius: 8px; margin: 12px 0;">
                <strong>📦 BASIC:</strong> Rp 200.000/bln<br>
                <strong>🚀 PREMIUM:</strong> Rp 600.000/bln
            </div>
            <ul style="list-style: none; padding: 0; font-size: 0.9rem;">
                <li style="padding: 4px 0;">✓ Riset keyword</li>
                <li style="padding: 4px 0;">✓ On-page SEO</li>
                <li style="padding: 4px 0;">✓ Technical SEO</li>
                <li style="padding: 4px 0;">✓ Monthly report</li>
            </ul>
        </div>

        <!-- Google Ads -->
        <div style="background: rgba(30,92,153,0.2); padding: 20px; border-radius: 12px; border: 2px solid rgba(255,180,0,0.3);">
            <h3 style="color: var(--bright-gold); font-size: 1.3rem; margin-bottom: 10px;">🎯 9. Google Ads</h3>
            <p style="font-size: 0.95rem; margin-bottom: 12px;">Iklan di Google untuk hasil cepat</p>
            <div style="background: rgba(255,180,0,0.15); padding: 12px; border-radius: 8px; margin: 12px 0;">
                <strong>💰 Jasa:</strong> Mulai Rp 400.000/bln<br>
                <strong>💳 Budget Iklan:</strong> Min 500rb (terpisah)
            </div>
            <ul style="list-style: none; padding: 0; font-size: 0.9rem;">
                <li style="padding: 4px 0;">✓ Campaign setup</li>
                <li style="padding: 4px 0;">✓ Keyword research</li>
                <li style="padding: 4px 0;">✓ Ad copywriting</li>
                <li style="padding: 4px 0;">✓ Optimization</li>
            </ul>
        </div>

        <!-- Meta Ads -->
        <div style="background: rgba(30,92,153,0.2); padding: 20px; border-radius: 12px; border: 2px solid rgba(255,180,0,0.3);">
            <h3 style="color: var(--bright-gold); font-size: 1.3rem; margin-bottom: 10px;">📱 10. Meta Ads (FB & IG)</h3>
            <p style="font-size: 0.95rem; margin-bottom: 12px;">Iklan di Facebook & Instagram</p>
            <div style="background: rgba(255,180,0,0.15); padding: 12px; border-radius: 8px; margin: 12px 0;">
                <strong>💰 Jasa:</strong> Rp 400.000/bln<br>
                <strong>💳 Budget Iklan:</strong> Min 300rb
            </div>
            <ul style="list-style: none; padding: 0; font-size: 0.9rem;">
                <li style="padding: 4px 0;">✓ Ad account setup</li>
                <li style="padding: 4px 0;">✓ Audience research</li>
                <li style="padding: 4px 0;">✓ Creative design</li>
                <li style="padding: 4px 0;">✓ Retargeting</li>
            </ul>
        </div>

        <!-- TikTok Ads -->
        <div style="background: rgba(30,92,153,0.2); padding: 20px; border-radius: 12px; border: 2px solid rgba(255,180,0,0.3);">
            <h3 style="color: var(--bright-gold); font-size: 1.3rem; margin-bottom: 10px;">🎵 11. TikTok Ads</h3>
            <p style="font-size: 0.95rem; margin-bottom: 12px;">Iklan di TikTok untuk Gen Z</p>
            <div style="background: rgba(255,180,0,0.15); padding: 12px; border-radius: 8px; margin: 12px 0;">
                <strong>💰 Jasa:</strong> Rp 400.000/bln<br>
                <strong>💳 Budget Iklan:</strong> Min 500rb
            </div>
            <ul style="list-style: none; padding: 0; font-size: 0.9rem;">
                <li style="padding: 4px 0;">✓ TikTok ads setup</li>
                <li style="padding: 4px 0;">✓ Video content strategy</li>
                <li style="padding: 4px 0;">✓ Trending analysis</li>
                <li style="padding: 4px 0;">✓ Performance report</li>
            </ul>
        </div>

        <!-- Email Marketing -->
        <div style="background: rgba(30,92,153,0.2); padding: 20px; border-radius: 12px; border: 2px solid rgba(255,180,0,0.3);">
            <h3 style="color: var(--bright-gold); font-size: 1.3rem; margin-bottom: 10px;">📧 12. Email Marketing</h3>
            <p style="font-size: 0.95rem; margin-bottom: 12px;">Kirim email marketing otomatis</p>
            <div style="background: rgba(255,180,0,0.15); padding: 12px; border-radius: 8px; margin: 12px 0;">
                <strong>💰 Jasa:</strong> Rp 200.000/bln<br>
                <strong>📨 Credits:</strong> Sesuai jumlah
            </div>
            <ul style="list-style: none; padding: 0; font-size: 0.9rem;">
                <li style="padding: 4px 0;">✓ Email tool setup</li>
                <li style="padding: 4px 0;">✓ Template design</li>
                <li style="padding: 4px 0;">✓ Automation workflow</li>
                <li style="padding: 4px 0;">✓ Analytics</li>
            </ul>
        </div>

        <!-- WhatsApp Blast -->
        <div style="background: rgba(30,92,153,0.2); padding: 20px; border-radius: 12px; border: 2px solid rgba(255,180,0,0.3);">
            <h3 style="color: var(--bright-gold); font-size: 1.3rem; margin-bottom: 10px;">💬 13. WhatsApp Blast</h3>
            <p style="font-size: 0.95rem; margin-bottom: 12px;">Kirim pesan WA ke ribuan orang</p>
            <div style="background: rgba(255,180,0,0.15); padding: 12px; border-radius: 8px; margin: 12px 0;">
                <strong>💰 Jasa:</strong> Rp 250.000/bln<br>
                <strong>📱 Credits:</strong> Mulai 100rb
            </div>
            <ul style="list-style: none; padding: 0; font-size: 0.9rem;">
                <li style="padding: 4px 0;">✓ Mass messaging</li>
                <li style="padding: 4px 0;">✓ Contact management</li>
                <li style="padding: 4px 0;">✓ Scheduling</li>
                <li style="padding: 4px 0;">✓ Delivery report</li>
            </ul>
        </div>

        <!-- Social Media Management -->
        <div style="background: rgba(30,92,153,0.2); padding: 20px; border-radius: 12px; border: 2px solid rgba(255,180,0,0.3);">
            <h3 style="color: var(--bright-gold); font-size: 1.3rem; margin-bottom: 10px;">📱 14. Social Media Management</h3>
            <p style="font-size: 0.95rem; margin-bottom: 12px;">Kelola semua akun sosmed bisnis</p>
            <div style="background: rgba(255,180,0,0.15); padding: 12px; border-radius: 8px; margin: 12px 0;">
                <strong>📦 BASIC:</strong> Rp 400.000/bln<br>
                <strong>🚀 PREMIUM:</strong> Rp 800.000/bln
            </div>
            <ul style="list-style: none; padding: 0; font-size: 0.9rem;">
                <li style="padding: 4px 0;">✓ Content creation</li>
                <li style="padding: 4px 0;">✓ Regular posting</li>
                <li style="padding: 4px 0;">✓ Community management</li>
                <li style="padding: 4px 0;">✓ Monthly report</li>
            </ul>
        </div>
    </div>

    <div style="text-align: center; margin-top: 30px;">
        <a href="https://wa.me/6282220133439?text=Halo%20Situneo,%20saya%20mau%20info%20layanan%20Digital%20Marketing" class="btn-order" target="_blank">
            <i class="bi bi-whatsapp"></i> INFO LENGKAP MARKETING
        </a>
    </div>
</div>

<!-- ============================================ -->
<!-- DIVISI 3: AI & OTOMASI -->
<!-- ============================================ -->
<div class="service-card" style="border: 3px solid rgba(255,180,0,0.5);">
    <h2 class="service-title" style="text-align: center; font-size: 2rem;">🤖 DIVISI 3: AI & SISTEM OTOMASI</h2>
    <p style="text-align: center; font-size: 1.1rem; color: var(--text-light); margin-bottom: 30px;">
        4 Layanan AI & Automation untuk efisiensi bisnis maksimal<br>
        <strong>Kombinasi sistem bayar sekali & sewa bulanan tersedia</strong>
    </p>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        
        <!-- Chatbot AI -->
        <div style="background: rgba(30,92,153,0.2); padding: 22px; border-radius: 12px; border: 2px solid rgba(255,180,0,0.4);">
            <h3 style="color: var(--bright-gold); font-size: 1.35rem; margin-bottom: 12px;">🤖 15. Chatbot AI</h3>
            <p style="font-size: 0.95rem; margin-bottom: 14px; line-height: 1.6;">
                Robot pintar yang bisa balas chat customer 24/7 nonstop di WhatsApp, Website, atau Instagram
            </p>
            
            <div class="penjelasan-box" style="margin: 14px 0; font-size: 0.88rem;">
                <strong>💬 Cara Kerja:</strong><br>
                Customer tanya → Bot jawab otomatis → Kalau gak bisa jawab, transfer ke manusia. Bot bisa jawab FAQ, info produk, proses order, sampai cek status pesanan!
            </div>
            
            <div style="background: rgba(255,180,0,0.12); padding: 14px; border-radius: 8px; margin: 14px 0;">
                <strong style="color: var(--gold);">💰 HARGA BULANAN:</strong><br>
                <strong>📦 BASIC:</strong> Rp 300.000/bln<br>
                <span style="font-size: 0.85rem;">• 1 platform (WA/Web/IG)<br>• FAQ dasar<br>• 1000 chat/bln</span><br><br>
                
                <strong>🚀 PREMIUM:</strong> Rp 600.000/bln<br>
                <span style="font-size: 0.85rem;">• Multi platform<br>• AI pintar<br>• Unlimited chat<br>• Integration dengan CRM</span>
            </div>
            
            <ul style="list-style: none; padding: 0; font-size: 0.88rem; margin: 12px 0;">
                <li style="padding: 5px 0;">✅ AI natural language</li>
                <li style="padding: 5px 0;">✅ Custom responses</li>
                <li style="padding: 5px 0;">✅ Product catalog</li>
                <li style="padding: 5px 0;">✅ Lead capture</li>
                <li style="padding: 5px 0;">✅ Analytics dashboard</li>
            </ul>
            
            <div style="background: rgba(30,92,153,0.3); padding: 10px; border-radius: 6px; font-size: 0.87rem; margin-top: 12px;">
                <strong>👥 Cocok untuk:</strong> E-commerce dengan banyak pertanyaan customer, bisnis 24/7
            </div>
        </div>

        <!-- Sistem CRM -->
        <div style="background: rgba(30,92,153,0.2); padding: 22px; border-radius: 12px; border: 2px solid rgba(255,180,0,0.4);">
            <h3 style="color: var(--bright-gold); font-size: 1.35rem; margin-bottom: 12px;">📊 16. Sistem CRM</h3>
            <p style="font-size: 0.95rem; margin-bottom: 14px; line-height: 1.6;">
                Customer Relationship Management - Sistem kelola database customer & penjualan
            </p>
            
            <div class="penjelasan-box" style="margin: 14px 0; font-size: 0.88rem;">
                <strong>🎯 Fungsi Utama:</strong><br>
                Simpan semua data customer di satu tempat. Track riwayat pembelian, interaksi, follow-up reminder otomatis. Gak ada lagi customer yang terlewat!
            </div>
            
            <div style="background: rgba(255,180,0,0.12); padding: 14px; border-radius: 8px; margin: 14px 0;">
                <strong style="color: var(--gold);">💰 SISTEM PEMBAYARAN:</strong><br><br>
                
                <strong>📦 BASIC:</strong><br>
                • Sekali: Rp 500.000<br>
                • Maintenance: Rp 150.000/bln<br><br>
                
                <strong>🚀 CUSTOM:</strong><br>
                • Sekali: Rp 1.000.000<br>
                • Maintenance: Rp 250.000/bln<br>
                <span style="font-size: 0.85rem;">(Fitur sesuai kebutuhan)</span>
            </div>
            
            <ul style="list-style: none; padding: 0; font-size: 0.88rem; margin: 12px 0;">
                <li style="padding: 5px 0;">✅ Customer database lengkap</li>
                <li style="padding: 5px 0;">✅ Sales pipeline tracking</li>
                <li style="padding: 5px 0;">✅ Task & reminder otomatis</li>
                <li style="padding: 5px 0;">✅ WhatsApp integration</li>
                <li style="padding: 5px 0;">✅ Laporan penjualan</li>
                <li style="padding: 5px 0;">✅ Multi-user access</li>
            </ul>
            
            <div style="background: rgba(30,92,153,0.3); padding: 10px; border-radius: 6px; font-size: 0.87rem; margin-top: 12px;">
                <strong>👥 Cocok untuk:</strong> Sales team, bisnis B2B, agency dengan banyak client
            </div>
        </div>

        <!-- Dashboard Bisnis AI -->
        <div style="background: rgba(30,92,153,0.2); padding: 22px; border-radius: 12px; border: 2px solid rgba(255,180,0,0.4);">
            <h3 style="color: var(--bright-gold); font-size: 1.35rem; margin-bottom: 12px;">📈 17. Dashboard Bisnis AI</h3>
            <p style="font-size: 0.95rem; margin-bottom: 14px; line-height: 1.6;">
                Business Intelligence - Dashboard canggih untuk pantau bisnis real-time dengan AI
            </p>
            
            <div class="penjelasan-box" style="margin: 14px 0; font-size: 0.88rem;">
                <strong>📊 Fitur Dashboard:</strong><br>
                Tampilkan semua data penting dalam grafik & chart yang gampang dibaca. Pantau penjualan, stok, performa karyawan, customer - semuanya real-time!
            </div>
            
            <div style="background: rgba(255,180,0,0.12); padding: 14px; border-radius: 8px; margin: 14px 0;">
                <strong style="color: var(--gold);">💰 SISTEM PEMBAYARAN:</strong><br><br>
                
                <strong>Sekali Bayar:</strong> Rp 500rb - 1jt<br>
                <span style="font-size: 0.85rem;">(Tergantung kompleksitas data)</span><br><br>
                
                <strong>Maintenance:</strong> Rp 200.000/bln<br>
                <span style="font-size: 0.85rem;">Update + support + hosting</span>
            </div>
            
            <ul style="list-style: none; padding: 0; font-size: 0.88rem; margin: 12px 0;">
                <li style="padding: 5px 0;">✅ Real-time dashboard</li>
                <li style="padding: 5px 0;">✅ Visual analytics (grafik)</li>
                <li style="padding: 5px 0;">✅ KPI monitoring</li>
                <li style="padding: 5px 0;">✅ Sales performance tracking</li>
                <li style="padding: 5px 0;">✅ Inventory tracking</li>
                <li style="padding: 5px 0;">✅ Predictive analytics (AI)</li>
                <li style="padding: 5px 0;">✅ Mobile responsive</li>
            </ul>
            
            <div style="background: rgba(30,92,153,0.3); padding: 10px; border-radius: 6px; font-size: 0.87rem; margin-top: 12px;">
                <strong>👥 Cocok untuk:</strong> Owner yang mau pantau bisnis dari mana aja, bisnis dengan banyak cabang
            </div>
        </div>

        <!-- Sistem Booking -->
        <div style="background: rgba(30,92,153,0.2); padding: 22px; border-radius: 12px; border: 2px solid rgba(255,180,0,0.4);">
            <h3 style="color: var(--bright-gold); font-size: 1.35rem; margin-bottom: 12px;">📅 18. Sistem Booking Online</h3>
            <p style="font-size: 0.95rem; margin-bottom: 14px; line-height: 1.6;">
                Customer bisa booking/reservasi langsung di website 24/7
            </p>
            
            <div class="penjelasan-box" style="margin: 14px 0; font-size: 0.88rem;">
                <strong>🎯 Cara Kerja:</strong><br>
                Customer pilih tanggal & jam → Isi data → Konfirmasi → Kamu terima notifikasi via WA. Gak perlu telpon-telponan lagi!
            </div>
            
            <div style="background: rgba(255,180,0,0.12); padding: 14px; border-radius: 8px; margin: 14px 0;">
                <strong style="color: var(--gold);">💰 SISTEM PEMBAYARAN:</strong><br><br>
                
                <strong>Sekali Bayar:</strong> Rp 250.000<br>
                <span style="font-size: 0.85rem;">Setup sistem booking</span><br><br>
                
                <strong>Monthly Fee:</strong> Rp 100.000/bln<br>
                <span style="font-size: 0.85rem;">Maintenance + notifikasi WA</span>
            </div>
            
            <ul style="list-style: none; padding: 0; font-size: 0.88rem; margin: 12px 0;">
                <li style="padding: 5px 0;">✅ Calendar interface</li>
                <li style="padding: 5px 0;">✅ Availability management</li>
                <li style="padding: 5px 0;">✅ Auto confirmation</li>
                <li style="padding: 5px 0;">✅ Reminder notification</li>
                <li style="padding: 5px 0;">✅ Payment integration</li>
                <li style="padding: 5px 0;">✅ Booking dashboard</li>
                <li style="padding: 5px 0;">✅ Reschedule & cancel</li>
            </ul>
            
            <div style="background: rgba(30,92,153,0.3); padding: 10px; border-radius: 6px; font-size: 0.87rem; margin-top: 12px;">
                <strong>👥 Cocok untuk:</strong> Klinik, salon, hotel, restoran, konsultan, studio foto
            </div>
        </div>
    </div>

    <div style="text-align: center; margin-top: 30px;">
        <a href="https://wa.me/6282220133439?text=Halo%20Situneo,%20saya%20mau%20info%20layanan%20AI%20%26%20Otomasi" class="btn-order" target="_blank">
            <i class="bi bi-whatsapp"></i> INFO LENGKAP AI & OTOMASI
        </a>
    </div>
</div>

<!-- ============================================ -->
<!-- DIVISI 4: BRANDING & DESAIN -->
<!-- ============================================ -->
<div class="service-card" style="border: 3px solid rgba(255,180,0,0.5);">
    <h2 class="service-title" style="text-align: center; font-size: 2rem;">🎨 DIVISI 4: BRANDING & DESAIN KREATIF</h2>
    <p style="text-align: center; font-size: 1.1rem; color: var(--text-light); margin-bottom: 30px;">
        4 Layanan Desain Grafis Profesional untuk membangun identitas visual brand<br>
        <strong>Semua sistem bayar sekali (bukan subscription)</strong>
    </p>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px;">
        
        <!-- Desain Logo -->
        <div style="background: rgba(30,92,153,0.2); padding: 22px; border-radius: 12px; border: 2px solid rgba(255,180,0,0.4);">
            <h3 style="color: var(--bright-gold); font-size: 1.35rem; margin-bottom: 12px;">🎨 19. Desain Logo</h3>
            <p style="font-size: 0.95rem; margin-bottom: 14px; line-height: 1.6;">
                Logo profesional yang mewakili identitas merek bisnis kamu
            </p>
            
            <div class="penjelasan-box" style="margin: 14px 0; font-size: 0.88rem;">
                <strong>✨ Yang Kamu Dapat:</strong><br>
                • 3-5 konsep logo berbeda<br>
                • Revisi sampai puas<br>
                • File berbagai format (PNG, JPG, AI, SVG)<br>
                • Versi warna & hitam putih<br>
                • Hak cipta penuh
            </div>
            
            <div style="background: rgba(255,180,0,0.12); padding: 14px; border-radius: 8px; margin: 14px 0;">
                <strong style="color: var(--gold);">💰 HARGA:</strong><br><br>
                
                <strong>📦 BASIC:</strong> Rp 250.000<br>
                <span style="font-size: 0.85rem;">• 3 konsep<br>• 2x revisi<br>• File standar</span><br><br>
                
                <strong>🚀 PREMIUM:</strong> Rp 500.000<br>
                <span style="font-size: 0.85rem;">• 5 konsep<br>• Unlimited revisi<br>• File lengkap + brand guidelines</span>
            </div>
            
            <div style="background: rgba(30,92,153,0.3); padding: 10px; border-radius: 6px; font-size: 0.87rem; margin-top: 12px;">
                <strong>👥 Cocok untuk:</strong> Bisnis baru, rebranding, startup, personal brand
            </div>
        </div>

        <!-- Desain Banner/Poster -->
        <div style="background: rgba(30,92,153,0.2); padding: 22px; border-radius: 12px; border: 2px solid rgba(255,180,0,0.4);">
            <h3 style="color: var(--bright-gold); font-size: 1.35rem; margin-bottom: 12px;">📰 20. Desain Banner & Poster</h3>
            <p style="font-size: 0.95rem; margin-bottom: 14px; line-height: 1.6;">
                Banner & poster menarik untuk promosi bisnis di sosmed atau cetak
            </p>
            
            <div class="penjelasan-box" style="margin: 14px 0; font-size: 0.88rem;">
                <strong>📐 Ukuran Tersedia:</strong><br>
                • Banner website<br>
                • Banner sosmed (IG/FB/Twitter)<br>
                • Poster promosi (A4/A3)<br>
                • Spanduk/billboard<br>
                • Story Instagram/Facebook
            </div>
            
            <div style="background: rgba(255,180,0,0.12); padding: 14px; border-radius: 8px; margin: 14px 0;">
                <strong style="color: var(--gold);">💰 HARGA:</strong><br><br>
                
                <strong>Per Design:</strong> Rp 100rb - 300rb<br>
                <span style="font-size: 0.85rem;">Tergantung kompleksitas</span><br><br>
                
                <strong>📦 PAKET 5 DESIGN:</strong> Rp 500.000<br>
                <span style="font-size: 0.85rem;">Hemat Rp 250rb!</span>
            </div>
            
            <ul style="list-style: none; padding: 0; font-size: 0.88rem; margin: 12px 0;">
                <li style="padding: 5px 0;">✅ Professional design</li>
                <li style="padding: 5px 0;">✅ Eye-catching visual</li>
                <li style="padding: 5px 0;">✅ All formats (JPG, PNG, PDF)</li>
                <li style="padding: 5px 0;">✅ Print ready</li>
                <li style="padding: 5px 0;">✅ 1-2 hari selesai</li>
            </ul>
            
            <div style="background: rgba(30,92,153,0.3); padding: 10px; border-radius: 6px; font-size: 0.87rem; margin-top: 12px;">
                <strong>👥 Cocok untuk:</strong> Promo flash sale, event, launching produk, konten sosmed
            </div>
        </div>

        <!-- Desain Kartu Nama -->
        <div style="background: rgba(30,92,153,0.2); padding: 22px; border-radius: 12px; border: 2px solid rgba(255,180,0,0.4);">
            <h3 style="color: var(--bright-gold); font-size: 1.35rem; margin-bottom: 12px;">💼 21. Desain Kartu Nama</h3>
            <p style="font-size: 0.95rem; margin-bottom: 14px; line-height: 1.6;">
                Kartu nama, kop surat, amplop untuk bisnis profesional
            </p>
            
            <div class="penjelasan-box" style="margin: 14px 0; font-size: 0.88rem;">
                <strong>📄 Stationery Set:</strong><br>
                • Kartu nama (2 sisi)<br>
                • Kop surat<br>
                • Amplop<br>
                • Invoice template<br>
                • Label/sticker (optional)
            </div>
            
            <div style="background: rgba(255,180,0,0.12); padding: 14px; border-radius: 8px; margin: 14px 0;">
                <strong style="color: var(--gold);">💰 HARGA:</strong><br><br>
                
                <strong>Kartu Nama Saja:</strong> Rp 150.000<br>
                <span style="font-size: 0.85rem;">Desain 2 sisi</span><br><br>
                
                <strong>📦 FULL SET:</strong> Rp 250rb - 400rb<br>
                <span style="font-size: 0.85rem;">Kartu nama + kop surat + amplop</span>
            </div>
            
            <ul style="list-style: none; padding: 0; font-size: 0.88rem; margin: 12px 0;">
                <li style="padding: 5px 0;">✅ Professional layout</li>
                <li style="padding: 5px 0;">✅ Brand matching</li>
                <li style="padding: 5px 0;">✅ Print ready files</li>
                <li style="padding: 5px 0;">✅ Editable template</li>
                <li style="padding: 5px 0;">✅ QR code integration</li>
            </ul>
            
            <div style="background: rgba(30,92,153,0.3); padding: 10px; border-radius: 6px; font-size: 0.87rem; margin-top: 12px;">
                <strong>👥 Cocok untuk:</strong> Profesional, freelancer, perusahaan, sales team
            </div>
        </div>

        <!-- Desain Konten Sosmed -->
        <div style="background: rgba(30,92,153,0.2); padding: 22px; border-radius: 12px; border: 2px solid rgba(255,180,0,0.4);">
            <h3 style="color: var(--bright-gold); font-size: 1.35rem; margin-bottom: 12px;">📱 22. Desain Konten Sosmed</h3>
            <p style="font-size: 0.95rem; margin-bottom: 14px; line-height: 1.6;">
                Konten visual menarik untuk feed Instagram, Facebook, TikTok
            </p>
            
            <div class="penjelasan-box" style="margin: 14px 0; font-size: 0.88rem;">
                <strong>📱 Jenis Konten:</strong><br>
                • Feed post IG/FB<br>
                • Instagram Story<br>
                • Reels/TikTok cover<br>
                • Carousel design<br>
                • Quote & tips design
            </div>
            
            <div style="background: rgba(255,180,0,0.12); padding: 14px; border-radius: 8px; margin: 14px 0;">
                <strong style="color: var(--gold);">💰 HARGA BULANAN:</strong><br><br>
                
                <strong>📦 BASIC:</strong> Rp 500.000/bln<br>
                <span style="font-size: 0.85rem;">• 12 design feed post<br>• Consistent branding</span><br><br>
                
                <strong>🚀 PREMIUM:</strong> Rp 1.000.000/bln<br>
                <span style="font-size: 0.85rem;">• 20 design + story + reels<br>• Editable templates<br>• Stock photos premium</span>
            </div>
            
            <ul style="list-style: none; padding: 0; font-size: 0.88rem; margin: 12px 0;">
                <li style="padding: 5px 0;">✅ Consistent branding</li>
                <li style="padding: 5px 0;">✅ Trendy design</li>
                <li style="padding: 5px 0;">✅ Instagram-optimized</li>
                <li style="padding: 5px 0;">✅ Carousel design</li>
                <li style="padding: 5px 0;">✅ Fast delivery</li>
            </ul>
            
            <div style="background: rgba(30,92,153,0.3); padding: 10px; border-radius: 6px; font-size: 0.87rem; margin-top: 12px;">
                <strong>👥 Cocok untuk:</strong> Brand konsisten konten, e-commerce, influencer, cafe/resto
            </div>
        </div>
    </div>

    <div style="text-align: center; margin-top: 30px;">
        <a href="https://wa.me/6282220133439?text=Halo%20Situneo,%20saya%20mau%20info%20layanan%20Desain" class="btn-order" target="_blank">
            <i class="bi bi-whatsapp"></i> INFO LENGKAP DESAIN
        </a>
    </div>
</div>

<!-- ============================================ -->
<!-- PAKET BUNDLING HEMAT -->
<!-- ============================================ -->
<div class="service-card" style="border: 4px solid var(--bright-gold); background: linear-gradient(145deg, rgba(255,215,0,0.1) 0%, rgba(255,180,0,0.05) 100%);">
    <div style="text-align: center; margin-bottom: 30px;">
        <h2 style="color: var(--bright-gold); font-size: 2.5rem; font-weight: 900; margin-bottom: 15px;">
            🎁 PAKET BUNDLING HEMAT
        </h2>
        <p style="font-size: 1.2rem; color: var(--text-light);">
            Kombinasi beberapa layanan dengan <strong style="color: var(--bright-gold);">DISKON HINGGA 40%!</strong><br>
            Lebih hemat & lebih praktis!
        </p>
    </div>

    <!-- Paket 1 -->
    <div style="background: rgba(30,92,153,0.3); border: 3px solid var(--gold); border-radius: 16px; padding: 28px; margin-bottom: 25px;">
        <div style="background: linear-gradient(135deg, #FFD700 0%, #FFB400 100%); color: var(--dark-blue); padding: 10px 20px; border-radius: 10px; display: inline-block; margin-bottom: 18px; font-weight: 900; font-size: 1.1rem;">
            💼 PAKET 1: STARTUP GO DIGITAL
        </div>
        
        <h3 style="color: var(--bright-gold); font-size: 1.6rem; margin-bottom: 15px;">
            Paket Lengkap untuk Bisnis Baru Mulai Online
        </h3>
        
        <div style="background: rgba(255,180,0,0.12); padding: 18px; border-radius: 10px; margin: 18px 0;">
            <strong style="font-size: 1.1rem; color: var(--gold);">📦 Paket Ini Berisi:</strong>
            <ul style="list-style: none; padding: 0; margin: 12px 0 0 0; font-size: 1rem;">
                <li style="padding: 6px 0;">✅ Website Landing Page (1 halaman)</li>
                <li style="padding: 6px 0;">✅ Domain .com gratis 1 tahun</li>
                <li style="padding: 6px 0;">✅ SEO Dasar</li>
                <li style="padding: 6px 0;">✅ Tombol WhatsApp terintegrasi</li>
                <li style="padding: 6px 0;">✅ Desain Logo Basic (3 konsep)</li>
                <li style="padding: 6px 0;">✅ 3 Banner Promosi untuk sosmed</li>
            </ul>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; margin: 20px 0;">
            <div style="background: rgba(255,255,255,0.05); padding: 16px; border-radius: 10px; text-align: center;">
                <div style="font-size: 0.85rem; color: var(--text-light); margin-bottom: 8px;">💰 Kalau Beli Terpisah:</div>
                <div style="font-size: 1.8rem; font-weight: 900; color: #ff6b6b; text-decoration: line-through;">Rp 950.000</div>
            </div>
            <div style="background: linear-gradient(135deg, rgba(255,215,0,0.2) 0%, rgba(255,180,0,0.1) 100%); padding: 16px; border-radius: 10px; text-align: center; border: 2px solid var(--gold);">
                <div style="font-size: 0.85rem; color: var(--text-light); margin-bottom: 8px;">🎉 HARGA PAKET:</div>
                <div style="font-size: 2.3rem; font-weight: 900; color: var(--bright-gold);">Rp 600.000</div>
                <div style="font-size: 0.9rem; margin-top: 6px; color: var(--gold); font-weight: 700;">💸 HEMAT Rp 350.000!</div>
            </div>
        </div>
        
        <div style="background: rgba(30,92,153,0.4); padding: 14px; border-radius: 8px; margin-top: 18px;">
            <strong style="color: var(--gold);">💡 Cocok Untuk:</strong>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 8px; margin-top: 10px; font-size: 0.95rem;">
                <div>✓ UMKM baru mau mulai online</div>
                <div>✓ Freelancer butuh online presence</div>
                <div>✓ Startup budget terbatas</div>
                <div>✓ Usaha lokal mau lebih profesional</div>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 20px;">
            <a href="https://wa.me/6282220133439?text=Halo%20Situneo,%20saya%20mau%20Paket%20Startup%20Go%20Digital" class="btn-order" target="_blank" style="font-size: 1.1rem; padding: 15px 40px;">
                <i class="bi bi-whatsapp"></i> AMBIL PAKET INI SEKARANG!
            </a>
        </div>
    </div>

    <!-- Paket 2 - TERLARIS -->
    <div style="background: rgba(30,92,153,0.3); border: 4px solid var(--bright-gold); border-radius: 16px; padding: 28px; margin-bottom: 25px; position: relative; box-shadow: 0 0 30px rgba(255,215,0,0.3);">
        <div style="position: absolute; top: -15px; right: 20px; background: linear-gradient(135deg, #ff4757 0%, #ff6348 100%); color: white; padding: 8px 20px; border-radius: 20px; font-weight: 900; font-size: 0.9rem; box-shadow: 0 4px 15px rgba(255,71,87,0.4);">
            ⭐ PALING LARIS!
        </div>
        
        <div style="background: linear-gradient(135deg, #FFD700 0%, #FFB400 100%); color: var(--dark-blue); padding: 10px 20px; border-radius: 10px; display: inline-block; margin-bottom: 18px; font-weight: 900; font-size: 1.1rem;">
            🚀 PAKET 2: BISNIS NAIK LEVEL
        </div>
        
        <h3 style="color: var(--bright-gold); font-size: 1.6rem; margin-bottom: 15px;">
            Paket Komplit untuk Bisnis Serius Tingkatkan Omzet
        </h3>
        
        <div style="background: rgba(255,180,0,0.12); padding: 18px; border-radius: 10px; margin: 18px 0;">
            <strong style="font-size: 1.1rem; color: var(--gold);">📦 Paket Ini Berisi:</strong>
            <ul style="list-style: none; padding: 0; margin: 12px 0 0 0; font-size: 1rem;">
                <li style="padding: 6px 0;">✅ Website Multi Halaman (4-6 halaman)</li>
                <li style="padding: 6px 0;">✅ SEO Premium (ranking tinggi di Google)</li>
                <li style="padding: 6px 0;">✅ Content Writing (10 artikel SEO)</li>
                <li style="padding: 6px 0;">✅ Iklan Meta Ads setup (FB & IG)</li>
                <li style="padding: 6px 0;">✅ Desain Logo Premium (5 konsep)</li>
                <li style="padding: 6px 0;">✅ Desain 10 konten sosial media</li>
                <li style="padding: 6px 0;">✅ Google Analytics & tracking</li>
                <li style="padding: 6px 0;">✅ Laporan bulanan lengkap</li>
            </ul>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; margin: 20px 0;">
            <div style="background: rgba(255,255,255,0.05); padding: 16px; border-radius: 10px; text-align: center;">
                <div style="font-size: 0.85rem; color: var(--text-light); margin-bottom: 8px;">💰 Kalau Beli Terpisah:</div>
                <div style="font-size: 1.8rem; font-weight: 900; color: #ff6b6b; text-decoration: line-through;">Rp 3.200.000</div>
            </div>
            <div style="background: linear-gradient(135deg, rgba(255,215,0,0.25) 0%, rgba(255,180,0,0.15) 100%); padding: 16px; border-radius: 10px; text-align: center; border: 3px solid var(--bright-gold);">
                <div style="font-size: 0.85rem; color: var(--text-light); margin-bottom: 8px;">🎉 HARGA PAKET:</div>
                <div style="font-size: 2.5rem; font-weight: 900; color: var(--bright-gold);">Rp 2.000.000</div>
                <div style="font-size: 1rem; margin-top: 6px; color: var(--bright-gold); font-weight: 800;">💸 HEMAT Rp 1,2 JUTA!</div>
            </div>
        </div>
        
        <div style="background: rgba(30,92,153,0.4); padding: 14px; border-radius: 8px; margin-top: 18px;">
            <strong style="color: var(--gold);">💡 Cocok Untuk:</strong>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 8px; margin-top: 10px; font-size: 0.95rem;">
                <div>✓ Bisnis yang udah jalan & mau scale up</div>
                <div>✓ Toko online mau boost penjualan</div>
                <div>✓ Perusahaan mau dominasi Google</div>
                <div>✓ Brand serius digital marketing</div>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 20px;">
            <a href="https://wa.me/6282220133439?text=Halo%20Situneo,%20saya%20mau%20Paket%20Bisnis%20Naik%20Level" class="btn-order" target="_blank" style="font-size: 1.2rem; padding: 16px 45px; animation: pulse 2s infinite;">
                <i class="bi bi-whatsapp"></i> AMBIL PAKET TERLARIS INI!
            </a>
        </div>
    </div>

    <!-- Paket 3 -->
    <div style="background: rgba(30,92,153,0.3); border: 3px solid var(--gold); border-radius: 16px; padding: 28px; margin-bottom: 25px;">
        <div style="background: linear-gradient(135deg, #FFD700 0%, #FFB400 100%); color: var(--dark-blue); padding: 10px 20px; border-radius: 10px; display: inline-block; margin-bottom: 18px; font-weight: 900; font-size: 1.1rem;">
            🛒 PAKET 3: E-COMMERCE COMPLETE
        </div>
        
        <h3 style="color: var(--bright-gold); font-size: 1.6rem; margin-bottom: 15px;">
            Solusi Lengkap untuk Jualan Online Serius
        </h3>
        
        <div style="background: rgba(255,180,0,0.12); padding: 18px; border-radius: 10px; margin: 18px 0;">
            <strong style="font-size: 1.1rem; color: var(--gold);">📦 Paket Ini Berisi:</strong>
            <ul style="list-style: none; padding: 0; margin: 12px 0 0 0; font-size: 1rem;">
                <li style="padding: 6px 0;">✅ Website Toko Online lengkap</li>
                <li style="padding: 6px 0;">✅ Payment Gateway integration</li>
                <li style="padding: 6px 0;">✅ SEO E-commerce</li>
                <li style="padding: 6px 0;">✅ Google Ads + Meta Ads setup</li>
                <li style="padding: 6px 0;">✅ Email Marketing automation</li>
                <li style="padding: 6px 0;">✅ WhatsApp Blast system</li>
                <li style="padding: 6px 0;">✅ Dashboard analytics</li>
                <li style="padding: 6px 0;">✅ 20 desain konten produk</li>
                <li style="padding: 6px 0;">✅ Training kelola toko online</li>
            </ul>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; margin: 20px 0;">
            <div style="background: rgba(255,255,255,0.05); padding: 16px; border-radius: 10px; text-align: center;">
                <div style="font-size: 0.85rem; color: var(--text-light); margin-bottom: 8px;">💰 Kalau Beli Terpisah:</div>
                <div style="font-size: 1.8rem; font-weight: 900; color: #ff6b6b; text-decoration: line-through;">Rp 4.500.000</div>
            </div>
            <div style="background: linear-gradient(135deg, rgba(255,215,0,0.2) 0%, rgba(255,180,0,0.1) 100%); padding: 16px; border-radius: 10px; text-align: center; border: 2px solid var(--gold);">
                <div style="font-size: 0.85rem; color: var(--text-light); margin-bottom: 8px;">🎉 HARGA PAKET:</div>
                <div style="font-size: 2.3rem; font-weight: 900; color: var(--bright-gold);">Rp 2.800.000</div>
                <div style="font-size: 0.9rem; margin-top: 6px; color: var(--gold); font-weight: 700;">💸 HEMAT Rp 1,7 JUTA!</div>
            </div>
        </div>
        
        <div style="background: rgba(30,92,153,0.4); padding: 14px; border-radius: 8px; margin-top: 18px;">
            <strong style="color: var(--gold);">💡 Cocok Untuk:</strong>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 8px; margin-top: 10px; font-size: 0.95rem;">
                <div>✓ Seller serius lepas dari marketplace</div>
                <div>✓ Brand mau kontrol penuh penjualan</div>
                <div>✓ Supplier jual ke banyak reseller</div>
                <div>✓ Bisnis dengan produk beragam</div>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 20px;">
            <a href="https://wa.me/6282220133439?text=Halo%20Situneo,%20saya%20mau%20Paket%20E-Commerce%20Complete" class="btn-order" target="_blank" style="font-size: 1.1rem; padding: 15px 40px;">
                <i class="bi bi-whatsapp"></i> AMBIL PAKET E-COMMERCE!
            </a>
        </div>
    </div>

    <!-- Paket 4 -->
    <div style="background: rgba(30,92,153,0.3); border: 3px solid var(--gold); border-radius: 16px; padding: 28px;">
        <div style="background: linear-gradient(135deg, #FFD700 0%, #FFB400 100%); color: var(--dark-blue); padding: 10px 20px; border-radius: 10px; display: inline-block; margin-bottom: 18px; font-weight: 900; font-size: 1.1rem;">
            🤖 PAKET 4: SISTEM AI DIGITAL
        </div>
        
        <h3 style="color: var(--bright-gold); font-size: 1.6rem; margin-bottom: 15px;">
            Otomasi Bisnis dengan Teknologi AI Canggih
        </h3>
        
        <div style="background: rgba(255,180,0,0.12); padding: 18px; border-radius: 10px; margin: 18px 0;">
            <strong style="font-size: 1.1rem; color: var(--gold);">📦 Paket Ini Berisi:</strong>
            <ul style="list-style: none; padding: 0; margin: 12px 0 0 0; font-size: 1rem;">
                <li style="padding: 6px 0;">✅ Website dengan AI integration</li>
                <li style="padding: 6px 0;">✅ Chatbot AI 24/7 (WA + Website)</li>
                <li style="padding: 6px 0;">✅ Sistem CRM lengkap</li>
                <li style="padding: 6px 0;">✅ Dashboard Business Intelligence</li>
                <li style="padding: 6px 0;">✅ Email automation</li>
                <li style="padding: 6px 0;">✅ Laporan & analytics real-time</li>
                <li style="padding: 6px 0;">✅ Auto-follow up system</li>
                <li style="padding: 6px 0;">✅ Prediksi penjualan AI</li>
            </ul>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; margin: 20px 0;">
            <div style="background: rgba(255,255,255,0.05); padding: 16px; border-radius: 10px; text-align: center;">
                <div style="font-size: 0.85rem; color: var(--text-light); margin-bottom: 8px;">💰 Kalau Beli Terpisah:</div>
                <div style="font-size: 1.8rem; font-weight: 900; color: #ff6b6b; text-decoration: line-through;">Rp 5.200.000</div>
            </div>
            <div style="background: linear-gradient(135deg, rgba(255,215,0,0.2) 0%, rgba(255,180,0,0.1) 100%); padding: 16px; border-radius: 10px; text-align: center; border: 2px solid var(--gold);">
                <div style="font-size: 0.85rem; color: var(--text-light); margin-bottom: 8px;">🎉 HARGA PAKET:</div>
                <div style="font-size: 2.3rem; font-weight: 900; color: var(--bright-gold);">Rp 3.500.000</div>
                <div style="font-size: 0.9rem; margin-top: 6px; color: var(--gold); font-weight: 700;">💸 HEMAT Rp 1,7 JUTA!</div>
            </div>
        </div>
        
        <div style="background: rgba(30,92,153,0.4); padding: 14px; border-radius: 8px; margin-top: 18px;">
            <strong style="color: var(--gold);">💡 Cocok Untuk:</strong>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 8px; margin-top: 10px; font-size: 0.95rem;">
                <div>✓ Bisnis dengan volume customer tinggi</div>
                <div>✓ Perusahaan mau efisiensi operasional</div>
                <div>✓ Startup tech-focused</div>
                <div>✓ Bisnis mau scale cepat dengan automasi</div>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 20px;">
            <a href="https://wa.me/6282220133439?text=Halo%20Situneo,%20saya%20mau%20Paket%20Sistem%20AI%20Digital" class="btn-order" target="_blank" style="font-size: 1.1rem; padding: 15px 40px;">
                <i class="bi bi-whatsapp"></i> AMBIL PAKET AI SYSTEM!
            </a>
        </div>
    </div>
</div>

<style>
@keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.03); }
}
</style>

<!-- ============================================ -->
<!-- INFO LAYANAN LAINNYA -->
<!-- ============================================ -->
<div style="background: linear-gradient(135deg, rgba(255,180,0,0.15) 0%, rgba(255,180,0,0.05) 100%); border: 3px solid var(--gold); border-radius: 16px; padding: 35px; margin: 40px auto; max-width: 1200px; text-align: center;">
    <h2 style="color: var(--bright-gold); font-size: 2.5rem; font-weight: 900; margin-bottom: 20px;">
        🎉 MASIH ADA 20+ LAYANAN DIGITAL LAINNYA!
    </h2>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin: 30px 0; text-align: left;">
        <div style="background: rgba(30,92,153,0.3); padding: 20px; border-radius: 12px;">
            <h3 style="color: var(--bright-gold); font-size: 1.3rem; margin-bottom: 12px;">🌐 Website Lainnya (4+)</h3>
            <ul style="list-style: none; padding: 0; margin: 0;">
                <li style="padding: 5px 0;">✓ Website Custom/Web App</li>
                <li style="padding: 5px 0;">✓ Website Sekolah/Lembaga</li>
                <li style="padding: 5px 0;">✓ Website Portfolio</li>
                <li style="padding: 5px 0;">✓ Website AI & Otomasi</li>
            </ul>
        </div>
        
        <div style="background: rgba(30,92,153,0.3); padding: 20px; border-radius: 12px;">
            <h3 style="color: var(--bright-gold); font-size: 1.3rem; margin-bottom: 12px;">📢 Digital Marketing (7)</h3>
            <ul style="list-style: none; padding: 0; margin: 0;">
                <li style="padding: 5px 0;">✓ SEO Optimization</li>
                <li style="padding: 5px 0;">✓ Google Ads</li>
                <li style="padding: 5px 0;">✓ Meta Ads (FB & IG)</li>
                <li style="padding: 5px 0;">✓ TikTok Ads</li>
                <li style="padding: 5px 0;">✓ Email Marketing</li>
                <li style="padding: 5px 0;">✓ WhatsApp Blast</li>
                <li style="padding: 5px 0;">✓ Social Media Management</li>
            </ul>
        </div>
        
        <div style="background: rgba(30,92,153,0.3); padding: 20px; border-radius: 12px;">
            <h3 style="color: var(--bright-gold); font-size: 1.3rem; margin-bottom: 12px;">🤖 AI & Otomasi (4)</h3>
            <ul style="list-style: none; padding: 0; margin: 0;">
                <li style="padding: 5px 0;">✓ Chatbot AI</li>
                <li style="padding: 5px 0;">✓ Sistem CRM</li>
                <li style="padding: 5px 0;">✓ Dashboard Bisnis AI</li>
                <li style="padding: 5px 0;">✓ Sistem Booking Online</li>
            </ul>
        </div>
        
        <div style="background: rgba(30,92,153,0.3); padding: 20px; border-radius: 12px;">
            <h3 style="color: var(--bright-gold); font-size: 1.3rem; margin-bottom: 12px;">🎨 Branding & Desain (4)</h3>
            <ul style="list-style: none; padding: 0; margin: 0;">
                <li style="padding: 5px 0;">✓ Desain Logo</li>
                <li style="padding: 5px 0;">✓ Desain Banner/Poster</li>
                <li style="padding: 5px 0;">✓ Desain Kartu Nama</li>
                <li style="padding: 5px 0;">✓ Desain Konten Sosmed</li>
            </ul>
        </div>
    </div>
    
    <div style="background: rgba(255,215,0,0.1); padding: 20px; border-radius: 12px; margin-top: 25px;">
        <h3 style="color: var(--bright-gold); font-size: 1.5rem; margin-bottom: 12px;">🎁 PLUS: 4 PAKET BUNDLING HEMAT!</h3>
        <p style="font-size: 1.05rem; margin: 10px 0;">
            Dapatkan kombinasi layanan dengan diskon hingga <strong>40%!</strong><br>
            Mulai dari Rp 600rb - Rp 3,5jt
        </p>
    </div>
    
    <a href="https://wa.me/6282220133439?text=Halo%20Situneo,%20saya%20mau%20lihat%20KATALOG%20LENGKAP%20semua%20layanan" class="btn-order" target="_blank" style="font-size: 1.2rem; padding: 18px 45px; margin-top: 25px;">
        <i class="bi bi-whatsapp"></i> LIHAT KATALOG LENGKAP 26+ LAYANAN
    </a>
</div>



<!-- ============================================ -->
<!-- FOOTER / CTA -->
<!-- ============================================ -->
<div style="background: linear-gradient(135deg, #1E5C99 0%, #0F3057 100%); padding: 50px 20px; margin-top: 60px; text-align: center; border-radius: 16px;">
    <h2 style="color: var(--bright-gold); font-size: 2.5rem; font-weight: 900; margin-bottom: 18px;">
        💬 Masih Bingung Pilih Layanan atau Sistem Pembayaran?
    </h2>
    <p style="font-size: 1.1rem; margin-bottom: 25px; line-height: 1.7;">
        <strong style="color: var(--gold);">Konsultasi GRATIS</strong> dengan tim kami!<br>
        Kami bantu pilih layanan & sistem pembayaran yang paling cocok untuk bisnis kamu<br><br>
        <span style="font-size: 0.95rem; color: var(--text-light);">
            ✓ Analisis kebutuhan bisnis<br>
            ✓ Rekomendasi layanan yang tepat<br>
            ✓ Perhitungan biaya detail<br>
            ✓ Penjelasan benefit tiap sistem
        </span>
    </p>
    <a href="https://wa.me/6282220133439?text=Halo%20Situneo,%20saya%20mau%20konsultasi%20GRATIS" class="btn-order" target="_blank" style="font-size: 1.25rem; padding: 18px 45px;">
        <i class="bi bi-whatsapp"></i> KONSULTASI GRATIS SEKARANG
    </a>
    
    <div style="margin-top: 40px; padding-top: 25px; border-top: 1px solid rgba(255,180,0,0.3);">
        <p style="font-size: 0.9rem; color: var(--text-light); margin-bottom: 10px;">
            📧 <strong>Email:</strong> info@situneo.my.id<br>
            📱 <strong>WhatsApp:</strong> 082220133439<br>
            🌐 <strong>Website:</strong> https://situneo.my.id
        </p>
        <p style="font-size: 0.85rem; color: var(--text-light); opacity: 0.8; margin-top: 15px;">
            © 2025 SITUNEO DIGITAL - Website Termahal & Termewah Se-Indonesia<br>
            NIB: 20250-9261-4570-4515-5453<br>
            Dipercaya 500+ Client di Indonesia
        </p>
    </div>
</div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>