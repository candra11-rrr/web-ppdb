@extends('admin.layout')

@section('title', 'Data Pendaftar PPDB')
@section('page_title', 'Kelola Data Pendaftar PPDB')

@section('content')

    <div class="admin-card">
        <!-- Filter Bar -->
        <form method="GET" action="{{ route('admin.pendaftar') }}" class="filter-bar">
            <input type="text" name="search" value="{{ request('search') }}" class="form-input" style="flex-grow:1; min-width:220px;" placeholder="Cari Nama, NISN, No. Registrasi, atau Asal SMP...">

            <select name="major" class="form-select">
                <option value="all">Semua Program Keahlian</option>
                <option value="Animasi" {{ request('major') === 'Animasi' ? 'selected' : '' }}>Animasi 3D & 2D</option>
                <option value="PPLG" {{ request('major') === 'PPLG' ? 'selected' : '' }}>PPLG / RPL</option>
                <option value="Desain" {{ request('major') === 'Desain' ? 'selected' : '' }}>Desain Komunikasi Visual (DKV)</option>
                <option value="Otomotif" {{ request('major') === 'Otomotif' ? 'selected' : '' }}>TKRO Otomotif</option>
                <option value="Pengelasan" {{ request('major') === 'Pengelasan' ? 'selected' : '' }}>Teknik Pengelasan</option>
            </select>

            <select name="status" class="form-select">
                <option value="all">Semua Status</option>
                <option value="pending" {{ request('status') === 'pending' ? 'selected' : '' }}>Menunggu Verifikasi</option>
                <option value="verified" {{ request('status') === 'verified' ? 'selected' : '' }}>Terverifikasi</option>
                <option value="accepted" {{ request('status') === 'accepted' ? 'selected' : '' }}>Diterima</option>
                <option value="rejected" {{ request('status') === 'rejected' ? 'selected' : '' }}>Ditolak</option>
            </select>

            <button type="submit" class="btn btn-primary btn-sm">Filter</button>
            <a href="{{ route('admin.pendaftar') }}" class="btn btn-secondary btn-sm">Reset</a>
            <a href="{{ route('admin.pendaftar.export') }}" class="btn btn-secondary btn-sm" style="margin-left:auto;">📥 Download CSV</a>
        </form>

        <!-- Applicants Table -->
        <div class="table-responsive">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>No. Registrasi</th>
                        <th>Nama & NISN</th>
                        <th>Asal SMP</th>
                        <th>Keahlian & Jalur</th>
                        <th>Rata-rata Rapor</th>
                        <th>Kontak Orang Tua</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($applicants as $app)
                        <tr>
                            <td>
                                <strong style="color:var(--primary); font-family:var(--font-heading);">{{ $app->registration_number }}</strong>
                                <div style="font-size:0.72rem; color:var(--admin-text-dim);">{{ $app->created_at->format('d/m/Y H:i') }}</div>
                            </td>
                            <td>
                                <div style="font-weight:700;">{{ $app->full_name }}</div>
                                <div style="font-size:0.75rem; color:var(--admin-text-dim);">NISN: {{ $app->nisn ?? '-' }}</div>
                            </td>
                            <td>{{ $app->school_origin }}</td>
                            <td>
                                <div style="font-weight:600;">{{ $app->major }}</div>
                                <div style="font-size:0.72rem; color:var(--admin-text-dim);">{{ $app->pathway_type }}</div>
                            </td>
                            <td>
                                <strong style="font-size:1.05rem; font-family:var(--font-heading);">{{ number_format($app->rapor_score, 1) }}</strong>
                            </td>
                            <td>
                                <div>{{ $app->parent_name ?? '-' }}</div>
                                @if($app->phone)
                                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $app->phone) }}" target="_blank" style="font-size:0.75rem; color:#10b981; font-weight:600;">
                                        WhatsApp: {{ $app->phone }}
                                    </a>
                                @endif
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
                                <div style="display:flex; gap:0.4rem; align-items:center;">
                                    <!-- Status update dropdown form -->
                                    <form action="{{ route('admin.pendaftar.status', $app->id) }}" method="POST" style="display:inline-flex;">
                                        @csrf
                                        <select name="status" class="form-select" onchange="this.form.submit()" style="padding:0.25rem 0.5rem; font-size:0.75rem;">
                                            <option value="pending" {{ $app->status === 'pending' ? 'selected' : '' }}>Menunggu</option>
                                            <option value="verified" {{ $app->status === 'verified' ? 'selected' : '' }}>Terverifikasi</option>
                                            <option value="accepted" {{ $app->status === 'accepted' ? 'selected' : '' }}>Terima Siswa</option>
                                            <option value="rejected" {{ $app->status === 'rejected' ? 'selected' : '' }}>Tolak</option>
                                        </select>
                                    </form>

                                    <!-- Delete form -->
                                    <form action="{{ route('admin.pendaftar.destroy', $app->id) }}" method="POST" onsubmit="return confirm('Hapus data pendaftar ini?');" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm" style="background:transparent; color:#f43f5e; padding:0.25rem 0.5rem;" title="Hapus Data">
                                            🗑️
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" style="text-align:center; padding:3rem; color:var(--admin-text-dim);">
                                Tidak ditemukan data pendaftar yang sesuai kriteria pencarian.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div style="margin-top:1.5rem;">
            {{ $applicants->links() }}
        </div>
    </div>

@endsection
