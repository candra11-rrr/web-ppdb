/**
 * SMKNK 1 CIOMAS - CORE INTERACTIVE ENGINE
 * Sekolah Menengah Kejuruan Negeri Pusat Keunggulan (Kabupaten Bogor)
 */

document.addEventListener('DOMContentLoaded', () => {
    initTheme();
    initLanguage();
    initVirtualTour();
    initTuitionCalculator();
    initPortalSimulator();
    initFilterTabs();
    initChatbot();
    initSearchPalette();
    initPPDBModal();
    initNavDropdowns();
    initSmoothScroll();
});

/* ==========================================================================
   1. THEME CONTROLLER (Dark / Light Mode)
   ========================================================================== */
function initTheme() {
    const themeToggleBtn = document.getElementById('themeToggleBtn');
    const savedTheme = localStorage.getItem('ciomas_theme') || 'dark';

    setTheme(savedTheme);

    if (themeToggleBtn) {
        themeToggleBtn.addEventListener('click', () => {
            const currentTheme = document.documentElement.getAttribute('data-theme') || 'dark';
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            setTheme(newTheme);
            showToast(`Mode ${newTheme === 'dark' ? 'Gelap' : 'Terang'} diaktifkan`);
        });
    }
}

function setTheme(theme) {
    document.documentElement.setAttribute('data-theme', theme);
    localStorage.setItem('ciomas_theme', theme);
    const themeIcon = document.getElementById('themeIcon');
    if (themeIcon) {
        themeIcon.innerHTML = theme === 'dark'
            ? `<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>`
            : `<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>`;
    }
}

/* ==========================================================================
   2. MULTILINGUAL SWITCHER (ID / EN)
   ========================================================================== */
const langData = {
    id: {
        nav_about: "Keunggulan",
        nav_pathways: "Program Keahlian",
        nav_tour: "Tur Bengkel & Lab",
        nav_portal: "Portal Siswa",
        nav_calc: "Simulasi Biaya & KIP",
        nav_teachers: "Instruktur Ahli",
        nav_achieve: "Prestasi LKS",
        nav_ppdb: "Daftar PPDB",
        hero_tag: "PPDB SMKNK 1 CIOMAS 2026/2027 Telah Dibuka",
        hero_title: "Mencetak Talenta Vokasi Berdaya Saing Global & Siap Kerja",
        hero_desc: "Selamat datang di SMKNK 1 CIOMAS (Kabupaten Bogor). Sekolah Menengah Kejuruan Pusat Keunggulan yang memadukan kurikulum industri, Teaching Factory bertaraf internasional, sertifikasi BNSP, dan penyaluran kerja terpercaya.",
        btn_ppdb: "Daftar PPDB Online",
        btn_tour: "Jelajahi Bengkel & Lab 360°",
        btn_calc: "Simulasi Biaya & KIP"
    },
    en: {
        nav_about: "Excellence",
        nav_pathways: "Majors",
        nav_tour: "Workshop Tour",
        nav_portal: "Student Portal",
        nav_calc: "Tuition & KIP",
        nav_teachers: "Faculty",
        nav_achieve: "Achievements",
        nav_ppdb: "Apply Now",
        hero_tag: "Admissions Open at SMKNK 1 CIOMAS for 2026/2027",
        hero_title: "Developing Globally Competitive & Job-Ready Vocational Talents",
        hero_desc: "Welcome to SMKNK 1 CIOMAS (Bogor Regency). A Vocational Center of Excellence integrating industry curricula, international standard Teaching Factory, BNSP certifications, and top job placements.",
        btn_ppdb: "Apply Online Now",
        btn_tour: "Explore Workshops 360°",
        btn_calc: "Estimate Costs & KIP"
    }
};

let currentLang = 'id';

function initLanguage() {
    const langBtn = document.getElementById('langToggleBtn');
    if (!langBtn) return;

    langBtn.addEventListener('click', () => {
        currentLang = currentLang === 'id' ? 'en' : 'id';
        langBtn.textContent = currentLang.toUpperCase();
        applyLanguage(currentLang);
        showToast(currentLang === 'id' ? "Bahasa diubah ke Indonesia" : "Switched to English");
    });
}

function applyLanguage(lang) {
    document.querySelectorAll('[data-i18n]').forEach(el => {
        const key = el.getAttribute('data-i18n');
        if (langData[lang] && langData[lang][key]) {
            el.textContent = langData[lang][key];
        }
    });
}

/* ==========================================================================
   3. VIRTUAL CAMPUS TOUR INTERACTION (Bengkel & Lab SMKNK 1 CIOMAS)
   ========================================================================== */
