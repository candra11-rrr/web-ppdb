<!DOCTYPE html>
<html lang="id" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKNK 1 CIOMAS | Sekolah Menengah Kejuruan Negeri Unggulan</title>
    <meta name="description" content="SMKNK 1 CIOMAS adalah Sekolah Menengah Kejuruan Negeri Pusat Keunggulan di Kabupaten Bogor dengan konsentrasi keahlian PPLG, Animasi 3D, DKV, Otomotif, dan Teknik Pengelasan yang siap kerja, kuliah, dan wirausaha.">
    <meta name="keywords" content="SMKNK 1 CIOMAS, SMKN 1 Ciomas, SMK Ciomas, SMK Pusat Keunggulan, PPDB SMKNK 1 Ciomas 2026, Animasi SMKN 1 Ciomas, RPL Ciomas, DKV Ciomas">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="SMKNK 1 CIOMAS - SMK Pusat Keunggulan & Creative Tech">
    <meta property="og:description" content="Penerimaan Peserta Didik Baru (PPDB) 2026/2027 SMKNK 1 CIOMAS dibuka. Wujudkan masa depan gemilang dengan kompetensi vokasi kelas dunia.">
    <meta property="og:type" content="website">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/school-theme.css') }}">

    <style>
        /* Extra Micro-Polish */
        .step-progress-bar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 2rem;
            position: relative;
        }
        .step-progress-bar::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 2px;
            background: var(--border-subtle);
            z-index: 1;
            transform: translateY(-50%);
        }
        .step-bullet {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--bg-surface);
            border: 2px solid var(--border-subtle);
            color: var(--text-dim);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.85rem;
            position: relative;
            z-index: 2;
            transition: all var(--transition-fast);
        }
        .step-bullet.active {
            border-color: var(--primary);
            background: var(--primary);
            color: #ffffff;
            box-shadow: 0 0 15px var(--primary-glow);
        }
        .step-bullet.completed {
            border-color: #10b981;
            background: #10b981;
            color: #ffffff;
        }
        .ticket-box {
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.1) 0%, rgba(6, 182, 212, 0.05) 100%);
            border: 2px dashed var(--border-bright);
            border-radius: var(--radius-md);
            padding: 1.8rem;
            text-align: center;
        }
        .barcode-strip {
            height: 48px;
            background: repeating-linear-gradient(90deg, var(--text-main) 0px, var(--text-main) 2px, transparent 2px, transparent 4px, var(--text-main) 4px, var(--text-main) 7px, transparent 7px, transparent 9px);
            margin: 1.2rem auto;
            max-width: 280px;
            opacity: 0.85;
        }
    </style>
