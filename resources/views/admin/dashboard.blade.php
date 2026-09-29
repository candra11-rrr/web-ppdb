@extends('admin.layout')

@section('title', 'Dashboard Utama')
@section('page_title', 'Ringkasan PPDB 2026/2027')

@section('content')

    <!-- Metrics Stat Cards -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-card-header">
                <span class="stat-card-label">Total Pendaftar Masuk</span>
                <div class="stat-card-icon" style="background:rgba(99, 102, 241, 0.15); color:var(--primary);">👥</div>
            </div>
            <div class="stat-card-val text-gradient">{{ $totalApplicants }}</div>
            <div style="font-size:0.75rem; color:#10b981; font-weight:600;">● Gelombang 1 Aktif</div>
        </div>

        <div class="stat-card">
            <div class="stat-card-header">
                <span class="stat-card-label">Berkas Terverifikasi</span>
                <div class="stat-card-icon" style="background:rgba(56, 189, 248, 0.15); color:#38bdf8;">✓</div>
            </div>
            <div class="stat-card-val" style="color:#38bdf8;">{{ $verifiedCount }}</div>
            <div style="font-size:0.75rem; color:var(--admin-text-dim);">Siap Ikut Tes Minat Bakat</div>
        </div>

        <div class="stat-card">
            <div class="stat-card-header">
                <span class="stat-card-label">Siswa Diterima</span>
                <div class="stat-card-icon" style="background:rgba(16, 185, 129, 0.15); color:#10b981;">🎓</div>
            </div>
            <div class="stat-card-val" style="color:#10b981;">{{ $acceptedCount }}</div>
            <div style="font-size:0.75rem; color:var(--admin-text-dim);">Lolos Seleksi Final</div>
        </div>

        <div class="stat-card">
            <div class="stat-card-header">
                <span class="stat-card-label">Jalur KIP / Afirmasi</span>
                <div class="stat-card-icon" style="background:rgba(245, 158, 11, 0.15); color:#fbbf24;">💳</div>
            </div>
            <div class="stat-card-val" style="color:#fbbf24;">{{ $kipCount }}</div>
            <div style="font-size:0.75rem; color:var(--admin-text-dim);">Subsidi Bantuan Peralatan</div>
        </div>
    </div>

    <div style="display:grid; grid-template-columns: 1.15fr 0.85fr; gap:2rem; margin-bottom:2rem;">
        <!-- Kuota 5 Jurusan SMKNK 1 CIOMAS -->
        <div class="admin-card" id="kuota-jurusan" style="margin-bottom:0;">
            <div class="admin-card-header">
                <div>
                    <h3 class="admin-card-title">Keterisian Kuota 5 Program Keahlian</h3>
                    <p style="font-size:0.8rem; color:var(--admin-text-dim);">Daya tampung total: 468 siswa baru</p>
                </div>
                <span class="badge" style="background:rgba(99,102,241,0.15); color:var(--primary); font-weight:700; padding:0.3rem 0.7rem; border-radius:9999px;">Tahun Ajaran 2026/2027</span>
            </div>

            <div class="quota-list">
                @foreach($majorStats as $name => $stat)
                    <div>
                        <div class="quota-item-header">
                            <div>
                                <span>{{ $name }}</span>
                                <span style="font-size:0.75rem; color:var(--admin-text-dim); margin-left:0.5rem;">(Sisa: {{ $stat['remaining'] }} kursi)</span>
                            </div>
                            <span style="font-weight:700;">{{ $stat['count'] }} / {{ $stat['quota'] }} ({{ $stat['percentage'] }}%)</span>
                        </div>
                        <div class="quota-progress-track">
                            <div class="quota-progress-fill" style="width: {{ max(4, $stat['percentage']) }}%; background: linear-gradient(90deg, #6366f1 0%, #38bdf8 100%);"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Quick Status Overview & Gelombang -->
        <div class="admin-card" style="margin-bottom:0; display:flex; flex-direction:column; justify-content:space-between;">
            <div>
                <div class="admin-card-header">
                    <h3 class="admin-card-title">Status Gelombang PPDB</h3>
                    <span class="status-pill status-accepted">● Gelombang 1 Buka</span>
                </div>

                <div style="display:flex; flex-direction:column; gap:1rem; margin-bottom:1.5rem;">
                    <div style="background:var(--admin-bg-surface); border:1px solid var(--admin-border); border-radius:var(--radius-md); padding:1rem;">
                        <div style="font-size:0.78rem; color:var(--admin-text-dim); font-weight:700; text-transform:uppercase;">Jadwal Seleksi Gelombang 1</div>
                        <div style="font-size:0.95rem; font-weight:700; margin-top:0.2rem;">Sabtu, 24 Oktober 2026</div>
                        <div style="font-size:0.8rem; color:var(--admin-text-muted);">Tes Wawancara Minat Bakat di Kampus Laladon</div>
                    </div>

                    <div style="background:var(--admin-bg-surface); border:1px solid var(--admin-border); border-radius:var(--radius-md); padding:1rem;">
                        <div style="font-size:0.78rem; color:var(--admin-text-dim); font-weight:700; text-transform:uppercase;">Status Antrean Verifikasi</div>
                        <div style="font-size:1.1rem; font-weight:800; color:#fbbf24; margin-top:0.2rem;">{{ $pendingCount }} Berkas Menunggu Verifikasi</div>
                        <div style="font-size:0.8rem; color:var(--admin-text-muted);">Silakan periksa fotokopi rapor dan kartu keluarga pendaftar.</div>
                    </div>
                </div>
            </div>

            <a href="{{ route('admin.pendaftar', ['status' => 'pending']) }}" class="btn btn-primary" style="width:100%;">
                Verifikasi {{ $pendingCount }} Berkas Tertunda &rarr;
            </a>
        </div>
    </div>

    <!-- Recent Applicants Table -->
    <div class="admin-card">
        <div class="admin-card-header">
            <div>
                <h3 class="admin-card-title">Pendaftar Terbaru (Live Submissions)</h3>
                <p style="font-size:0.8rem; color:var(--admin-text-dim);">Daftar calon siswa yang baru mendaftar secara online</p>
            </div>
            <a href="{{ route('admin.pendaftar') }}" class="btn btn-secondary btn-sm">Lihat Semua Data ({{ $totalApplicants }}) &rarr;</a>
        </div>

        <div class="table-responsive">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>No. Registrasi</th>
                        <th>Nama Calon Siswa</th>
                        <th>Asal Sekolah</th>
                        <th>Program Keahlian</th>
                        <th>Nilai Rapor</th>
                        <th>Status</th>
                        <th>Aksi Cepat</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($recentApplicants as $app)
                        <tr>
                            <td>
                                <strong style="color:var(--primary); font-family:var(--font-heading);">{{ $app->registration_number }}</strong>
                            </td>
                            <td>
                                <div style="font-weight:700;">{{ $app->full_name }}</div>
                                <div style="font-size:0.75rem; color:var(--admin-text-dim);">NISN: {{ $app->nisn ?? '-' }}</div>
                            </td>
                            <td>{{ $app->school_origin }}</td>
                            <td>
                                <span style="font-weight:600;">{{ $app->major }}</span>
                                <div style="font-size:0.72rem; color:var(--admin-text-dim);">{{ $app->pathway_type }}</div>
                            </td>
                            <td>
                                <strong style="font-size:0.95rem;">{{ number_format($app->rapor_score, 1) }}</strong>
                            </td>
                            <td>
                                @if($app->status === 'accepted')
                                    <span class="status-pill status-accepted">✓ Diterima</span>
                                @elseif($app->status === 'verified')
                                    <span class="status-pill status-verified">● Terverifikasi</span>
                                @elseif($app->status === 'pending')
                                    <span class="status-pill status-pending">⏱ Menunggu</span>
                                @else
                                    <span class="status-pill status-rejected">✕ Ditolak</span>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('admin.pendaftar.status', $app->id) }}" method="POST" style="display:inline-flex; gap:0.4rem;">
                                    @csrf
                                    @if($app->status !== 'accepted')
                                        <button type="submit" name="status" value="accepted" class="btn btn-sm" style="background:#10b981; color:#fff; padding:0.25rem 0.5rem;" title="Terima Siswa">Terima</button>
                                    @endif
                                    @if($app->status !== 'verified')
                                        <button type="submit" name="status" value="verified" class="btn btn-sm" style="background:#0284c7; color:#fff; padding:0.25rem 0.5rem;" title="Verifikasi Berkas">Verif</button>
                                    @endif
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" style="text-align:center; padding:2rem; color:var(--admin-text-dim);">
                                Belum ada data pendaftar.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