const campusSpots = {
    lab: {
        title: "Studio Animasi 3D & Render Farm",
        category: "Pusat Keunggulan Animasi",
        desc: "Dilengkapi 40 workstation GPU NVIDIA RTX, display drawing pen tablet Wacom, dan server render terpusat untuk memproduksi film animasi siswa berstandar bioskop.",
        specs: { capacity: "40 Siswa / Sesi", equipment: "Workstation GPU RTX & Cintiq Pen", supervisor: "Agus Prasetyo, S.Sn., M.Ds." },
        img: "https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=1200&q=80"
    },
    library: {
        title: "Laboratorium PPLG & Cloud Computing",
        category: "Software & Game Engineering",
        desc: "Ruang lab ber-AC dengan koneksi internet gigabit untuk praktik coding frontend, backend Laravel/Python, mobile app, dan pengujian gim digital.",
        specs: { capacity: "42 Siswa / Sesi", equipment: "Core i7 Workstations & Cloud Server", supervisor: "Nurul Hidayati, S.Kom., M.T." },
        img: "https://images.unsplash.com/photo-1521587760476-6c12a4b040da?auto=format&fit=crop&w=1200&q=80"
    },
    science: {
        title: "Studio DKV, Fotografi & Podcast Recording",
        category: "Industri Kreatif Multimedia",
        desc: "Studio kedap suara dengan green screen cyclo wall, lighting profesional, kamera sinema 4K, dan mikrofon broadcast untuk produksi konten komersial.",
        specs: { capacity: "30 Siswa", equipment: "4K Cinema Rig & Rode Podcaster", supervisor: "Dina Oktaviani, S.Ds." },
        img: "https://images.unsplash.com/photo-1514525253161-7a46d19cd819?auto=format&fit=crop&w=1200&q=80"
    },
    sports: {
        title: "Bengkel Otomotif TKRO & Car Lift",
        category: "Teknologi Servis Kendaraan Modern",
        desc: "Bengkel resmi standar ATPM dilengkapi 4 unit hydraulic car lift, engine stand EFI, computerized wheel balancer, dan diagnostic scanner kendaraan.",
        specs: { capacity: "60 Siswa / Shift", equipment: "4 Car Lift, Scanner EFI & Gas Analyzer", supervisor: "Ir. Wahyu Supriyanto, S.Pd." },
        img: "https://images.unsplash.com/photo-1534438327276-14e5300c3a48?auto=format&fit=crop&w=1200&q=80"
    },
    theater: {
        title: "Workshop Pengelasan & Fabrikasi CNC",
        category: "Fabrikasi Logam Industri",
        desc: "Fasilitas bilik las dengan exhaust blower terpadu untuk pengelasan SMAW, GMAW/MIG, GTAW/Argon, dan mesin pemotong CNC plasma otomatis.",
        specs: { capacity: "35 Bilik Las", equipment: "Inverter Digital, Argon TIG, CNC Plasma", supervisor: "Dede Hermawan, S.T." },
        img: "https://images.unsplash.com/photo-1532094349884-543bc11b234d?auto=format&fit=crop&w=1200&q=80"
    },
    dorm: {
        title: "Gedung Pusat Sumber Belajar Digital & BKK",
        category: "Pusat Literasi & Bursa Kerja Khusus",
        desc: "Perpustakaan digital ribuan judul e-book kejuruan, aula seleksi kerja perusahaan mitra, serta ruang konsultasi karir dan psikotes calon lulusan.",
        specs: { capacity: "200 Siswa", equipment: "E-Library Kiosk & Interview Chambers", supervisor: "Dra. Sri Wahyuni, M.M." },
        img: "https://images.unsplash.com/photo-1555854877-bab0e564b8d5?auto=format&fit=crop&w=1200&q=80"
    }
};

function initVirtualTour() {
    const buttons = document.querySelectorAll('.tour-spot-btn');
    const titleEl = document.getElementById('tourSpotTitle');
    const catEl = document.getElementById('tourSpotCategory');
    const descEl = document.getElementById('tourSpotDesc');
    const imgEl = document.getElementById('tourSpotImg');
    const capEl = document.getElementById('tourSpotCap');
    const eqEl = document.getElementById('tourSpotEq');

    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            buttons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const spotKey = btn.getAttribute('data-spot');
            const data = campusSpots[spotKey];
            if (!data) return;

            // Animate transition
            if (imgEl) {
                imgEl.style.opacity = '0.3';
                setTimeout(() => {
                    imgEl.src = data.img;
                    imgEl.style.opacity = '1';
                }, 150);
            }

            if (titleEl) titleEl.textContent = data.title;
            if (catEl) catEl.textContent = data.category;
            if (descEl) descEl.textContent = data.desc;
            if (capEl) capEl.textContent = data.specs.capacity;
            if (eqEl) eqEl.textContent = data.specs.equipment;
        });
    });
}