</head>
<body>

    <!-- Ambient Glow Orbs -->
    <div class="bg-glow-orb glow-top-right"></div>
    <div class="bg-glow-orb glow-bottom-left"></div>

    <!-- Navigation Header -->
    <header class="navbar-wrap">
        <div class="container">
            <nav class="navbar" aria-label="Main Navigation">
                <a href="#beranda" class="brand-logo" id="mainBrandLogo">
                    <div class="brand-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                        </svg>
                    </div>
                    <div class="brand-title">
                        <span class="brand-name">SMKNK 1 <span class="text-gradient">CIOMAS</span></span>
                        <span class="brand-tag">SMK Pusat Keunggulan & Creative Tech</span>
                    </div>
                </a>

                <ul class="nav-links">
                    <li><a href="#beranda" class="nav-link">Beranda</a></li>

                    <!-- Dropdown 1: Akademik & Jurusan -->
                    <li class="nav-dropdown">
                        <button class="nav-dropdown-toggle" aria-haspopup="true" aria-expanded="false">
                            <span>Akademik & Jurusan</span>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </button>
                        <ul class="nav-dropdown-menu">
                            <li>
                                <a href="#keunggulan" class="nav-dropdown-item">
                                    <div class="dropdown-icon">🎯</div>
                                    <div class="dropdown-text">
                                        <span class="dropdown-title">Keunggulan Vokasi</span>
                                        <span class="dropdown-desc">Teaching Factory & Mitra Industri</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#jurusan" class="nav-dropdown-item">
                                    <div class="dropdown-icon">💻</div>
                                    <div class="dropdown-text">
                                        <span class="dropdown-title">5 Program Keahlian</span>
                                        <span class="dropdown-desc">Animasi, PPLG, DKV, Otomotif, Las</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#tur-kampus" class="nav-dropdown-item">
                                    <div class="dropdown-icon">🏢</div>
                                    <div class="dropdown-text">
                                        <span class="dropdown-title">Tur Bengkel & Lab 360°</span>
                                        <span class="dropdown-desc">Studio Animasi 4K & Car Lift</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#pengajar" class="nav-dropdown-item">
                                    <div class="dropdown-icon">👨‍🏫</div>
                                    <div class="dropdown-text">
                                        <span class="dropdown-title">Instruktur & Asesor BNSP</span>
                                        <span class="dropdown-desc">Praktisi Industri & Guru Ahli</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Dropdown 2: Kesiswaan & Prestasi -->
                    <li class="nav-dropdown">
                        <button class="nav-dropdown-toggle" aria-haspopup="true" aria-expanded="false">
                            <span>Kesiswaan & Prestasi</span>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </button>
                        <ul class="nav-dropdown-menu">
                            <li>
                                <a href="#prestasi" class="nav-dropdown-item">
                                    <div class="dropdown-icon">🏆</div>
                                    <div class="dropdown-text">
                                        <span class="dropdown-title">Prestasi LKS Nasional</span>
                                        <span class="dropdown-desc">Medali Emas Animasi & Web Tech</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#ekstrakurikuler" class="nav-dropdown-item">
                                    <div class="dropdown-icon">⚽</div>
                                    <div class="dropdown-text">
                                        <span class="dropdown-title">Ekstrakurikuler Unggulan</span>
                                        <span class="dropdown-desc">Game Dev, Paskibra, Futsal, Silat</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#agenda" class="nav-dropdown-item">
                                    <div class="dropdown-icon">📅</div>
                                    <div class="dropdown-text">
                                        <span class="dropdown-title">Agenda & Job Fair</span>
                                        <span class="dropdown-desc">Rekrutmen BKK & Pameran Expo</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#testimoni" class="nav-dropdown-item">
                                    <div class="dropdown-icon">🌟</div>
                                    <div class="dropdown-text">
                                        <span class="dropdown-title">Kisah Sukses Alumni</span>
                                        <span class="dropdown-desc">Karier di Industri & Wirausaha</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Dropdown 3: Layanan & PPDB -->
                    <li class="nav-dropdown">
                        <button class="nav-dropdown-toggle" aria-haspopup="true" aria-expanded="false">
                            <span>Layanan & PPDB</span>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </button>
                        <ul class="nav-dropdown-menu">
                            <li>
                                <a href="#portal-siswa" class="nav-dropdown-item">
                                    <div class="dropdown-icon">📊</div>
                                    <div class="dropdown-text">
                                        <span class="dropdown-title">Portal Siswa & E-Rapor</span>
                                        <span class="dropdown-desc">Transkrip UKK & Catatan PKL</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#kalkulator" class="nav-dropdown-item">
                                    <div class="dropdown-icon">💰</div>
                                    <div class="dropdown-text">
                                        <span class="dropdown-title">Simulasi Biaya & KIP</span>
                                        <span class="dropdown-desc">Perlengkapan & Beasiswa Afirmasi</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-dropdown-item btn-open-ppdb">
                                    <div class="dropdown-icon" style="background:rgba(16,185,129,0.15); color:#10b981;">📝</div>
                                    <div class="dropdown-text">
                                        <span class="dropdown-title" style="color:#10b981;">Pendaftaran PPDB 2026</span>
                                        <span class="dropdown-desc">Formulir Online & Nomor Tiket</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#kontak" class="nav-dropdown-item">
                                    <div class="dropdown-icon">📍</div>
                                    <div class="dropdown-text">
                                        <span class="dropdown-title">Kontak & Lokasi Kampus</span>
                                        <span class="dropdown-desc">Laladon Ciomas & Hotline WA</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <div class="nav-actions">
                    <!-- Search Palette Trigger -->
                    <button class="icon-btn" id="searchTriggerBtn" title="Cari Cepat (Ctrl+K)" aria-label="Buka Pencarian">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    </button>

                    <!-- Theme Toggle -->
                    <button class="icon-btn" id="themeToggleBtn" title="Ganti Tema Gelap / Terang" aria-label="Ganti Tema">
                        <span id="themeIcon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                        </span>
                    </button>

                    <!-- Language Switcher -->
                    <button class="icon-btn" id="langToggleBtn" title="Pilih Bahasa" style="font-weight:700; font-size:0.75rem;">
                        ID
                    </button>

                    <!-- PPDB CTA -->
                    <button class="btn btn-primary btn-sm btn-open-ppdb" id="navPpdbBtn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line></svg>
                        <span data-i18n="nav_ppdb">Daftar PPDB</span>
                    </button>

                    <!-- Corner Dropbar (Belah Kanan Atas Pojok) -->
                    <div class="corner-dropbar" id="cornerDropbar">
                        <button class="corner-dropbar-btn" id="cornerDropbarBtn" aria-haspopup="true" aria-expanded="false" title="Menu Navigasi Lengkap">
                            <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                            <span>Menu ▾</span>
                        </button>

                        <!-- Dropdown Panel (Anchored to Top-Right Corner) -->
                        <div class="corner-dropbar-panel" id="cornerDropbarPanel">
                            <div class="corner-dropbar-grid">
                                <!-- Col 1: Akademik & Jurusan -->
                                <div class="corner-dropbar-col">
                                    <h5>🎓 Akademik & Jurusan</h5>
                                    <ul class="corner-dropbar-links">
                                        <li>
                                            <a href="#keunggulan" class="corner-dropbar-item">
                                                <span style="font-size:1.1rem;">🎯</span>
                                                <div class="dropdown-text">
                                                    <span class="dropdown-title">Keunggulan Vokasi</span>
                                                    <span class="dropdown-desc">Teaching Factory & Industri</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#jurusan" class="corner-dropbar-item">
                                                <span style="font-size:1.1rem;">💻</span>
                                                <div class="dropdown-text">
                                                    <span class="dropdown-title">5 Program Keahlian</span>
                                                    <span class="dropdown-desc">Animasi, PPLG, DKV, Otomotif, Las</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tur-kampus" class="corner-dropbar-item">
                                                <span style="font-size:1.1rem;">🏢</span>
                                                <div class="dropdown-text">
                                                    <span class="dropdown-title">Tur Bengkel & Lab 360°</span>
                                                    <span class="dropdown-desc">Studio Animasi 4K & Car Lift</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#pengajar" class="corner-dropbar-item">
                                                <span style="font-size:1.1rem;">👨‍🏫</span>
                                                <div class="dropdown-text">
                                                    <span class="dropdown-title">Instruktur & Asesor BNSP</span>
                                                    <span class="dropdown-desc">Praktisi Industri & Guru Ahli</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Col 2: Kesiswaan & Prestasi -->
                                <div class="corner-dropbar-col">
                                    <h5>🏆 Kesiswaan & Prestasi</h5>
                                    <ul class="corner-dropbar-links">
                                        <li>
                                            <a href="#prestasi" class="corner-dropbar-item">
                                                <span style="font-size:1.1rem;">🥇</span>
                                                <div class="dropdown-text">
                                                    <span class="dropdown-title">Prestasi LKS Nasional</span>
                                                    <span class="dropdown-desc">Medali Emas Animasi & Web</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#ekstrakurikuler" class="corner-dropbar-item">
                                                <span style="font-size:1.1rem;">⚽</span>
                                                <div class="dropdown-text">
                                                    <span class="dropdown-title">Ekstrakurikuler</span>
                                                    <span class="dropdown-desc">Game Dev, Paskibra, Futsal</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#agenda" class="corner-dropbar-item">
                                                <span style="font-size:1.1rem;">📅</span>
                                                <div class="dropdown-text">
                                                    <span class="dropdown-title">Agenda & Job Fair</span>
                                                    <span class="dropdown-desc">Jadwal BKK & Expo Vokasi</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#testimoni" class="corner-dropbar-item">
                                                <span style="font-size:1.1rem;">🌟</span>
                                                <div class="dropdown-text">
                                                    <span class="dropdown-title">Kiprah Alumni</span>
                                                    <span class="dropdown-desc">Karier di Studio & Industri</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Col 3: Layanan & PPDB -->
                                <div class="corner-dropbar-col">
                                    <h5>⚡ Layanan & PPDB</h5>
                                    <ul class="corner-dropbar-links">
                                        <li>
                                            <a href="#portal-siswa" class="corner-dropbar-item">
                                                <span style="font-size:1.1rem;">📊</span>
                                                <div class="dropdown-text">
                                                    <span class="dropdown-title">Portal Siswa & E-Rapor</span>
                                                    <span class="dropdown-desc">Transkrip UKK & Catatan PKL</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#kalkulator" class="corner-dropbar-item">
                                                <span style="font-size:1.1rem;">💰</span>
                                                <div class="dropdown-text">
                                                    <span class="dropdown-title">Simulasi Biaya & KIP</span>
                                                    <span class="dropdown-desc">Perlengkapan & Beasiswa</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="corner-dropbar-item btn-open-ppdb">
                                                <span style="font-size:1.1rem;">📝</span>
                                                <div class="dropdown-text">
                                                    <span class="dropdown-title" style="color:#10b981;">Formulir PPDB 2026</span>
                                                    <span class="dropdown-desc">Daftar Online & Bukti Tiket</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#kontak" class="corner-dropbar-item">
                                                <span style="font-size:1.1rem;">📍</span>
                                                <div class="dropdown-text">
                                                    <span class="dropdown-title">Kontak & Lokasi</span>
                                                    <span class="dropdown-desc">Jl. Raya Laladon No. 1 Ciomas</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="corner-dropbar-footer">
                                <span style="color:var(--text-dim);">Hotline PPDB: <strong>0812-3456-7890</strong></span>
                                <a href="{{ route('admin.dashboard') }}" target="_blank" style="color:var(--primary); font-weight:700;">🔐 Panel Admin PPDB &rarr;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Marquee Ticker -->
    <div class="ticker-wrap" style="margin-top: 74px;">
        <div class="container">
            <div class="ticker-content">
                <div class="ticker-item">
                    <strong>PPDB SMKNK 1 CIOMAS 2026:</strong> Pendaftaran Calon Peserta Didik Baru Gelombang 1 Dibuka Hingga 30 Mei 2026.
                </div>
                <div class="ticker-item">
                    <strong>PRESTASI LKS:</strong> Siswa Animasi SMKNK 1 Ciomas Meraih Juara 1 Lomba Kompetensi Siswa (LKS) Tingkat Nasional.
                </div>
                <div class="ticker-item">
                    <strong>TEACHING FACTORY:</strong> Studio Animasi & Game SMKNK 1 Ciomas Resmi Rilis Proyek Serial Edukasi Industri Kreatif.
                </div>
                <div class="ticker-item">
                    <strong>BURSA KERJA KHUSUS (BKK):</strong> Penyaluran Kerja ke 75+ Perusahaan Rekanan & Industri Otomotif / IT Nasional.
                </div>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero-section" id="beranda">
        <div class="container">
            <div class="hero-grid">
                <div>
                    <div class="hero-badge-top">
                        <span class="hero-badge-live"></span>
                        <span data-i18n="hero_tag">PPDB SMKNK 1 CIOMAS 2026/2027 Telah Dibuka</span>
                    </div>

                    <h1 class="hero-title" data-i18n="hero_title">
                        Mencetak Talenta Vokasi <span class="text-gradient">Berdaya Saing Global</span> & Siap Kerja
                    </h1>

                    <p class="hero-desc" data-i18n="hero_desc">
                        Selamat datang di SMKNK 1 CIOMAS (Kabupaten Bogor). Sekolah Menengah Kejuruan Pusat Keunggulan yang memadukan kurikulum industri, Teaching Factory bertaraf internasional, sertifikasi BNSP, dan penyaluran kerja terpercaya.
                    </p>

                    <div class="hero-btns">
                        <button class="btn btn-primary btn-lg btn-open-ppdb" id="heroPpdbBtn">
                            <span data-i18n="btn_ppdb">Daftar PPDB Online</span>
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </button>
                        <a href="#tur-kampus" class="btn btn-secondary btn-lg">
                            <span data-i18n="btn_tour">Jelajahi Bengkel & Lab 360°</span>
                        </a>
                        <a href="#kalkulator" class="btn btn-outline btn-lg">
                            <span data-i18n="btn_calc">Simulasi Biaya & KIP</span>
                        </a>
                    </div>

                    <!-- Hero Stats Row -->
                    <div class="hero-stats-row">
                        <div class="stat-item">
                            <span class="stat-number">1,650+</span>
                            <span class="stat-label">Siswa Aktif Berprestasi</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">96.4%</span>
                            <span class="stat-label">Terserap Kerja & Kuliah</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">85+</span>
                            <span class="stat-label">Mitra DUDI & Industri</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">38+</span>
                            <span class="stat-label">Trofi LKS & Inovasi</span>
                        </div>
                    </div>
                </div>

                <!-- Hero Visual Showcase -->
                <div class="hero-visual">
                    <div class="hero-floating-card float-card-1">
                        <div class="float-icon">🏆</div>
                        <div>
                            <div style="font-weight:700; font-size:0.92rem; color:var(--text-main);">Juara 1 LKS Animasi Nasional</div>
                            <div style="font-size:0.75rem; color:var(--text-muted);">Pusat Keunggulan Kemendikbudristek</div>
                        </div>
                    </div>

                    <div class="hero-visual-card">
                        <div class="hero-img-wrap">
                            <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=1200&q=80" alt="Kampus Modern SMKNK 1 CIOMAS" id="heroVisualImg">
                            <div class="hero-overlay">
                                <div style="display:flex; justify-content:space-between; align-items:flex-end;">
                                    <div>
                                        <span class="badge badge-gold" style="margin-bottom:0.5rem;">SMK Pusat Keunggulan (PK)</span>
                                        <h3 style="font-size:1.3rem; color:#ffffff;">Kampus SMKNK 1 CIOMAS</h3>
                                        <p style="font-size:0.85rem; color:#cbd5e1;">Jl. Raya Laladon No. 1, Ciomas, Kab. Bogor</p>
                                    </div>
                                    <span class="badge badge-emerald">Akreditasi A Unggul</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hero-floating-card float-card-2">
                        <div class="float-icon" style="background:var(--gradient-emerald);">🎬</div>
                        <div>
                            <div style="font-weight:700; font-size:0.92rem; color:var(--text-main);">Studio Animasi 4K & TEFA</div>
                            <div style="font-size:0.75rem; color:var(--text-muted);">Produksi Komersial Industri Siswa</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Keunggulan & Pilar Vokasi -->
    <section class="section" id="keunggulan" style="background: var(--bg-surface);">
        <div class="container">
            <div class="section-title-wrap">
                <span class="section-tag">Keunggulan Vokasi</span>
                <h2 class="section-title">Mengapa Memilih <span class="text-gradient">SMKNK 1 CIOMAS?</span></h2>
                <p class="section-subtitle">Kami menyiapkan lulusan dengan prinsip BMW (Bekerja, Melanjutkan Studi, atau Wirausaha) melalui fasilitas industri terdepan di Kabupaten Bogor.</p>
            </div>

            <div class="curriculum-grid">
                <div class="card">
                    <div style="width:48px; height:48px; border-radius:12px; background:rgba(99, 102, 241, 0.15); color:var(--primary); display:flex; align-items:center; justify-content:center; font-size:1.5rem; margin-bottom:1.2rem;">
                        🏭
                    </div>
                    <h3 style="font-size:1.25rem; margin-bottom:0.6rem;">Teaching Factory (TEFA) Standar Industri</h3>
                    <p style="font-size:0.9rem; line-height:1.6; margin-bottom:1rem;">Proses pembelajaran langsung mengerjakan pesanan nyata dari klien dan industri mitra, melatih etos kerja profesional siswa.</p>
                    <span class="badge badge-blue">Project-Based Learning</span>
                </div>

                <div class="card">
                    <div style="width:48px; height:48px; border-radius:12px; background:rgba(16, 185, 129, 0.15); color:#10b981; display:flex; align-items:center; justify-content:center; font-size:1.5rem; margin-bottom:1.2rem;">
                        📜
                    </div>
                    <h3 style="font-size:1.25rem; margin-bottom:0.6rem;">Sertifikasi Keahlian BNSP & LSP-P1</h3>
                    <p style="font-size:0.9rem; line-height:1.6; margin-bottom:1rem;">Setiap siswa diuji oleh asesor profesional berlisensi Badan Nasional Sertifikasi Profesi sebelum lulus sekolah.</p>
                    <span class="badge badge-emerald">Lisensi Resmi Nasional</span>
                </div>

                <div class="card">
                    <div style="width:48px; height:48px; border-radius:12px; background:rgba(245, 158, 11, 0.15); color:#fbbf24; display:flex; align-items:center; justify-content:center; font-size:1.5rem; margin-bottom:1.2rem;">
                        💼
                    </div>
                    <h3 style="font-size:1.25rem; margin-bottom:0.6rem;">Bursa Kerja Khusus (BKK) Unggulan</h3>
                    <p style="font-size:0.9rem; line-height:1.6; margin-bottom:1rem;">Penyaluran kerja langsung ke 85+ perusahaan ternama di bidang teknologi, studio animasi, perbengkelan resmi, dan manufaktur.</p>
                    <span class="badge badge-gold">Job Fair & On-Campus Recruitment</span>
                </div>

                <div class="card">
                    <div style="width:48px; height:48px; border-radius:12px; background:rgba(244, 63, 94, 0.15); color:#f43f5e; display:flex; align-items:center; justify-content:center; font-size:1.5rem; margin-bottom:1.2rem;">
                        🚀
                    </div>
                    <h3 style="font-size:1.25rem; margin-bottom:0.6rem;">Inkubator Startup & Wirausaha Muda</h3>
                    <p style="font-size:0.9rem; line-height:1.6; margin-bottom:1rem;">Pelatihan kewirausahaan digital dan bengkel mandiri bagi siswa yang ingin membuka studio kreatif atau jasa perbaikan sendiri.</p>
                    <span class="badge badge-blue">Modal Usaha Siswa</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Keahlian (Konsentrasi Jurusan SMKNK 1 CIOMAS) -->
    <section class="section" id="jurusan">
        <div class="container">
            <div class="section-title-wrap">
                <span class="section-tag">Konsentrasi Keahlian</span>
                <h2 class="section-title">5 Program Keahlian Unggulan <span class="text-gradient">SMKNK 1 CIOMAS</span></h2>
                <p class="section-subtitle">Didesain selaras dengan kebutuhan industri teknologi, multimedia, dan manufaktur modern masa depan.</p>
            </div>

            <div class="curriculum-grid">
                <!-- Jurusan 1: Animasi 3D & 2D -->
                <div class="card curriculum-card">
                    <div class="curriculum-header">
                        <div class="curriculum-icon" style="background:rgba(245, 158, 11, 0.15); color:#fbbf24;">🎬</div>
                        <span class="badge badge-gold">Pusat Keunggulan</span>
                    </div>
                    <h3 class="curriculum-title">Animasi 3D & 2D</h3>
                    <p class="curriculum-desc">Program legendaris SMKNK 1 Ciomas yang mencetak animator, 3D rigger, visual effects artist, dan storyboarder untuk film serta industri gim.</p>
                    <ul class="curriculum-features">
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Autodesk Maya, Blender 3D, Toon Boom Harmony</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Studio Render Farm & Motion Capture Lab</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Magang di Studio Animasi Ternama Jakarta & Bandung</li>
                    </ul>
                    <button class="btn btn-secondary btn-sm btn-open-ppdb" style="margin-top:auto;">Daftar Jurusan Animasi</button>
                </div>

                <!-- Jurusan 2: PPLG / RPL -->
                <div class="card curriculum-card">
                    <div class="curriculum-header">
                        <div class="curriculum-icon" style="background:rgba(99, 102, 241, 0.15); color:var(--primary);">💻</div>
                        <span class="badge badge-blue">Favorit IT</span>
                    </div>
                    <h3 class="curriculum-title">Pengembangan Perangkat Lunak & Gim (PPLG)</h3>
                    <p class="curriculum-desc">Keahlian di bidang fullstack web development, mobile app (Android/iOS), arsitektur cloud, dan game programming dengan teknologi mutakhir.</p>
                    <ul class="curriculum-features">
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Laravel, React, Flutter, Python AI & Unity 3D</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Lomba Kompetensi Siswa (LKS) Web Technologies</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Prospek: Software Engineer, Web Dev, Game Programmer</li>
                    </ul>
                    <button class="btn btn-secondary btn-sm btn-open-ppdb" style="margin-top:auto;">Daftar Jurusan PPLG</button>
                </div>

                <!-- Jurusan 3: DKV -->
                <div class="card curriculum-card">
                    <div class="curriculum-header">
                        <div class="curriculum-icon" style="background:rgba(16, 185, 129, 0.15); color:#10b981;">🎨</div>
                        <span class="badge badge-emerald">Industri Kreatif</span>
                    </div>
                    <h3 class="curriculum-title">Desain Komunikasi Visual (DKV)</h3>
                    <p class="curriculum-desc">Mempelajari desain grafis branding, UI/UX interface produk digital, fotografi komersial, videografi, dan creative advertising multimedia.</p>
                    <ul class="curriculum-features">
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Adobe Creative Cloud (Photoshop, Illustrator, Premiere)</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Studio Foto Profesional & Podcast Recording Hub</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Prospek: Graphic Designer, UI/UX Designer, Content Creator</li>
                    </ul>
                    <button class="btn btn-secondary btn-sm btn-open-ppdb" style="margin-top:auto;">Daftar Jurusan DKV</button>
                </div>

                <!-- Jurusan 4: TKRO (Otomotif) -->
                <div class="card curriculum-card">
                    <div class="curriculum-header">
                        <div class="curriculum-icon" style="background:rgba(56, 189, 248, 0.15); color:#38bdf8;">🚗</div>
                        <span class="badge badge-blue">Teknik Handal</span>
                    </div>
                    <h3 class="curriculum-title">Teknik Kendaraan Ringan Otomotif (TKRO)</h3>
                    <p class="curriculum-desc">Fokus pada diagnosis mesin EFI & Hybrid, kelistrikan bodi kendaraan modern, transmisi otomatis, dan manajemen bengkel servis resmi.</p>
                    <ul class="curriculum-features">
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Scanner Komputer Mesin EFI & Car Lift Hidrolik</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Kerja sama kelas industri dengan Agen Pemegang Merek</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Prospek: Service Advisor, Teknisi Mobil, Wirausaha Bengkel</li>
                    </ul>
                    <button class="btn btn-secondary btn-sm btn-open-ppdb" style="margin-top:auto;">Daftar Jurusan Otomotif</button>
                </div>

                <!-- Jurusan 5: Teknik Pengelasan -->
                <div class="card curriculum-card">
                    <div class="curriculum-header">
                        <div class="curriculum-icon" style="background:rgba(244, 63, 94, 0.15); color:#f43f5e;">⚡</div>
                        <span class="badge badge-gold">Manufaktur</span>
                    </div>
                    <h3 class="curriculum-title">Teknik Pengelasan & Fabrikasi Logam</h3>
                    <p class="curriculum-desc">Keahlian tingkat tinggi dalam pengelasan SMAW, GMAW, GTAW (TIG/Argon) berstandar fabrikasi kapal, konstruksi pipa industri, dan otomotif.</p>
                    <ul class="curriculum-features">
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Sertifikasi Welder 3G/4G/6G Standar Internasional</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Mesin Las Inverter Digital & CNC Plasma Cutting</li>
                        <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg> Peluang Kerja Luar Negeri (Jepang, Jerman, Konstruksi Maritim)</li>
                    </ul>
                    <button class="btn btn-secondary btn-sm btn-open-ppdb" style="margin-top:auto;">Daftar Jurusan Las</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Tur Kampus 360° Interaktif (Bengkel & Lab) -->
    <section class="section" id="tur-kampus" style="background: var(--bg-surface);">
        <div class="container">
            <div class="section-title-wrap">
                <span class="section-tag">Fasilitas Praktik Modern</span>
                <h2 class="section-title">Tur Bengkel & <span class="text-gradient">Studio SMKNK 1 CIOMAS</span></h2>
                <p class="section-subtitle">Lihat secara langsung lingkungan praktik berstandar industri tempat siswa menempa keahlian setiap hari.</p>
            </div>

            <div class="tour-container">
                <!-- Sidebar Pilihan Spot -->
                <div class="tour-sidebar">
                    <button class="tour-spot-btn active" data-spot="lab">
                        <div class="spot-info">
                            <h4>Studio Animasi & Render Farm</h4>
                            <p>40 Workstation Grafis GPU NVIDIA & Cintiq Tablet</p>
                        </div>
                        <span style="font-size:1.2rem; color:var(--primary);">&rarr;</span>
                    </button>

                    <button class="tour-spot-btn" data-spot="library">
                        <div class="spot-info">
                            <h4>Laboratorium PPLG & Cloud Server</h4>
                            <p>Lab Pemrograman Modern Berpendingin Presisi</p>
                        </div>
                        <span style="font-size:1.2rem; color:var(--primary);">&rarr;</span>
                    </button>

                    <button class="tour-spot-btn" data-spot="science">
                        <div class="spot-info">
                            <h4>Studio DKV & Podcast Recording</h4>
                            <p>Green Screen Studio, Kamera Sinema 4K & Lighting</p>
                        </div>
                        <span style="font-size:1.2rem; color:var(--primary);">&rarr;</span>
                    </button>

                    <button class="tour-spot-btn" data-spot="sports">
                        <div class="spot-info">
                            <h4>Bengkel Otomotif TKRO & Car Lift</h4>
                            <p>4 Unit Car Lift, Engine Stand & Diagnostic Scan</p>
                        </div>
                        <span style="font-size:1.2rem; color:var(--primary);">&rarr;</span>
                    </button>

                    <button class="tour-spot-btn" data-spot="theater">
                        <div class="spot-info">
                            <h4>Workshop Pengelasan & Fabrikasi CNC</h4>
                            <p>Booth Las Standar ISO, Argon TIG, & Plasma Cut</p>
                        </div>
                        <span style="font-size:1.2rem; color:var(--primary);">&rarr;</span>
                    </button>

                    <button class="tour-spot-btn" data-spot="dorm">
                        <div class="spot-info">
                            <h4>Gedung Pusat Sumber Belajar & BKK</h4>
                            <p>Perpustakaan Digital & Ruang Rekrutmen Industri</p>
                        </div>
                        <span style="font-size:1.2rem; color:var(--primary);">&rarr;</span>
                    </button>
                </div>

                <!-- Display Media Interaktif -->
                <div class="tour-display">
                    <div class="tour-media-box">
                        <img id="tourSpotImg" src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=1200&q=80" alt="Fasilitas SMKNK 1 CIOMAS">
                        <div class="tour-tag-badge">
                            <span class="hero-badge-live" style="background:#10b981; box-shadow:0 0 10px #10b981;"></span>
                            <span id="tourSpotCategory">Pusat Keunggulan Animasi</span>
                        </div>
                        <div class="tour-detail-overlay">
                            <div>
                                <h3 id="tourSpotTitle" style="font-size:1.4rem; color:#fff; margin-bottom:0.4rem;">Studio Animasi 3D & Render Farm</h3>
                                <p id="tourSpotDesc" style="font-size:0.88rem; color:#cbd5e1; max-width:480px; margin-bottom:0.8rem;">
                                    Dilengkapi 40 workstation GPU NVIDIA RTX, display drawing pen tablet Wacom, dan server render terpusat untuk memproduksi film animasi siswa berstandar bioskop.
                                </p>
                                <div class="tour-specs-list">
                                    <span>Kapasitas: <strong id="tourSpotCap">40 Siswa / Sesi</strong></span>
                                    <span>Peralatan: <strong id="tourSpotEq">Workstation GPU RTX & Cintiq Pen</strong></span>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-sm" onclick="showToast('Mode 360 Panorama aktif! Anda melihat Bengkel SMKNK 1 CIOMAS.')">
                                🔄 Mode 360°
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portal Akademik Siswa / E-Rapor Simulator (Live Demo) -->
    <section class="section" id="portal-siswa">
        <div class="container">
            <div class="section-title-wrap">
                <span class="section-tag">Sistem Informasi Siswa</span>
                <h2 class="section-title">Portal Akademik & <span class="text-gradient">E-Rapor SMKNK 1 CIOMAS</span></h2>
                <p class="section-subtitle">Pantau nilai kompetensi kejuruan, laporan magang industri (PKL), sertifikasi keahlian BNSP, dan rapor berkala secara online.</p>
            </div>

            <div class="portal-showcase-box">
                <!-- Portal Top Bar -->
                <div class="portal-header">
                    <div class="portal-user-badge">
                        <img id="portalStudentAvatar" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=200&q=80" alt="Avatar Siswa" class="portal-avatar">
                        <div class="portal-meta">
                            <h4 id="portalStudentName">Aura Cinta Lestari</h4>
                            <span id="portalStudentGrade">Kelas XI - Animasi 3D & Pemodelan</span> &bull; <span id="portalStudentNisn">NISN: 0089123401</span>
                        </div>
                    </div>

                    <div style="display:flex; align-items:center; gap:0.8rem;">
                        <label for="portalStudentSelect" style="font-size:0.85rem; color:var(--text-muted); font-weight:600;">Pilih Siswa Contoh:</label>
                        <select id="portalStudentSelect" class="form-select" style="padding:0.45rem 0.9rem; font-size:0.85rem; width:auto;">
                            <option value="aura">Aura Cinta (XI Animasi 3D)</option>
                            <option value="farhan">M. Farhan (XII PPLG / RPL)</option>
                            <option value="nathania">Nathania (X DKV Kreatif)</option>
                        </select>
                    </div>
                </div>

                <!-- Portal Body Metrics -->
                <div class="portal-body">
                    <div class="portal-stats-grid">
                        <div class="portal-stat-card">
                            <div class="label">Rata-rata Nilai Kejuruan</div>
                            <div class="val text-gradient" id="portalStudentGpa">94.8</div>
                            <div style="font-size:0.75rem; color:#10b981; font-weight:600;">Predikat: Sangat Kompeten (A)</div>
                        </div>

                        <div class="portal-stat-card">
                            <div class="label">Status Sertifikasi BNSP</div>
                            <div class="val" id="portalStudentRank" style="font-size:1.15rem; color:#10b981;">Tersertifikasi Kompeten</div>
                            <div style="font-size:0.75rem; color:var(--text-muted);">Skema: Junior 3D Animator</div>
                        </div>

                        <div class="portal-stat-card">
                            <div class="label">Absensi Praktik Bengkel</div>
                            <div class="val text-gold" id="portalStudentAttend">99.4%</div>
                            <div style="font-size:0.75rem; color:var(--text-muted);">Disiplin Jam Kerja Industri</div>
                        </div>

                        <div class="portal-stat-card">
                            <div class="label">Evaluasi PKL / Magang</div>
                            <div class="val" id="portalStudentConduct" style="font-size:1.3rem; color:#10b981;">Nilai: 98 (Sangat Baik)</div>
                            <div style="font-size:0.75rem; color:var(--text-muted);">Industri: Studio Animasi Jakarta</div>
                        </div>
                    </div>

                    <!-- Grades Table -->
                    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1rem;">
                        <h4 style="font-size:1.1rem;">Capaian Mata Pelajaran Produktif & Normatif</h4>
                        <span class="badge badge-emerald">Terverifikasi LSP SMKNK 1 CIOMAS</span>
                    </div>

                    <div class="grades-table-wrap">
                        <table class="grades-table">
                            <thead>
                                <tr>
                                    <th>Mata Pelajaran & Kompetensi Keahlian</th>
                                    <th style="width:35%;">Nilai Praktik & Teori</th>
                                    <th>Predikat</th>
                                    <th>Hasil Akhir</th>
                                </tr>
                            </thead>
                            <tbody id="portalGradesList">
                                <!-- Populated dynamically by JS -->
                            </tbody>
                        </table>
                    </div>

                    <!-- Teacher Note Box -->
                    <div style="margin-top:1.5rem; background:rgba(99, 102, 241, 0.08); border:1px solid var(--border-bright); border-radius:var(--radius-md); padding:1.2rem; display:flex; gap:1rem; align-items:center;">
                        <div style="font-size:1.8rem;">👨‍🏫</div>
                        <div>
                            <div style="font-size:0.8rem; font-weight:700; color:var(--primary); text-transform:uppercase;">Catatan Pembimbing Kejuruan & Industri</div>
                            <div id="portalTeacherNote" style="font-size:0.88rem; font-style:italic; color:var(--text-main); margin-top:0.2rem;">
                                "Siswa memiliki keterampilan animasi 3D karakter yang sangat halus dan disiplin tinggi saat produksi proyek komersial Teaching Factory."
                            </div>
                        </div>
                        <button class="btn btn-outline btn-sm" style="margin-left:auto; white-space:nowrap;" onclick="showToast('E-Rapor Resmi SMKNK 1 CIOMAS berhasil diunduh!')">
                            📄 Unduh E-Rapor PDF
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kalkulator Simulasi Biaya & KIP SMKNK 1 CIOMAS -->
    <section class="section" id="kalkulator" style="background: var(--bg-surface);">
        <div class="container">
            <div class="section-title-wrap">
                <span class="section-tag">Transparansi Keuangan Vokasi</span>
                <h2 class="section-title">Simulasi Biaya Pendidikan & <span class="text-gradient">Beasiswa KIP</span></h2>
                <p class="section-subtitle">Sebagai SMK Negeri berakreditasi A, SMKNK 1 CIOMAS mengutamakan keterjangkauan dan beasiswa bagi seluruh putra-putri berprestasi.</p>
            </div>

            <div class="calc-container">
                <!-- Controls -->
                <div>
                    <!-- Jalur Peminatan -->
                    <div class="calc-control-group">
                        <label class="calc-label">1. Pilih Konsentrasi Keahlian yang Diminati:</label>
                        <div class="calc-option-grid">
                            <div class="calc-chip calc-chip-pathway active" data-pathway="stem">Animasi 3D</div>
                            <div class="calc-chip calc-chip-pathway" data-pathway="diplomacy">PPLG / RPL</div>
                            <div class="calc-chip calc-chip-pathway" data-pathway="media">DKV Desain</div>
                            <div class="calc-chip calc-chip-pathway" data-pathway="ib">TKRO Otomotif</div>
                        </div>
                    </div>

                    <!-- Pilihan Kategori Siswa -->
                    <div class="calc-control-group">
                        <label class="calc-label">2. Status Bantuan Sosial / Jalur Masuk:</label>
                        <div class="calc-option-grid">
                            <div class="calc-chip calc-chip-boarding active" data-boarding="day">Jalur Reguler / Mandiri</div>
                            <div class="calc-chip calc-chip-boarding" data-boarding="boarding">Pemegang Kartu Indonesia Pintar (KIP / Afirmasi)</div>
                        </div>
                    </div>

                    <!-- Rapor Score Slider -->
                    <div class="calc-control-group">
                        <div class="calc-label">
                            <span>3. Rata-rata Nilai Rapor SMP (Semester 1-5):</span>
                            <span style="color:var(--primary); font-size:1.1rem; font-weight:800;" id="calcRaporVal">86</span>
                        </div>
                        <input type="range" class="calc-range" id="calcRaporScore" min="70" max="100" value="86">
                        <div style="display:flex; justify-content:space-between; font-size:0.75rem; color:var(--text-dim); margin-top:0.3rem;">
                            <span>70 (Standar Kelulusan)</span>
                            <span>85 (Beasiswa Alat Praktik)</span>
                            <span>92+ (Bebas Biaya Penuh)</span>
                        </div>
                    </div>

                    <!-- Prestasi Kejuaraan -->
                    <div class="calc-control-group">
                        <label class="calc-label" for="calcAchieveLevel">4. Sertifikat Prestasi Lomba (Jika Ada):</label>
                        <select id="calcAchieveLevel" class="form-select">
                            <option value="none">Belum Memiliki Piagam Kejuaraan</option>
                            <option value="provinsi">Juara 1-3 Tingkat Kabupaten Bogor / Jawa Barat</option>
                            <option value="nasional">Juara 1-3 Tingkat Nasional (LKS, OSN, O2SN, FLS2N)</option>
                            <option value="internasional">Juara Lomba Teknologi / Kreatif Internasional</option>
                        </select>
                    </div>
                </div>

                <!-- Summary Breakdown Card -->
                <div class="calc-summary-card">
                    <div>
                        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1.2rem;">
                            <h4 style="font-size:1.15rem;">Estimasi Biaya Masuk Awal</h4>
                            <span class="badge badge-emerald">Resmi Negeri</span>
                        </div>

                        <div class="calc-breakdown-row">
                            <span style="color:var(--text-muted);">Biaya Operasional Sekolah (SPP):</span>
                            <strong style="color:#10b981;">GRATIS (Ditanggung BOS & BOPD)</strong>
                        </div>

                        <div class="calc-breakdown-row">
                            <span style="color:var(--text-muted);">Seragam Praktik, Wearpack & Jas Lab (1x):</span>
                            <strong id="displayGedung" style="color:var(--text-main);">Rp 1.450.000</strong>
                        </div>

                        <div class="calc-breakdown-row">
                            <span style="color:var(--text-muted);">Asuransi Kecelakaan Praktik & Tool Kit:</span>
                            <strong id="displaySPP" style="color:var(--text-main);">Rp 350.000 / thn</strong>
                        </div>

                        <div class="calc-breakdown-row" style="color:#10b981;">
                            <span>Potongan Beasiswa / Bantuan KIP:</span>
                            <strong id="displayDiscount">- Rp 500.000</strong>
                        </div>

                        <div class="calc-total-box">
                            <div>
                                <div style="font-size:0.8rem; color:var(--text-muted);">Total Biaya Daftar Ulang:</div>
                                <div style="font-size:0.75rem; color:var(--text-dim);">(Dapat diangsur selama 1 semester)</div>
                            </div>
                            <div class="calc-total-price" id="displayTotalEstimated">Rp 1.300.000</div>
                        </div>
                    </div>

                    <div style="margin-top:2rem; display:flex; flex-direction:column; gap:0.75rem;">
                        <button class="btn btn-primary" id="calcSendWaBtn">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                            Konsultasi PPDB ke WhatsApp Resmi
                        </button>
                        <button class="btn btn-secondary btn-open-ppdb">
                            Daftar PPDB SMKNK 1 CIOMAS
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Direktori Instruktur & Guru Kejuruan -->
    <section class="section" id="pengajar">
        <div class="container">
            <div class="section-title-wrap">
                <span class="section-tag">Tenaga Pendidik & Praktisi</span>
                <h2 class="section-title">Instruktur Ahli & <span class="text-gradient">Praktisi Industri</span></h2>
                <p class="section-subtitle">Diajar langsung oleh guru bersertifikasi Asesor BNSP dan praktisi industri yang aktif di studio animasi serta perusahaan teknologi.</p>
            </div>

            <!-- Filter Buttons -->
            <div class="filter-tabs">
                <button class="filter-btn teacher-filter-btn active" data-filter="all">Semua Guru</button>
                <button class="filter-btn teacher-filter-btn" data-filter="stem">Animasi & Multimedia</button>
                <button class="filter-btn teacher-filter-btn" data-filter="humanities">PPLG & Software</button>
                <button class="filter-btn teacher-filter-btn" data-filter="arts">Otomotif & Mesin</button>
                <button class="filter-btn teacher-filter-btn" data-filter="guidance">Bursa Kerja Khusus (BKK)</button>
            </div>

            <div class="teachers-grid">
                <!-- Guru 1: Animasi -->
                <div class="card teacher-card" data-category="stem">
                    <div class="teacher-img-wrap">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=300&q=80" alt="Guru Animasi">
                    </div>
                    <h4 class="teacher-name">Agus Prasetyo, S.Sn., M.Ds.</h4>
                    <div class="teacher-role">Kepala Program Animasi & Asesor BNSP</div>
                    <div class="teacher-edu">Praktisi 3D Character Artist & Sutradara Animasi</div>
                    <button class="btn btn-outline btn-sm" onclick="showToast('Hubungi Pak Agus via Helpdesk Jurusan Animasi')">Konsultasi Kejuruan</button>
                </div>

                <!-- Guru 2: PPLG -->
                <div class="card teacher-card" data-category="humanities">
                    <div class="teacher-img-wrap">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=300&q=80" alt="Guru PPLG">
                    </div>
                    <h4 class="teacher-name">Nurul Hidayati, S.Kom., M.T.</h4>
                    <div class="teacher-role">Koordinator PPLG & Pembina LKS Web</div>
                    <div class="teacher-edu">Fullstack Web Engineer & Cloud Certified Trainer</div>
                    <button class="btn btn-outline btn-sm" onclick="showToast('Hubungi Bu Nurul via Helpdesk PPLG')">Konsultasi Kejuruan</button>
                </div>

                <!-- Guru 3: DKV -->
                <div class="card teacher-card" data-category="stem">
                    <div class="teacher-img-wrap">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=300&q=80" alt="Guru DKV">
                    </div>
                    <h4 class="teacher-name">Dina Oktaviani, S.Ds.</h4>
                    <div class="teacher-role">Instruktur Desain Grafis & Fotografi</div>
                    <div class="teacher-edu">Creative Director & Asesor LSP Multimedia</div>
                    <button class="btn btn-outline btn-sm" onclick="showToast('Hubungi Bu Dina via Helpdesk DKV')">Konsultasi Kejuruan</button>
                </div>

                <!-- Guru 4: Otomotif -->
                <div class="card teacher-card" data-category="arts">
                    <div class="teacher-img-wrap">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=300&q=80" alt="Guru Otomotif">
                    </div>
                    <h4 class="teacher-name">Ir. Wahyu Supriyanto, S.Pd.</h4>
                    <div class="teacher-role">Kepala Bengkel TKRO & Engine Diagnostic</div>
                    <div class="teacher-edu">Master Service Technician Berlisensi ATPM</div>
                    <button class="btn btn-outline btn-sm" onclick="showToast('Hubungi Pak Wahyu via Bengkel Otomotif')">Konsultasi Kejuruan</button>
                </div>

                <!-- Guru 5: BKK -->
                <div class="card teacher-card" data-category="guidance">
                    <div class="teacher-img-wrap">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=300&q=80" alt="Ketua BKK">
                    </div>
                    <h4 class="teacher-name">Dra. Sri Wahyuni, M.M.</h4>
                    <div class="teacher-role">Ketua Bursa Kerja Khusus (BKK) Ciomas</div>
                    <div class="teacher-edu">Spesialis Penempatan Tenaga Kerja Industri & Magang Jepang</div>
                    <button class="btn btn-outline btn-sm" onclick="showToast('Jadwal temu BKK SMKNK 1 CIOMAS siap!')">Informasi Lowongan</button>
                </div>

                <!-- Guru 6: Pengelasan -->
                <div class="card teacher-card" data-category="arts">
                    <div class="teacher-img-wrap">
                        <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=300&q=80" alt="Guru Las">
                    </div>
                    <h4 class="teacher-name">Dede Hermawan, S.T.</h4>
                    <div class="teacher-role">Instruktur Fabrikasi Logam & Las 6G</div>
                    <div class="teacher-edu">Certified International Welding Practitioner (IWP)</div>
                    <button class="btn btn-outline btn-sm" onclick="showToast('Hubungi Pak Dede via Bengkel Pengelasan')">Konsultasi Kejuruan</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Wall of Fame & Prestasi LKS SMKNK 1 CIOMAS -->
    <section class="section" id="prestasi" style="background: var(--bg-surface);">
        <div class="container">
            <div class="section-title-wrap">
                <span class="section-tag">Pilar Kehormatan</span>
                <h2 class="section-title">Prestasi Membanggakan <span class="text-gradient">SMKNK 1 CIOMAS</span></h2>
                <p class="section-subtitle">Torehan medali emas pada Lomba Kompetensi Siswa (LKS) tingkat Kabupaten Bogor, Provinsi Jawa Barat, hingga Nasional.</p>
            </div>

            <div class="filter-tabs">
                <button class="filter-btn achieve-filter-btn active" data-filter="all">Semua Prestasi</button>
                <button class="filter-btn achieve-filter-btn" data-filter="national">LKS Nasional</button>
                <button class="filter-btn achieve-filter-btn" data-filter="provinsi">Jawa Barat & Daerah</button>
            </div>

            <div class="achieve-grid">
                <div class="card achieve-card" data-category="national">
                    <div class="achieve-medal medal-gold">🥇</div>
                    <span class="badge badge-gold" style="width:fit-content; margin-bottom:0.6rem;">Medali Emas LKS Nasional</span>
                    <h3 class="achieve-title">LKS Nasional Bidang 3D Digital Animation</h3>
                    <div class="achieve-winner">Tim Animasi Ciomas: Rizky & Bagas</div>
                    <div class="achieve-contest">Kemendikbudristek RI &bull; Produksi Film Animasi 3D Terbaik</div>
                </div>

                <div class="card achieve-card" data-category="national">
                    <div class="achieve-medal medal-gold">🏆</div>
                    <span class="badge badge-blue" style="width:fit-content; margin-bottom:0.6rem;">Medali Perak LKS Nasional</span>
                    <h3 class="achieve-title">LKS Nasional Bidang Web Technologies</h3>
                    <div class="achieve-winner">Siswa PPLG SMKNK 1 CIOMAS</div>
                    <div class="achieve-contest">Aplikasi Web Responsive, PWA, & API Microservice</div>
                </div>

                <div class="card achieve-card" data-category="provinsi">
                    <div class="achieve-medal medal-gold">🥇</div>
                    <span class="badge badge-emerald" style="width:fit-content; margin-bottom:0.6rem;">Juara 1 Tingkat Jawa Barat</span>
                    <h3 class="achieve-title">Lomba Kompetensi Siswa Otomotif Jabar</h3>
                    <div class="achieve-winner">Tim TKRO SMKNK 1 CIOMAS</div>
                    <div class="achieve-contest">Troubleshooting Mesin EFI & Overhaul Transmisi Cepat</div>
                </div>

                <div class="card achieve-card" data-category="provinsi">
                    <div class="achieve-medal medal-gold">🎬</div>
                    <span class="badge badge-gold" style="width:fit-content; margin-bottom:0.6rem;">Juara 1 Festival Film Pendek</span>
                    <h3 class="achieve-title">Festival Sinema Vokasi Pelajar</h3>
                    <div class="achieve-winner">Klub DKV & Multimedia Ciomas</div>
                    <div class="achieve-contest">Sinematografi & Tata Artistik Terbaik se-Jabodetabek</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ekstrakurikuler Showcase -->
    <section class="section" id="ekstrakurikuler">
        <div class="container">
            <div class="section-title-wrap">
                <span class="section-tag">Pengembangan Karakter</span>
                <h2 class="section-title">Ekstrakurikuler Unggulan <span class="text-gradient">SMKNK 1 CIOMAS</span></h2>
                <p class="section-subtitle">Wadah pengembangan minat bakat mulai dari kejuaraan esport, pecinta alam, seni bela diri, hingga komunitas coding.</p>
            </div>

            <div class="filter-tabs">
                <button class="filter-btn ekskul-filter-btn active" data-filter="all">Semua Ekskul</button>
                <button class="filter-btn ekskul-filter-btn" data-filter="tech">Teknologi & Coding</button>
                <button class="filter-btn ekskul-filter-btn" data-filter="sports">Olahraga & Bela Diri</button>
                <button class="filter-btn ekskul-filter-btn" data-filter="arts">Seni & Kreatif</button>
                <button class="filter-btn ekskul-filter-btn" data-filter="lead">Paskibra & Pramuka</button>
            </div>

            <div class="ekskul-grid">
                <div class="card ekskul-card" data-category="tech">
                    <div class="ekskul-icon-wrap">🎮</div>
                    <div class="ekskul-info">
                        <h4>Game Dev & Esport Academy</h4>
                        <p>Komunitas pembuatan gim indie di Unity/Godot serta turnamen esport antar sekolah.</p>
                        <div class="ekskul-meta">
                            <span>📅 Rabu & Sabtu</span> &bull; <span>📍 Lab PPLG</span>
                        </div>
                    </div>
                </div>

                <div class="card ekskul-card" data-category="lead">
                    <div class="ekskul-icon-wrap">💂‍♂️</div>
                    <div class="ekskul-info">
                        <h4>Paskibra Pasukan Garuda Ciomas</h4>
                        <p>Pembinaan kedisiplinan dan baris-berbaris yang rutin mengukir juara di tingkat Jabodetabek.</p>
                        <div class="ekskul-meta">
                            <span>📅 Selasa & Jumat</span> &bull; <span>📍 Lapangan Utama</span>
                        </div>
                    </div>
                </div>

                <div class="card ekskul-card" data-category="sports">
                    <div class="ekskul-icon-wrap">⚽</div>
                    <div class="ekskul-info">
                        <h4>Futsal & Sepakbola SMKN 1 Ciomas</h4>
                        <p>Klub futsal berprestasi di Liga Pelajar Bogor dengan pembina pelatih berlisensi PSSI.</p>
                        <div class="ekskul-meta">
                            <span>📅 Senin & Kamis</span> &bull; <span>📍 Lapangan Futsal</span>
                        </div>
                    </div>
                </div>

                <div class="card ekskul-card" data-category="arts">
                    <div class="ekskul-icon-wrap">📸</div>
                    <div class="ekskul-info">
                        <h4>Fotografi & Jurnalistik Ciomas Lens</h4>
                        <p>Eksplorasi teknik fotografi jalanan, liputan berita sekolah, dan pameran karya visual.</p>
                        <div class="ekskul-meta">
                            <span>📅 Sabtu Pagi</span> &bull; <span>📍 Studio DKV</span>
                        </div>
                    </div>
                </div>

                <div class="card ekskul-card" data-category="lead">
                    <div class="ekskul-icon-wrap">🏕️</div>
                    <div class="ekskul-info">
                        <h4>Pramuka Gugus Depan Ciomas</h4>
                        <p>Pengembangan kepemimpinan kepanduan, bertahan hidup di alam terbuka, dan bakti sosial.</p>
                        <div class="ekskul-meta">
                            <span>📅 Jumat Sore</span> &bull; <span>📍 Sanggar Pramuka</span>
                        </div>
                    </div>
                </div>

                <div class="card ekskul-card" data-category="sports">
                    <div class="ekskul-icon-wrap">🥋</div>
                    <div class="ekskul-info">
                        <h4>Pencak Silat & Taekwondo</h4>
                        <p>Pelestarian seni bela diri tradisional nusantara dan persiapan atlet Popda Jawa Barat.</p>
                        <div class="ekskul-meta">
                            <span>📅 Rabu & Minggu</span> &bull; <span>📍 Aula Serbaguna</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Agenda & Kalender Kegiatan -->
    <section class="section" id="agenda" style="background: var(--bg-surface);">
        <div class="container">
            <div class="section-title-wrap">
                <span class="section-tag">Agenda Sekolah</span>
                <h2 class="section-title">Kalender Acara & <span class="text-gradient">Job Fair SMKNK 1 CIOMAS</span></h2>
                <p class="section-subtitle">Simak jadwal pendaftaran PPDB, pameran karya vokasi, uji kompetensi keahlian, dan rekrutmen kerja industri.</p>
            </div>

            <div class="events-grid">
                <!-- Event 1 -->
                <div class="card event-card">
                    <div class="event-date-badge">
                        <span class="event-date-day">20</span>
                        <span class="event-date-month">Okt</span>
                    </div>
                    <div class="event-content">
                        <h4>Pameran Karya Animasi & Expo Vokasi 2026</h4>
                        <p>Pemutaran perdana film animasi karya siswa kelas XII dan pameran prototipe aplikasi software.</p>
                        <button class="btn btn-outline btn-sm" onclick="showToast('Undangan Expo Vokasi SMKNK 1 CIOMAS tercatat!')">Lihat Jadwal Pameran</button>
                    </div>
                </div>

                <!-- Event 2 -->
                <div class="card event-card" style="background:var(--bg-card);">
                    <div class="event-date-badge" style="background:var(--gradient-gold);">
                        <span class="event-date-day">05</span>
                        <span class="event-date-month">Nov</span>
                    </div>
                    <div class="event-content">
                        <h4>Job Fair & Rekrutmen Kerja Akbar BKK</h4>
                        <p>Temu langsung dengan 40+ perusahaan mitra DUDI untuk penyerapan kerja lulusan dan kelas magang.</p>
                        <button class="btn btn-outline btn-sm" onclick="showToast('Pendaftaran Job Fair BKK tersimpan!')">Daftar Job Fair</button>
                    </div>
                </div>

                <!-- Event 3 -->
                <div class="card event-card">
                    <div class="event-date-badge" style="background:var(--gradient-emerald);">
                        <span class="event-date-day">18</span>
                        <span class="event-date-month">Nov</span>
                    </div>
                    <div class="event-content">
                        <h4>Uji Kompetensi Keahlian (UKK) & Asesmen BNSP</h4>
                        <p>Uji sertifikasi keahlian siswa tingkat akhir oleh Lembaga Sertifikasi Profesi (LSP) P1.</p>
                        <button class="btn btn-outline btn-sm" onclick="showToast('Panduan UKK terunduh!')">Unduh Panduan UKK</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni & Alumni Sukses -->
    <section class="section" id="testimoni">
        <div class="container">
            <div class="section-title-wrap">
                <span class="section-tag">Kiprah Alumni</span>
                <h2 class="section-title">Cerita Sukses Alumni <span class="text-gradient">SMKNK 1 CIOMAS</span></h2>
                <p class="section-subtitle">Bukti nyata keunggulan lulusan yang kini berkarier di studio animasi kenamaan, perusahaan teknologi, dan wirausaha mandiri.</p>
            </div>

            <div class="curriculum-grid">
                <div class="card">
                    <div style="font-size:2.5rem; color:var(--primary); line-height:1; margin-bottom:0.8rem;">“</div>
                    <p style="font-size:0.92rem; line-height:1.7; margin-bottom:1.5rem;">
                        "Belajar di jurusan Animasi SMKNK 1 Ciomas adalah keputusan terbaik saya. Portofolio tugas Teaching Factory membuat saya langsung direkrut studio animasi ternama sebelum ijazah keluar!"
                    </p>
                    <div style="display:flex; align-items:center; gap:0.9rem;">
                        <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?auto=format&fit=crop&w=150&q=80" alt="Alumni Animasi" style="width:48px; height:48px; border-radius:50%; object-fit:cover;">
                        <div>
                            <div style="font-weight:700; font-size:0.95rem;">Fajar Nugraha</div>
                            <div style="font-size:0.8rem; color:var(--text-dim);">Alumni Animasi 2023 &bull; 3D Character Modeler</div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div style="font-size:2.5rem; color:#10b981; line-height:1; margin-bottom:0.8rem;">“</div>
                    <p style="font-size:0.92rem; line-height:1.7; margin-bottom:1.5rem;">
                        "Koneksi BKK SMKNK 1 Ciomas sangat luar biasa. Setelah magang 6 bulan, saya langsung ditawari kontrak kerja di industri otomotif dengan jenjang karir yang sangat menjanjikan."
                    </p>
                    <div style="display:flex; align-items:center; gap:0.9rem;">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=150&q=80" alt="Alumni Otomotif" style="width:48px; height:48px; border-radius:50%; object-fit:cover;">
                        <div>
                            <div style="font-weight:700; font-size:0.95rem;">Bayu Setiawan</div>
                            <div style="font-size:0.8rem; color:var(--text-dim);">Alumni TKRO 2022 &bull; Lead Service Technician</div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div style="font-size:2.5rem; color:#fbbf24; line-height:1; margin-bottom:0.8rem;">“</div>
                    <p style="font-size:0.92rem; line-height:1.7; margin-bottom:1.5rem;">
                        "Selain siap kerja, bekal kurikulum PPLG di SMKNK 1 Ciomas memudahkan saya lolos seleksi masuk perguruan tinggi negeri (PTN) di bidang Teknik Informatika dengan predikat memuaskan."
                    </p>
                    <div style="display:flex; align-items:center; gap:0.9rem;">
                        <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=150&q=80" alt="Alumni PPLG" style="width:48px; height:48px; border-radius:50%; object-fit:cover;">
                        <div>
                            <div style="font-weight:700; font-size:0.95rem;">Siti Amelia</div>
                            <div style="font-size:0.8rem; color:var(--text-dim);">Alumni PPLG 2024 &bull; Mahasiswi IT & Freelance Web Dev</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak & Lokasi Kampus SMKNK 1 CIOMAS -->
    <section class="section" id="kontak" style="background: var(--bg-surface);">
        <div class="container">
            <div class="calc-container" style="grid-template-columns: 1fr 1fr; align-items: center;">
                <div>
                    <span class="section-tag">Kunjungi Kampus Kami</span>
                    <h2 style="font-size:2.2rem; margin-bottom:1rem;">Pintu Kami Terbuka di Ciomas</h2>
                    <p style="color:var(--text-muted); margin-bottom:2rem; font-size:0.95rem; line-height:1.7;">
                        Silakan datang langsung ke kampus SMKNK 1 CIOMAS untuk konsultasi pendaftaran PPDB, melihat studio animasi, bengkel otomotif, atau kerja sama kemitraan industri.
                    </p>

                    <div style="display:flex; flex-direction:column; gap:1.2rem; margin-bottom:2rem;">
                        <div style="display:flex; gap:1rem; align-items:center;">
                            <div style="width:42px; height:42px; border-radius:10px; background:rgba(99, 102, 241, 0.15); color:var(--primary); display:flex; align-items:center; justify-content:center;">📍</div>
                            <div>
                                <div style="font-weight:700; font-size:0.95rem;">Alamat Kampus SMKNK 1 CIOMAS:</div>
                                <div style="font-size:0.85rem; color:var(--text-dim);">Jl. Raya Laladon No. 1, Ciomas, Kabupaten Bogor, Jawa Barat 16610</div>
                            </div>
                        </div>

                        <div style="display:flex; gap:1rem; align-items:center;">
                            <div style="width:42px; height:42px; border-radius:10px; background:rgba(16, 185, 129, 0.15); color:#10b981; display:flex; align-items:center; justify-content:center;">📞</div>
                            <div>
                                <div style="font-weight:700; font-size:0.95rem;">Hotline WhatsApp PPDB SMKNK 1 CIOMAS:</div>
                                <div style="font-size:0.85rem; color:var(--text-dim);">0812-3456-7890 / (0251) 863-7890</div>
                            </div>
                        </div>

                        <div style="display:flex; gap:1rem; align-items:center;">
                            <div style="width:42px; height:42px; border-radius:10px; background:rgba(245, 158, 11, 0.15); color:#fbbf24; display:flex; align-items:center; justify-content:center;">✉️</div>
                            <div>
                                <div style="font-weight:700; font-size:0.95rem;">Email Resmi Sekolah:</div>
                                <div style="font-size:0.85rem; color:var(--text-dim);">info@smkn1ciomas.sch.id / ppdb@smkn1ciomas.sch.id</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Form Pesan Cepat -->
                <div class="card" style="padding:2.2rem;">
                    <h3 style="font-size:1.3rem; margin-bottom:0.4rem;">Formulir Tanya Jawab PPDB</h3>
                    <p style="font-size:0.85rem; margin-bottom:1.5rem; color:var(--text-dim);">Tim panitia PPDB SMKNK 1 CIOMAS akan merespons pertanyaan Anda via WhatsApp.</p>

                    <form id="contactQuickForm" onsubmit="event.preventDefault(); showToast('Pesan terkirim ke panitia PPDB SMKNK 1 CIOMAS!'); this.reset();">
                        <div class="form-group">
                            <label class="form-label">Nama Calon Siswa / Orang Tua</label>
                            <input type="text" class="form-input" required placeholder="Contoh: Dimas Pratama">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Nomor WhatsApp Aktif</label>
                            <input type="tel" class="form-input" required placeholder="0812-xxxx-xxxx">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Minat Konsentrasi Keahlian</label>
                            <select class="form-select">
                                <option>Animasi 3D & 2D</option>
                                <option>Pengembangan Perangkat Lunak & Gim (PPLG)</option>
                                <option>Desain Komunikasi Visual (DKV)</option>
                                <option>Teknik Kendaraan Ringan Otomotif (TKRO)</option>
                                <option>Teknik Pengelasan & Fabrikasi Logam</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Pertanyaan Anda</label>
                            <textarea class="form-textarea" rows="3" placeholder="Tanyakan seputar jalur masuk, beasiswa KIP, atau syarat pendaftaran..."></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" style="width:100%;">
                            Kirim Pertanyaan ke Panitia PPDB
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-wrap">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <div class="brand-logo" style="margin-bottom:1rem;">
                        <div class="brand-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                            </svg>
                        </div>
                        <div class="brand-title">
                            <span class="brand-name">SMKNK 1 <span class="text-gradient">CIOMAS</span></span>
                            <span class="brand-tag">SMK Pusat Keunggulan & Creative Tech</span>
                        </div>
                    </div>
                    <p style="font-size:0.88rem; line-height:1.7; margin-bottom:1.5rem; max-width:320px;">
                        Sekolah Menengah Kejuruan Negeri terdepan di Kabupaten Bogor, Jawa Barat. Membina generasi terampil, inovatif, berdaya saing global, dan berakhlak mulia.
                    </p>
                    <div style="display:flex; gap:0.6rem;">
                        <span class="badge badge-emerald">Akreditasi A Unggul</span>
                        <span class="badge badge-blue">SMK PK Kemendikbud</span>
                        <span class="badge badge-gold">LSP-P1 BNSP</span>
                    </div>
                </div>

                <div class="footer-col">
                    <h4>Program Keahlian</h4>
                    <ul class="footer-links">
                        <li><a href="#jurusan">Animasi 3D & 2D</a></li>
                        <li><a href="#jurusan">PPLG (Software & Game)</a></li>
                        <li><a href="#jurusan">Desain Komunikasi Visual (DKV)</a></li>
                        <li><a href="#jurusan">Teknik Kendaraan Ringan (TKRO)</a></li>
                        <li><a href="#jurusan">Teknik Pengelasan (Welding)</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Informasi PPDB 2026</h4>
                    <ul class="footer-links">
                        <li><a href="#" class="btn-open-ppdb">Pendaftaran Online</a></li>
                        <li><a href="#kalkulator">Syarat Jalur KIP / Afirmasi</a></li>
                        <li><a href="#kalkulator">Jalur Prestasi Rapor & Lomba</a></li>
                        <li><a href="#tur-kampus">Tur Fasilitas & Bengkel</a></li>
                        <li><a href="#agenda">Jadwal Verifikasi Berkas</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Layanan & Portal</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('admin.dashboard') }}" target="_blank" style="color:var(--primary); font-weight:700;">🔐 Dashboard Admin PPDB</a></li>
                        <li><a href="#portal-siswa">Portal SIAKAD & E-Rapor</a></li>
                        <li><a href="#agenda">Bursa Kerja Khusus (BKK)</a></li>
                        <li><a href="#agenda">Teaching Factory (TEFA)</a></li>
                        <li><a href="#kontak">Layanan Pengaduan Masyarakat</a></li>
                        <li><a href="#kontak">Kebijakan Privasi Siswa</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <div>
                    &copy; 2026 SMKNK 1 CIOMAS (Kabupaten Bogor). Seluruh Hak Cipta Dilindungi.
                </div>
                <div style="display:flex; gap:1.5rem;">
                    <a href="#" style="color:var(--text-dim);">Vokasi Kuat, Menguatkan Indonesia</a>
                    <a href="#" style="color:var(--text-dim);">Kebijakan Data</a>
                    <a href="#" style="color:var(--text-dim);">Peta Lokasi</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- PPDB Multi-Step Registration Wizard Modal -->
    <div class="modal-overlay" id="ppdbModal" role="dialog" aria-modal="true" aria-labelledby="ppdbModalTitle">
        <div class="modal-window">
            <div class="modal-header">
                <div>
                    <h3 id="ppdbModalTitle" style="font-size:1.25rem;">Formulir PPDB Online SMKNK 1 CIOMAS 2026</h3>
                    <p style="font-size:0.8rem; color:var(--text-dim);">Tahun Ajaran 2026/2027 &bull; Gelombang 1</p>
                </div>
                <button class="modal-close-btn" id="ppdbCloseBtn" aria-label="Tutup Modal">&times;</button>
            </div>

            <div class="modal-body">
                <!-- Step Indicator -->
                <div class="step-progress-bar">
                    <div class="step-bullet active">1</div>
                    <div class="step-bullet">2</div>
                    <div class="step-bullet">3</div>
                    <div class="step-bullet">4</div>
                </div>

                <!-- Step 1: Student Personal Info -->
                <div class="ppdb-step" data-step="1">
                    <h4 style="margin-bottom:1rem;">Langkah 1: Identitas Calon Peserta Didik</h4>
                    <div class="form-group">
                        <label class="form-label">Nama Lengkap Siswa (Sesuai Ijazah/Akta) *</label>
                        <input type="text" id="ppdbStudentName" class="form-input" placeholder="Masukkan nama lengkap siswa" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Nomor Induk Siswa Nasional (NISN) *</label>
                        <input type="number" id="ppdbStudentNisn" class="form-input" placeholder="Contoh: 0081234567" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Asal SMP / MTs *</label>
                        <input type="text" id="ppdbSchoolOrigin" class="form-input" placeholder="Contoh: SMPN 1 Ciomas / MTs Bogor">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Jalur Pendaftaran</label>
                        <select id="ppdbSelectPathwayType" class="form-select">
                            <option>Jalur Prestasi Rapor Unggulan</option>
                            <option>Jalur Prestasi Kejuaraan Lomba (Akademik / Non-Akademik)</option>
                            <option>Jalur Afirmasi / KETM (KIP / KKS / PKH)</option>
                            <option>Jalur Zonasi Jarak & Prioritas Terdekat</option>
                        </select>
                    </div>
                </div>

                <!-- Step 2: Academic Program Choice -->
                <div class="ppdb-step" data-step="2" style="display:none;">
                    <h4 style="margin-bottom:1rem;">Langkah 2: Pemilihan Konsentrasi Keahlian</h4>
                    <div class="form-group">
                        <label class="form-label">Pilihan Program Keahlian Utama *</label>
                        <select id="ppdbSelectPathway" class="form-select">
                            <option value="Animasi 3D & 2D">Animasi 3D & 2D (Pusat Keunggulan)</option>
                            <option value="PPLG / RPL">Pengembangan Perangkat Lunak & Gim (PPLG)</option>
                            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual (DKV)</option>
                            <option value="Teknik Otomotif TKRO">Teknik Kendaraan Ringan Otomotif (TKRO)</option>
                            <option value="Teknik Pengelasan">Teknik Pengelasan & Fabrikasi Logam</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Pilihan Keahlian Cadangan (Alternatif ke-2)</label>
                        <select class="form-select">
                            <option>Pengembangan Perangkat Lunak & Gim (PPLG)</option>
                            <option>Desain Komunikasi Visual (DKV)</option>
                            <option>Animasi 3D & 2D</option>
                            <option>Teknik Kendaraan Ringan Otomotif (TKRO)</option>
                            <option>Teknik Pengelasan & Fabrikasi Logam</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Rata-rata Nilai Rapor SMP Semester 1-5</label>
                        <input type="number" id="ppdbRaporScore" class="form-input" placeholder="Contoh: 88.5" min="70" max="100" value="88.5">
                    </div>
                </div>

                <!-- Step 3: Parents & Contacts -->
                <div class="ppdb-step" data-step="3" style="display:none;">
                    <h4 style="margin-bottom:1rem;">Langkah 3: Data Orang Tua / Wali & Kontak</h4>
                    <div class="form-group">
                        <label class="form-label">Nama Orang Tua / Wali Murid *</label>
                        <input type="text" id="ppdbParentName" class="form-input" placeholder="Nama Ayah / Ibu / Wali">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Nomor WhatsApp Aktif *</label>
                        <input type="tel" id="ppdbPhone" class="form-input" placeholder="Contoh: 081298765432">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Alamat Rumah di Ciomas / Bogor *</label>
                        <input type="text" id="ppdbAddress" class="form-input" placeholder="Kelurahan, Kecamatan, Kab. Bogor">
                    </div>
                </div>

                <!-- Step 4: Official Registration Slip Result -->
                <div class="ppdb-step" data-step="4" style="display:none;">
                    <div class="ticket-box">
                        <div style="display:inline-flex; padding:0.3rem 0.8rem; background:#10b981; color:#fff; border-radius:9999px; font-size:0.75rem; font-weight:700; margin-bottom:0.8rem;">
                            BUKTI REGISTRASI PPDB SMKNK 1 CIOMAS
                        </div>
                        <h3 style="font-size:1.4rem; margin-bottom:0.2rem;" id="ticketStudentName">Aura Cinta Lestari</h3>
                        <p style="font-size:0.85rem; color:var(--text-muted); margin-bottom:0.8rem;">Konsentrasi: <strong id="ticketTrackName" style="color:var(--primary);">Animasi 3D</strong></p>

                        <div style="font-family:var(--font-heading); font-size:1.6rem; font-weight:800; letter-spacing:0.05em; color:var(--primary);" id="ticketRegNumber">
                            CIOMAS-2026-8819
                        </div>

                        <div class="barcode-strip"></div>

                        <p style="font-size:0.8rem; color:var(--text-dim); margin-top:0.6rem;">
                            Jadwal Tes Minat Bakat & Wawancara: <strong>Sabtu, 24 Oktober 2026 - Pk 08.00 WIB</strong><br>
                            Lokasi: <strong>Kampus SMKNK 1 CIOMAS, Jl. Raya Laladon No. 1</strong>. Tunjukkan kartu ini kepada panitia registrasi.
                        </p>

                        <div style="margin-top:1.5rem; display:flex; justify-content:center; gap:0.8rem;">
                            <button class="btn btn-primary" id="ppdbPrintTicketBtn">
                                🖨️ Cetak / Unduh Kartu Bukti PPDB
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Wizard Actions -->
                <div style="display:flex; justify-content:space-between; margin-top:1.8rem; padding-top:1rem; border-top:1px solid var(--border-subtle);">
                    <button class="btn btn-secondary" id="ppdbPrevBtn" style="display:none;">Kembali</button>
                    <button class="btn btn-primary" id="ppdbNextBtn" style="margin-left:auto;">Lanjutkan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Command Palette / Quick Search Modal (Ctrl + K) -->
    <div class="search-modal" id="searchModal" role="dialog" aria-modal="true" aria-label="Pencarian Cepat SMKNK 1 CIOMAS">
        <div class="search-box-wrap">
            <div class="search-input-header">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color:var(--primary); flex-shrink:0;">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                <input type="text" id="searchPaletteInput" class="search-main-input" placeholder="Cari: Animasi, PPLG, DKV, Otomotif, PPDB, BKK, Beasiswa..." autocomplete="off">
                <span class="badge" style="background:var(--border-subtle); color:var(--text-dim);">ESC</span>
            </div>

            <div class="search-results-list" id="searchResultsList">
                <!-- Search items rendered dynamically by JS -->
            </div>
        </div>
    </div>

    <!-- SMKNK 1 CIOMAS AI Floating Chatbot Assistant -->
    <button class="chatbot-trigger" id="chatTrigger" title="Tanya Asisten AI SMKNK 1 CIOMAS" aria-label="Buka Chat Asisten">
        <span class="chat-unread-badge" id="chatUnreadBadge">1</span>
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
        </svg>
    </button>

    <div class="chat-window" id="chatWindow" role="dialog" aria-modal="true" aria-labelledby="chatBotName">
        <div class="chat-header">
            <div class="chat-header-info">
                <div class="chat-bot-avatar">🤖</div>
                <div>
                    <h4 id="chatBotName" style="font-size:0.95rem; line-height:1.1;">Asisten AI SMKNK 1 CIOMAS</h4>
                    <span style="font-size:0.72rem; color:#10b981; font-weight:600;">● Online 24 Jam</span>
                </div>
            </div>
            <button class="modal-close-btn" id="chatCloseBtn" aria-label="Tutup Chat">&times;</button>
        </div>

        <div class="chat-messages" id="chatMessages">
            <div class="chat-msg bot">
                Halo! 👋 Saya Asisten AI SMKNK 1 CIOMAS. Ada yang bisa saya bantu seputar PPDB 2026, jurusan Animasi, PPLG, DKV, Otomotif, atau beasiswa KIP?
            </div>
        </div>

        <!-- Quick Questions Chips -->
        <div class="chat-quick-replies">
            <button class="quick-reply-chip">Jurusan di SMKNK 1 Ciomas?</button>
            <button class="quick-reply-chip">Biaya & Jalur KIP?</button>
            <button class="quick-reply-chip">Jadwal PPDB 2026?</button>
            <button class="quick-reply-chip">Penyaluran Kerja BKK?</button>
        </div>

        <div class="chat-footer">
            <input type="text" id="chatInput" class="chat-input" placeholder="Tulis pertanyaan Anda..." autocomplete="off">
            <button class="icon-btn" id="chatSendBtn" style="background:var(--primary); color:#fff; border:none; width:36px; height:36px;" aria-label="Kirim Pesan">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                    <line x1="22" y1="2" x2="11" y2="13"></line>
                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                </svg>
            </button>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/school-app.js') }}"></script>
</body>
</html>
