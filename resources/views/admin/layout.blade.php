<!DOCTYPE html>
<html lang="id" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Admin') | SMKNK 1 CIOMAS</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Admin Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/admin-dashboard.css') }}">
</head>
<body>

    <!-- Sidebar Navigation -->
    <aside class="admin-sidebar" id="adminSidebar">
        <div class="sidebar-header">
            <div class="sidebar-brand-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                </svg>
            </div>
            <div>
                <div class="sidebar-brand-name">SMKNK 1 CIOMAS</div>
                <div style="font-size:0.72rem; color:var(--admin-text-dim); font-weight:600;">Panel Administrator PPDB</div>
            </div>
        </div>

        <ul class="sidebar-menu">
            <li class="sidebar-label">Menu Utama</li>
            <li>
                <a href="{{ route('admin.dashboard') }}" class="sidebar-link {{ request()->routeIs('admin.dashboard*') ? 'active' : '' }}">
                    <div class="sidebar-link-content">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                        <span>Dashboard</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.pendaftar') }}" class="sidebar-link {{ request()->routeIs('admin.pendaftar*') ? 'active' : '' }}">
                    <div class="sidebar-link-content">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        <span>Data Pendaftar PPDB</span>
                    </div>
                </a>
            </li>

            <li class="sidebar-label">Manajemen Vokasi</li>
            <li>
                <a href="{{ route('admin.dashboard') }}#kuota-jurusan" class="sidebar-link">
                    <div class="sidebar-link-content">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                        <span>Kuota 5 Jurusan</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.pendaftar', ['pathway' => 'KIP']) }}" class="sidebar-link">
                    <div class="sidebar-link-content">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                        <span>Verifikasi KIP & Afirmasi</span>
                    </div>
                </a>
            </li>

            <li class="sidebar-label">Pintasan Publik</li>
            <li>
                <a href="{{ route('home') }}" target="_blank" class="sidebar-link" style="color:#10b981;">
                    <div class="sidebar-link-content">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path><polyline points="15 3 21 3 21 9"></polyline><line x1="10" y1="14" x2="21" y2="3"></line></svg>
                        <span>Buka Website PPDB ↗</span>
                    </div>
                </a>
            </li>
        </ul>

        <div class="sidebar-footer">
            <div style="display:flex; align-items:center; gap:0.75rem;">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=150&q=80" alt="Admin Avatar" class="admin-avatar">
                <div>
                    <div style="font-weight:700; font-size:0.88rem;">Admin Panitia</div>
                    <div style="font-size:0.75rem; color:var(--admin-text-dim);">PPDB SMKNK 1 CIOMAS</div>
                </div>
            </div>
        </div>
    </aside>

    <!-- Main Content Area -->
    <main class="admin-main">
        <!-- Header -->
        <header class="admin-header">
            <div class="header-left">
                <h1 class="page-title">@yield('page_title', 'Dashboard Admin')</h1>
            </div>

            <div class="header-right">
                <!-- Theme Switcher -->
                <button class="btn btn-secondary btn-sm" id="adminThemeToggle" title="Ganti Mode Gelap/Terang">
                    <span id="adminThemeIcon">🌙 Mode Gelap</span>
                </button>

                <!-- Export CSV -->
                <a href="{{ route('admin.pendaftar.export') }}" class="btn btn-secondary btn-sm">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                    <span>Export CSV</span>
                </a>

                <!-- Back to Public Site -->
                <a href="{{ route('home') }}" class="btn btn-primary btn-sm">
                    <span>Lihat Web PPDB</span>
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </a>
            </div>
        </header>

        <!-- Content -->
        <div class="admin-content">
            @if(session('success'))
                <div class="alert alert-success">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"></polyline></svg>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            @yield('content')
        </div>
    </main>

    <script>
        // Simple Admin Theme Toggle
        const themeBtn = document.getElementById('adminThemeToggle');
        const themeIcon = document.getElementById('adminThemeIcon');
        const savedTheme = localStorage.getItem('ciomas_admin_theme') || 'dark';

        document.documentElement.setAttribute('data-theme', savedTheme);
        updateThemeBtn(savedTheme);

        if (themeBtn) {
            themeBtn.addEventListener('click', () => {
                const current = document.documentElement.getAttribute('data-theme') || 'dark';
                const next = current === 'dark' ? 'light' : 'dark';
                document.documentElement.setAttribute('data-theme', next);
                localStorage.setItem('ciomas_admin_theme', next);
                updateThemeBtn(next);
            });
        }

        function updateThemeBtn(theme) {
            if (themeIcon) {
                themeIcon.textContent = theme === 'dark' ? '🌙 Mode Gelap' : '☀️ Mode Terang';
            }
        }

        // Live Real-Time Monitoring & Auto-Sync with PPDB Registrations
        let lastSeenId = 0;
        let isInitialLoad = true;

        function checkLivePPDB() {
            fetch('{{ route('admin.live.stats') }}')
                .then(res => res.json())
                .then(data => {
                    if (!data) return;

                    if (isInitialLoad) {
                        if (data.latest) lastSeenId = data.latest.id;
                        isInitialLoad = false;
                        return;
                    }

                    // New applicant detected
                    if (data.latest && data.latest.id > lastSeenId) {
                        lastSeenId = data.latest.id;

                        // Audio chime alert
                        playNotificationChime();

                        // Show dynamic popup notification
                        showAdminLiveNotification(data.latest);

                        // Update dashboard metrics counter
                        const totalEl = document.querySelector('.stat-card-val.text-gradient');
                        if (totalEl) totalEl.textContent = data.total;

                        // Update sidebar count badge
                        const sidebarBadge = document.querySelector('.admin-nav-item .badge');
                        if (sidebarBadge) {
                            sidebarBadge.textContent = data.pending;
                            sidebarBadge.style.animation = 'pulse 1s infinite';
                        }

                        // Prepend newly registered student to table
                        const tableBody = document.querySelector('.admin-table tbody');
                        if (tableBody) {
                            const newRow = document.createElement('tr');
                            newRow.style.animation = 'fadeIn 0.6s ease';
                            newRow.style.background = 'rgba(99, 102, 241, 0.18)';
                            newRow.style.transition = 'background 2s ease';

                            const isPendaftarPage = window.location.pathname.includes('/pendaftar');
                            if (isPendaftarPage) {
                                const waNum = data.latest.phone ? data.latest.phone.replace(/[^0-9]/g, '') : '';
                                newRow.innerHTML = `
                                    <td>
                                        <strong style="color:var(--primary); font-family:var(--font-heading);">${data.latest.registration_number}</strong>
                                        <div style="font-size:0.72rem; color:#10b981; font-weight:700;">● Baru Saja Masuk!</div>
                                    </td>
                                    <td>
                                        <div style="font-weight:700;">${data.latest.full_name}</div>
                                        <div style="font-size:0.75rem; color:var(--admin-text-dim);">NISN: ${data.latest.nisn || '-'}</div>
                                    </td>
                                    <td>${data.latest.school_origin}</td>
                                    <td>
                                        <div style="font-weight:600;">${data.latest.major}</div>
                                        <div style="font-size:0.72rem; color:var(--admin-text-dim);">${data.latest.pathway_type || ''}</div>
                                    </td>
                                    <td><strong style="font-size:1.05rem; font-family:var(--font-heading);">${data.latest.rapor_score}</strong></td>
                                    <td>
                                        <div>${data.latest.parent_name || '-'}</div>
                                        ${data.latest.phone ? `<a href="https://wa.me/${waNum}" target="_blank" style="font-size:0.75rem; color:#10b981; font-weight:600;">WA: ${data.latest.phone}</a>` : '<span style="font-size:0.75rem; color:var(--admin-text-dim);">-</span>'}
                                    </td>
                                    <td><span class="status-pill status-pending">⏱ Menunggu</span></td>
                                    <td>
                                        <a href="/admin/pendaftar" class="btn btn-sm btn-primary" style="padding:0.25rem 0.5rem; font-size:0.75rem;">Perbarui Data</a>
                                    </td>
                                `;
                            } else {
                                newRow.innerHTML = `
                                    <td>
                                        <strong style="color:var(--primary); font-family:var(--font-heading);">${data.latest.registration_number}</strong>
                                        <div style="font-size:0.72rem; color:#10b981; font-weight:700;">● Baru Saja Masuk!</div>
                                    </td>
                                    <td>
                                        <div style="font-weight:700;">${data.latest.full_name}</div>
                                        <div style="font-size:0.75rem; color:var(--admin-text-dim);">NISN: ${data.latest.nisn || '-'}</div>
                                    </td>
                                    <td>${data.latest.school_origin}</td>
                                    <td>
                                        <div style="font-weight:600;">${data.latest.major}</div>
                                        <div style="font-size:0.72rem; color:var(--admin-text-dim);">${data.latest.pathway_type || ''}</div>
                                    </td>
                                    <td><strong>${data.latest.rapor_score}</strong></td>
                                    <td><span class="status-pill status-pending">⏱ Menunggu</span></td>
                                    <td><a href="{{ route('admin.pendaftar') }}" class="btn btn-sm btn-primary" style="padding:0.25rem 0.5rem;">Lihat</a></td>
                                `;
                            }

                            // Remove empty placeholder row if present
                            const emptyRow = tableBody.querySelector('td[colspan]');
                            if (emptyRow) emptyRow.parentElement.remove();

                            tableBody.insertBefore(newRow, tableBody.firstChild);

                            // Fade out highlight background after 4s
                            setTimeout(() => {
                                newRow.style.background = 'transparent';
                            }, 4000);
                        }
                    }
                })
                .catch(() => {});
        }

        function playNotificationChime() {
            try {
                const AudioCtx = window.AudioContext || window.webkitAudioContext;
                if (!AudioCtx) return;
                const ctx = new AudioCtx();
                const osc = ctx.createOscillator();
                const gain = ctx.createGain();
                osc.type = 'sine';
                osc.frequency.setValueAtTime(587.33, ctx.currentTime); // D5 note
                osc.frequency.exponentialRampToValueAtTime(880, ctx.currentTime + 0.15); // A5 note
                gain.gain.setValueAtTime(0.25, ctx.currentTime);
                gain.gain.exponentialRampToValueAtTime(0.001, ctx.currentTime + 0.4);
                osc.connect(gain);
                gain.connect(ctx.destination);
                osc.start();
                osc.stop(ctx.currentTime + 0.4);
            } catch(e) {}
        }

        function showAdminLiveNotification(applicant) {
            let container = document.getElementById('adminLiveToastContainer');
            if (!container) {
                container = document.createElement('div');
                container.id = 'adminLiveToastContainer';
                container.style.position = 'fixed';
                container.style.top = '85px';
                container.style.right = '2rem';
                container.style.zIndex = '9999';
                container.style.display = 'flex';
                container.style.flexDirection = 'column';
                container.style.gap = '0.75rem';
                document.body.appendChild(container);
            }

            const toast = document.createElement('div');
            toast.style.background = 'var(--admin-bg-surface)';
            toast.style.border = '1.5px solid var(--primary)';
            toast.style.borderRadius = 'var(--radius-md)';
            toast.style.padding = '1rem 1.25rem';
            toast.style.boxShadow = '0 10px 30px rgba(0,0,0,0.5), 0 0 20px rgba(99,102,241,0.3)';
            toast.style.display = 'flex';
            toast.style.alignItems = 'center';
            toast.style.gap = '0.9rem';
            toast.style.fontSize = '0.9rem';
            toast.style.animation = 'toastSlide 0.3s ease-out';
            toast.innerHTML = `
                <div style="width:36px; height:36px; border-radius:50%; background:linear-gradient(135deg, #10b981 0%, #38bdf8 100%); color:#fff; display:flex; align-items:center; justify-content:center; font-size:1.1rem; flex-shrink:0;">
                    🔔
                </div>
                <div>
                    <div style="font-weight:700; color:var(--admin-text-main);">Pendaftar Baru Masuk!</div>
                    <div style="font-size:0.8rem; color:var(--admin-text-muted);">${applicant.full_name} (${applicant.registration_number}) - ${applicant.major}</div>
                </div>
            `;
            container.appendChild(toast);
            setTimeout(() => {
                toast.style.opacity = '0';
                toast.style.transform = 'translateX(50px)';
                setTimeout(() => toast.remove(), 300);
            }, 6000);
        }

        // Live check every 3 seconds
        setInterval(checkLivePPDB, 3000);
        checkLivePPDB();
    </script>
    @yield('scripts')
</body>
</html>