/* ==========================================================================
   4. TUITION & KIP CALCULATOR (SMKNK 1 CIOMAS)
   ========================================================================== */
function initTuitionCalculator() {
    const pathwayPills = document.querySelectorAll('.calc-chip-pathway');
    const boardingPills = document.querySelectorAll('.calc-chip-boarding');
    const raporSlider = document.getElementById('calcRaporScore');
    const raporValDisplay = document.getElementById('calcRaporVal');
    const achieveSelect = document.getElementById('calcAchieveLevel');

    let baseWearpack = 1450000; // Seragam & Wearpack Praktik
    let baseToolkit = 350000;   // Asuransi & Tool Kit Praktik

    function recalculate() {
        const raporScore = parseInt(raporSlider?.value || 86);
        if (raporValDisplay) raporValDisplay.textContent = raporScore;

        // Selected Status (Reguler vs KIP)
        const isKip = document.querySelector('.calc-chip-boarding.active')?.getAttribute('data-boarding') === 'boarding';

        // Scholarship / KIP Discount
        let discount = 0;
        if (isKip) {
            discount += 650000; // Bantuan KIP Afirmasi
        }

        if (raporScore >= 92) {
            discount += 500000; // Beasiswa Nilai Rapor Unggul
        } else if (raporScore >= 85) {
            discount += 250000;
        }

        const achieveLevel = achieveSelect?.value || 'none';
        if (achieveLevel === 'internasional') {
            discount += 1200000; // Beasiswa Bebas Biaya Perlengkapan
        } else if (achieveLevel === 'nasional') {
            discount += 800000;
        } else if (achieveLevel === 'provinsi') {
            discount += 400000;
        }

        let totalAwal = Math.max(250000, (baseWearpack + baseToolkit) - discount);

        // Update displays
        document.getElementById('displayGedung').textContent = formatRupiah(baseWearpack);
        document.getElementById('displaySPP').textContent = formatRupiah(baseToolkit) + ' / thn';
        document.getElementById('displayDiscount').textContent = '- ' + formatRupiah(discount);
        document.getElementById('displayTotalEstimated').textContent = formatRupiah(totalAwal);
    }

    pathwayPills.forEach(pill => {
        pill.addEventListener('click', () => {
            pathwayPills.forEach(p => p.classList.remove('active'));
            pill.classList.add('active');
            recalculate();
        });
    });

    boardingPills.forEach(pill => {
        pill.addEventListener('click', () => {
            boardingPills.forEach(p => p.classList.remove('active'));
            pill.classList.add('active');
            recalculate();
        });
    });

    if (raporSlider) raporSlider.addEventListener('input', recalculate);
    if (achieveSelect) achieveSelect.addEventListener('change', recalculate);

    recalculate();

    const sendWaBtn = document.getElementById('calcSendWaBtn');
    if (sendWaBtn) {
        sendWaBtn.addEventListener('click', () => {
            const total = document.getElementById('displayTotalEstimated').textContent;
            showToast(`Rincian estimasi biaya SMKNK 1 CIOMAS siap dikonsultasikan via WhatsApp!`);
            window.open(`https://wa.me/6281234567890?text=Halo%20Panitia%20PPDB%20SMKNK%201%20CIOMAS,%20saya%20ingin%20konsultasi%20biaya%20masuk%20dan%20jalur%20KIP:%20${encodeURIComponent(total)}`, '_blank');
        });
    }
}

function formatRupiah(number) {
    return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', maximumFractionDigits: 0 }).format(number);
}

/* ==========================================================================
   5. PORTAL SISWA / E-RAPOR SIMULATOR (SMKNK 1 CIOMAS)
   ========================================================================== */
const studentProfiles = {
    aura: {
        name: "Aura Cinta Lestari",
        nisn: "0089123401",
        grade: "Kelas XI - Animasi 3D & Karakter",
        gpa: "94.8",
        rank: "Tersertifikasi Kompeten",
        attendance: "99.4%",
        conduct: "Nilai: 98 (Sangat Baik)",
        avatar: "https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=200&q=80",
        subjects: [
            { name: "Pemodelan Objek 3D & Digital Sculpting", score: 98, grade: "A+" },
            { name: "Prinsip Dasar Animasi 2D & Storyboarding", score: 96, grade: "A" },
            { name: "Rigging & Animasi Karakter 3D", score: 95, grade: "A" },
            { name: "Produk Kreatif & Kewirausahaan (PKK)", score: 92, grade: "A" },
            { name: "Uji Kompetensi Keahlian (UKK) LSP-P1", score: 97, grade: "A+" }
        ],
        teacherNote: "Siswa memiliki keterampilan animasi 3D karakter yang sangat halus dan disiplin tinggi saat produksi proyek komersial Teaching Factory."
    },
    farhan: {
        name: "Muhammad Farhan Pratama",
        nisn: "0078129042",
        grade: "Kelas XII - PPLG / Software Engineering",
        gpa: "95.2",
        rank: "Tersertifikasi Junior Web Dev",
        attendance: "98.7%",
        conduct: "Nilai: 96 (Sangat Baik)",
        avatar: "https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?auto=format&fit=crop&w=200&q=80",
        subjects: [
            { name: "Pemrograman Web & Perangkat Bergerak", score: 98, grade: "A+" },
            { name: "Basis Data Relasional & Cloud Server", score: 94, grade: "A" },
            { name: "Pemrograman Berorientasi Objek (OOP)", score: 95, grade: "A" },
            { name: "Pengembangan Gim Digital 2D/3D", score: 93, grade: "A" },
            { name: "Praktik Kerja Lapangan (PKL Industri IT)", score: 99, grade: "A+" }
        ],
        teacherNote: "Farhan sukses menyelesaikan sistem e-commerce berskala produksi selama masa magang industri di software house rekanan BKK SMKNK 1 CIOMAS."
    },
    nathania: {
        name: "Nathania Clarissa",
        nisn: "0098124089",
        grade: "Kelas X - Desain Komunikasi Visual (DKV)",
        gpa: "93.5",
        rank: "Tersertifikasi Desain Grafis",
        attendance: "99.1%",
        conduct: "Nilai: 97 (Sangat Baik)",
        avatar: "https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=200&q=80",
        subjects: [
            { name: "Desain Grafis Percetakan & Branding", score: 97, grade: "A+" },
            { name: "Fotografi & Sinematografi Digital", score: 95, grade: "A" },
            { name: "Ilustrasi Digital & Tipografi Visual", score: 94, grade: "A" },
            { name: "Dasar Seni & Komposisi Warna", score: 92, grade: "A" },
            { name: "Kreativitas Studio Podcast Multimedia", score: 96, grade: "A" }
        ],
        teacherNote: "Karya desain logo dan poster Nathania memenangkan Juara 1 Desain Poster Pelajar se-Kabupaten Bogor."
    }
};

function initPortalSimulator() {
    const studentSelect = document.getElementById('portalStudentSelect');
    if (!studentSelect) return;

    function renderStudent(key) {
        const student = studentProfiles[key];
        if (!student) return;

        document.getElementById('portalStudentName').textContent = student.name;
        document.getElementById('portalStudentGrade').textContent = student.grade;
        document.getElementById('portalStudentNisn').textContent = 'NISN: ' + student.nisn;
        document.getElementById('portalStudentGpa').textContent = student.gpa;
        document.getElementById('portalStudentRank').textContent = student.rank;
        document.getElementById('portalStudentAttend').textContent = student.attendance;
        document.getElementById('portalStudentConduct').textContent = student.conduct;
        document.getElementById('portalStudentAvatar').src = student.avatar;
        document.getElementById('portalTeacherNote').textContent = `"${student.teacherNote}"`;

        const tableBody = document.getElementById('portalGradesList');
        if (tableBody) {
            tableBody.innerHTML = student.subjects.map(sub => `
                <tr>
                    <td><strong>${sub.name}</strong></td>
                    <td>
                        <div style="display:flex; align-items:center; gap:0.6rem;">
                            <div style="flex-grow:1; height:6px; background:var(--border-subtle); border-radius:4px; overflow:hidden;">
                                <div style="width:${sub.score}%; height:100%; background:var(--gradient-primary); border-radius:4px;"></div>
                            </div>
                            <span style="font-weight:700; font-size:0.85rem;">${sub.score}</span>
                        </div>
                    </td>
                    <td><span class="score-pill score-a">${sub.grade}</span></td>
                    <td style="color:#10b981; font-weight:600;">Kompeten (Lulus)</td>
                </tr>
            `).join('');
        }
    }

    studentSelect.addEventListener('change', (e) => {
        renderStudent(e.target.value);
        showToast(`Memuat data siswa SMKNK 1 CIOMAS: ${studentProfiles[e.target.value].name}`);
    });

    renderStudent('aura');
}

/* ==========================================================================
   6. FILTER TABS
   ========================================================================== */
function initFilterTabs() {
    setupFilterGroup('.ekskul-filter-btn', '.ekskul-card');
    setupFilterGroup('.teacher-filter-btn', '.teacher-card');
    setupFilterGroup('.achieve-filter-btn', '.achieve-card');
    setupFilterGroup('.event-filter-btn', '.event-card');
}

function setupFilterGroup(btnSelector, itemSelector) {
    const buttons = document.querySelectorAll(btnSelector);
    const items = document.querySelectorAll(itemSelector);

    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            buttons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filterVal = btn.getAttribute('data-filter');

            items.forEach(item => {
                if (filterVal === 'all' || item.getAttribute('data-category') === filterVal) {
                    item.style.display = '';
                    item.style.animation = 'fadeIn 0.3s ease forwards';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
}

/* ==========================================================================
   7. SMKNK 1 CIOMAS AI CHATBOT ASSISTANT
   ========================================================================== */
const botKnowledge = [
    {
        keywords: ['jurusan', 'pilihan', 'keahlian', 'program', 'animasi', 'rpl', 'pplg', 'dkv', 'otomotif', 'las'],
        response: "SMKNK 1 CIOMAS memiliki 5 Program Keahlian Unggulan: (1) Animasi 3D & 2D (Pusat Keunggulan Nasional), (2) Pengembangan Perangkat Lunak & Gim (PPLG / RPL), (3) Desain Komunikasi Visual (DKV), (4) Teknik Kendaraan Ringan Otomotif (TKRO), dan (5) Teknik Pengelasan & Fabrikasi Logam."
    },
    {
        keywords: ['biaya', 'spp', 'gratis', 'kip', 'afirmasi', 'bantuan'],
        response: "Sebagai SMK Negeri, Biaya Operasional Pendidikan (SPP) di SMKNK 1 CIOMAS adalah GRATIS (didukung dana BOS & BOPD Provinsi Jawa Barat). Biaya awal hanya mencakup seragam praktik (wearpack), asuransi keselamatan kerja, dan alat praktik mandiri. Bagi pemegang Kartu Indonesia Pintar (KIP), tersedia subsidi bantuan peralatan!"
    },
    {
        keywords: ['daftar', 'ppdb', 'jadwal', 'gelombang', 'syarat', 'kapan'],
        response: "PPDB SMKNK 1 CIOMAS Tahun Ajaran 2026/2027 Gelombang 1 dibuka mulai sekarang hingga 30 Mei 2026. Jalur masuk meliputi: Jalur Prestasi Rapor, Prestasi Kejuaraan Lomba, Afirmasi KETM/KIP, dan Jalur Zonasi. Anda bisa langsung klik tombol 'Daftar PPDB' di atas!"
    },
    {
        keywords: ['kerja', 'bkk', 'magang', 'pkl', 'lulusan', 'dudi', 'industri'],
        response: "Bursa Kerja Khusus (BKK) SMKNK 1 CIOMAS bekerja sama dengan lebih dari 85 perusahaan industri rekanan di Jabodetabek, Bandung, dan program pemagangan ke Jepang. Lebih dari 96% lulusan kami langsung bekerja, berwirausaha, atau melanjutkan kuliah di PTN ternama."
    },
    {
        keywords: ['lokasi', 'alamat', 'dimana', 'ciomas', 'kontak', 'telepon'],
        response: "Kampus SMKNK 1 CIOMAS beralamat di Jl. Raya Laladon No. 1, Ciomas, Kabupaten Bogor, Jawa Barat (Kode Pos 16610). Hotline WhatsApp resmi: 0812-3456-7890 / Telepon: (0251) 863-7890."
    },
    {
        keywords: ['halo', 'hai', 'pagi', 'siang', 'sore', 'malam'],
        response: "Halo! Selamat datang di SMKNK 1 CIOMAS. Saya Asisten AI siap membantu Anda dengan informasi jurusan, pendaftaran PPDB 2026, beasiswa KIP, dan tur bengkel sekolah!"
    }
];

function initChatbot() {
    const trigger = document.getElementById('chatTrigger');
    const windowEl = document.getElementById('chatWindow');
    const closeBtn = document.getElementById('chatCloseBtn');
    const sendBtn = document.getElementById('chatSendBtn');
    const inputEl = document.getElementById('chatInput');
    const messagesEl = document.getElementById('chatMessages');
    const quickChips = document.querySelectorAll('.quick-reply-chip');
    const unreadBadge = document.getElementById('chatUnreadBadge');

    if (!trigger || !windowEl) return;

    trigger.addEventListener('click', () => {
        windowEl.classList.toggle('active');
        if (unreadBadge) unreadBadge.style.display = 'none';
        if (windowEl.classList.contains('active') && inputEl) {
            inputEl.focus();
        }
    });

    if (closeBtn) {
        closeBtn.addEventListener('click', () => {
            windowEl.classList.remove('active');
        });
    }

    function appendMessage(sender, text) {
        const msgDiv = document.createElement('div');
        msgDiv.className = `chat-msg ${sender}`;
        msgDiv.textContent = text;
        messagesEl.appendChild(msgDiv);
        messagesEl.scrollTop = messagesEl.scrollHeight;
    }

    function handleUserInput(userText) {
        if (!userText.trim()) return;
        appendMessage('user', userText);
        if (inputEl) inputEl.value = '';

        // Bot response
        setTimeout(() => {
            const lower = userText.toLowerCase();
            let matched = botKnowledge.find(item => item.keywords.some(k => lower.includes(k)));

            let botReply = matched
                ? matched.response
                : "Terima kasih atas pertanyaannya! Untuk informasi detail seputar pendaftaran di SMKNK 1 CIOMAS, silakan hubungi Panitia PPDB di WhatsApp: 0812-3456-7890 atau kunjungi langsung Helpdesk PPDB di kampus kami di Laladon, Ciomas.";

            appendMessage('bot', botReply);
        }, 450);
    }

    if (sendBtn && inputEl) {
        sendBtn.addEventListener('click', () => handleUserInput(inputEl.value));
        inputEl.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') handleUserInput(inputEl.value);
        });
    }

    quickChips.forEach(chip => {
        chip.addEventListener('click', () => {
            handleUserInput(chip.textContent);
        });
    });
}

/* ==========================================================================
   8. COMMAND PALETTE & INSTANT SEARCH (Ctrl + K)
   ========================================================================== */
const searchDatabase = [
    { title: "Pendaftaran PPDB Online SMKNK 1 CIOMAS 2026", section: "PPDB", link: "#ppdb", action: "modal_ppdb" },
    { title: "Konsentrasi Keahlian Animasi 3D & 2D", section: "Jurusan", link: "#jurusan" },
    { title: "Konsentrasi PPLG (Pengembangan Perangkat Lunak & Gim)", section: "Jurusan", link: "#jurusan" },
    { title: "Konsentrasi Desain Komunikasi Visual (DKV)", section: "Jurusan", link: "#jurusan" },
    { title: "Teknik Kendaraan Ringan Otomotif (TKRO)", section: "Jurusan", link: "#jurusan" },
    { title: "Teknik Pengelasan & Fabrikasi Logam", section: "Jurusan", link: "#jurusan" },
    { title: "Simulasi Biaya & KIP Afirmasi", section: "Biaya", link: "#kalkulator" },
    { title: "Studio Animasi & Render Farm 4K", section: "Bengkel & Lab", link: "#tur-kampus" },
    { title: "Portal Siswa & Transkrip E-Rapor", section: "Akademik", link: "#portal-siswa" },
    { title: "Prestasi Juara 1 LKS Animasi Nasional", section: "Prestasi", link: "#prestasi" },
    { title: "Bursa Kerja Khusus (BKK) & Rekrutmen Industri", section: "Karir", link: "#agenda" },
    { title: "Lokasi Kampus Laladon No. 1 Ciomas", section: "Kontak", link: "#kontak" }
];

function initSearchPalette() {
    const searchModal = document.getElementById('searchModal');
    const searchTrigger = document.getElementById('searchTriggerBtn');
    const searchInput = document.getElementById('searchPaletteInput');
    const resultsContainer = document.getElementById('searchResultsList');

    if (!searchModal) return;

    function openSearch() {
        searchModal.classList.add('active');
        if (searchInput) {
            searchInput.value = '';
            searchInput.focus();
            renderSearchResults('');
        }
    }

    function closeSearch() {
        searchModal.classList.remove('active');
    }

    if (searchTrigger) searchTrigger.addEventListener('click', openSearch);

    window.addEventListener('keydown', (e) => {
        if ((e.ctrlKey || e.metaKey) && e.key.toLowerCase() === 'k') {
            e.preventDefault();
            if (searchModal.classList.contains('active')) closeSearch();
            else openSearch();
        } else if (e.key === 'Escape' && searchModal.classList.contains('active')) {
            closeSearch();
        }
    });

    searchModal.addEventListener('click', (e) => {
        if (e.target === searchModal) closeSearch();
    });

    function renderSearchResults(query) {
        if (!resultsContainer) return;
        const q = query.toLowerCase().trim();
        const filtered = searchDatabase.filter(item =>
            item.title.toLowerCase().includes(q) || item.section.toLowerCase().includes(q)
        );

        if (filtered.length === 0) {
            resultsContainer.innerHTML = `<div style="padding:1.5rem; text-align:center; color:var(--text-dim); font-size:0.9rem;">Tidak ditemukan hasil untuk "${query}"</div>`;
            return;
        }

        resultsContainer.innerHTML = filtered.map(item => `
            <div class="search-result-item" data-action="${item.action || ''}" data-link="${item.link}">
                <div>
                    <div style="font-weight:600; color:var(--text-main); font-size:0.95rem;">${item.title}</div>
                    <div style="font-size:0.75rem; color:var(--text-dim);">${item.section}</div>
                </div>
                <span style="font-size:0.75rem; color:var(--primary); font-weight:600;">Buka &rarr;</span>
            </div>
        `).join('');

        resultsContainer.querySelectorAll('.search-result-item').forEach(el => {
            el.addEventListener('click', () => {
                closeSearch();
                const action = el.getAttribute('data-action');
                const link = el.getAttribute('data-link');

                if (action === 'modal_ppdb') {
                    openPPDBWizard();
                } else if (link) {
                    const target = document.querySelector(link);
                    if (target) target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    }

    if (searchInput) {
        searchInput.addEventListener('input', (e) => renderSearchResults(e.target.value));
    }
}

/* ==========================================================================
   9. PPDB REGISTRATION WIZARD MODAL (SMKNK 1 CIOMAS)
   ========================================================================== */
function initPPDBModal() {
    const modal = document.getElementById('ppdbModal');
    const openBtns = document.querySelectorAll('.btn-open-ppdb');
    const closeBtn = document.getElementById('ppdbCloseBtn');
    const nextBtn = document.getElementById('ppdbNextBtn');
    const prevBtn = document.getElementById('ppdbPrevBtn');
    const steps = document.querySelectorAll('.ppdb-step');
    let currentStep = 1;

    openBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            openPPDBWizard();
        });
    });

    if (closeBtn) {
        closeBtn.addEventListener('click', () => modal.classList.remove('active'));
    }

    if (modal) {
        modal.addEventListener('click', (e) => {
            if (e.target === modal) modal.classList.remove('active');
        });
    }

    function showStep(step) {
        steps.forEach(s => s.style.display = 'none');
        const target = document.querySelector(`.ppdb-step[data-step="${step}"]`);
        if (target) target.style.display = 'block';

        if (prevBtn) prevBtn.style.display = step > 1 && step < 4 ? 'inline-flex' : 'none';
        if (nextBtn) {
            if (step === 3) {
                nextBtn.textContent = 'Kirim & Terbitkan Bukti PPDB';
            } else if (step === 4) {
                nextBtn.style.display = 'none';
            } else {
                nextBtn.textContent = 'Lanjutkan';
                nextBtn.style.display = 'inline-flex';
            }
        }

        // Update step indicators
        document.querySelectorAll('.step-bullet').forEach((bullet, idx) => {
            if (idx + 1 === step) {
                bullet.classList.add('active');
            } else if (idx + 1 < step) {
                bullet.classList.add('completed');
            } else {
                bullet.classList.remove('active', 'completed');
            }
        });
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            if (currentStep === 1) {
                const nameInput = document.getElementById('ppdbStudentName');
                if (nameInput && !nameInput.value.trim()) {
                    showToast('Harap isi Nama Lengkap Siswa terlebih dahulu!', 'warning');
                    nameInput.focus();
                    return;
                }
            }

            if (currentStep === 3) {
                const sName = document.getElementById('ppdbStudentName')?.value || 'Calon Siswa Vokasi';
                const sNisn = document.getElementById('ppdbStudentNisn')?.value || '';
                const sSchool = document.getElementById('ppdbSchoolOrigin')?.value || 'SMP Asal';
                const sPathway = document.getElementById('ppdbSelectPathwayType')?.value || 'Jalur Prestasi Rapor Unggulan';
                const sMajor = document.getElementById('ppdbSelectPathway')?.value || 'Animasi 3D & 2D';
                const sRapor = parseFloat(document.getElementById('ppdbRaporScore')?.value || 88.5);
                const sParent = document.getElementById('ppdbParentName')?.value || 'Orang Tua / Wali';
                const sPhone = document.getElementById('ppdbPhone')?.value || '081234567890';
                const sAddress = document.getElementById('ppdbAddress')?.value || 'Ciomas, Bogor';

                const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

                nextBtn.disabled = true;
                nextBtn.textContent = '⏳ Menyimpan Pendaftaran...';

                // Send to backend database
                fetch('/ppdb/daftar', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': csrfToken || ''
                    },
                    body: JSON.stringify({
                        full_name: sName,
                        nisn: sNisn,
                        school_origin: sSchool,
                        pathway_type: sPathway,
                        major: sMajor,
                        rapor_score: sRapor,
                        parent_name: sParent,
                        phone: sPhone,
                        address: sAddress
                    })
                })
                .then(res => res.json())
                .then(data => {
                    nextBtn.disabled = false;
                    nextBtn.textContent = 'Lanjutkan';
                    if (data.success && data.data) {
                        document.getElementById('ticketRegNumber').textContent = data.data.registration_number;
                        document.getElementById('ticketStudentName').textContent = data.data.full_name;
                        document.getElementById('ticketTrackName').textContent = data.data.major;
                        showToast(`Pendaftaran Sukses! No: ${data.data.registration_number}. Data langsung masuk ke Admin PPDB.`);
                    }
                    currentStep = 4;
                    showStep(currentStep);
                })
                .catch(() => {
                    nextBtn.disabled = false;
                    nextBtn.textContent = 'Lanjutkan';
                    const randomCode = 'CIOMAS-2026-' + Math.floor(1000 + Math.random() * 9000);
                    document.getElementById('ticketRegNumber').textContent = randomCode;
                    document.getElementById('ticketStudentName').textContent = sName;
                    document.getElementById('ticketTrackName').textContent = sMajor;
                    showToast('Data pendaftaran berhasil diproses.');
                    currentStep = 4;
                    showStep(currentStep);
                });

                return;
            }

            currentStep++;
            showStep(currentStep);
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            if (currentStep > 1) {
                currentStep--;
                showStep(currentStep);
            }
        });
    }

    const printBtn = document.getElementById('ppdbPrintTicketBtn');
    if (printBtn) {
        printBtn.addEventListener('click', () => {
            showToast('Mengunduh kartu bukti pendaftaran SMKNK 1 CIOMAS...');
            window.print();
        });
    }
}

function openPPDBWizard() {
    const modal = document.getElementById('ppdbModal');
    if (modal) {
        modal.classList.add('active');
    }
}

/* ==========================================================================
   10. UTILITIES & TOAST SYSTEM
   ========================================================================== */
function showToast(message, type = 'info') {
    let container = document.getElementById('toastContainer');
    if (!container) {
        container = document.createElement('div');
        container.id = 'toastContainer';
        container.className = 'toast-container';
        document.body.appendChild(container);
    }

    const toast = document.createElement('div');
    toast.className = 'toast';
    toast.innerHTML = `
        <span style="color:${type === 'warning' ? '#f59e0b' : '#6366f1'};">
            ${type === 'warning'
                ? '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>'
                : '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>'}
        </span>
        <span>${message}</span>
    `;

    container.appendChild(toast);

    setTimeout(() => {
        toast.style.opacity = '0';
        toast.style.transform = 'translateX(50px)';
        setTimeout(() => toast.remove(), 300);
    }, 3500);
}

function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#' || targetId === '') return;
            const targetEl = document.querySelector(targetId);
            if (targetEl) {
                e.preventDefault();
                targetEl.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
}

function initNavDropdowns() {
    const dropdowns = document.querySelectorAll('.nav-dropdown, .corner-dropbar');

    dropdowns.forEach(dropdown => {
        const toggle = dropdown.querySelector('.nav-dropdown-toggle, .corner-dropbar-btn');
        if (!toggle) return;

        toggle.addEventListener('click', (e) => {
            e.stopPropagation();
            const isActive = dropdown.classList.contains('active');

            // Close other dropdowns
            dropdowns.forEach(d => {
                if (d !== dropdown) d.classList.remove('active');
            });

            if (isActive) {
                dropdown.classList.remove('active');
            } else {
                dropdown.classList.add('active');
            }
        });

        // Close dropdown when an item is clicked
        dropdown.querySelectorAll('.nav-dropdown-item, .corner-dropbar-item').forEach(item => {
            item.addEventListener('click', () => {
                dropdown.classList.remove('active');
            });
        });
    });

    // Close on outside click
    document.addEventListener('click', (e) => {
        if (!e.target.closest('.nav-dropdown, .corner-dropbar')) {
            dropdowns.forEach(d => d.classList.remove('active'));
        }
    });
}

