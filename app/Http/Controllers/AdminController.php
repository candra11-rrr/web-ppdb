<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PpdbRegistration;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalApplicants = PpdbRegistration::count();
        $verifiedCount = PpdbRegistration::where('status', 'verified')->count();
        $acceptedCount = PpdbRegistration::where('status', 'accepted')->count();
        $pendingCount = PpdbRegistration::where('status', 'pending')->count();
        $rejectedCount = PpdbRegistration::where('status', 'rejected')->count();

        $kipCount = PpdbRegistration::where('pathway_type', 'like', '%KIP%')
            ->orWhere('pathway_type', 'like', '%Afirmasi%')
            ->count();

        // Major quotas & counts
        $majors = [
            'Animasi 3D & 2D' => ['quota' => 108, 'badge' => 'gold'],
            'PPLG / RPL' => ['quota' => 108, 'badge' => 'blue'],
            'Desain Komunikasi Visual' => ['quota' => 72, 'badge' => 'emerald'],
            'Teknik Kendaraan Ringan Otomotif' => ['quota' => 108, 'badge' => 'cyan'],
            'Teknik Pengelasan' => ['quota' => 72, 'badge' => 'rose'],
        ];

        $majorStats = [];
        foreach ($majors as $name => $meta) {
            $count = PpdbRegistration::where('major', 'like', "%{$name}%")->count();
            $percentage = $meta['quota'] > 0 ? min(100, round(($count / $meta['quota']) * 100, 1)) : 0;
            $majorStats[$name] = [
                'count' => $count,
                'quota' => $meta['quota'],
                'remaining' => max(0, $meta['quota'] - $count),
                'percentage' => $percentage,
                'badge' => $meta['badge'],
            ];
        }

        $recentApplicants = PpdbRegistration::orderBy('created_at', 'desc')->take(8)->get();

        return view('admin.dashboard', compact(
            'totalApplicants',
            'verifiedCount',
            'acceptedCount',
            'pendingCount',
            'rejectedCount',
            'kipCount',
            'majorStats',
            'recentApplicants'
        ));
    }

    public function liveStats()
    {
        $total = PpdbRegistration::count();
        $pending = PpdbRegistration::where('status', 'pending')->count();
        $verified = PpdbRegistration::where('status', 'verified')->count();
        $accepted = PpdbRegistration::where('status', 'accepted')->count();
        $latest = PpdbRegistration::orderBy('id', 'desc')->first();

        return response()->json([
            'total' => $total,
            'pending' => $pending,
            'verified' => $verified,
            'accepted' => $accepted,
            'latest' => $latest ? [
                'id' => $latest->id,
                'registration_number' => $latest->registration_number,
                'full_name' => $latest->full_name,
                'nisn' => $latest->nisn,
                'major' => $latest->major,
                'pathway_type' => $latest->pathway_type,
                'school_origin' => $latest->school_origin,
                'rapor_score' => number_format($latest->rapor_score, 1),
                'parent_name' => $latest->parent_name,
                'phone' => $latest->phone,
                'status' => $latest->status,
                'created_at' => $latest->created_at->format('d/m/Y H:i'),
            ] : null,
        ]);
    }

    public function pendaftar(Request $request)
    {
        $query = PpdbRegistration::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('full_name', 'like', "%{$search}%")
                  ->orWhere('registration_number', 'like', "%{$search}%")
                  ->orWhere('nisn', 'like', "%{$search}%")
                  ->orWhere('school_origin', 'like', "%{$search}%");
            });
        }

        if ($request->filled('major') && $request->major !== 'all') {
            $query->where('major', 'like', "%{$request->major}%");
        }

        if ($request->filled('status') && $request->status !== 'all') {
            $query->where('status', $request->status);
        }

        if ($request->filled('pathway') && $request->pathway !== 'all') {
            $query->where('pathway_type', 'like', "%{$request->pathway}%");
        }

        $applicants = $query->orderBy('created_at', 'desc')->paginate(15)->withQueryString();

        return view('admin.pendaftar', compact('applicants'));
    }

    public function updateStatus(Request $request, $id)
    {
        $reg = PpdbRegistration::findOrFail($id);

        $request->validate([
            'status' => 'required|in:pending,verified,accepted,rejected',
            'admin_notes' => 'nullable|string|max:500',
        ]);

        $reg->status = $request->status;
        if ($request->has('admin_notes')) {
            $reg->admin_notes = $request->admin_notes;
        }
        $reg->save();

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Status pendaftar berhasil diperbarui!',
                'data' => $reg,
            ]);
        }

        return redirect()->back()->with('success', 'Status calon siswa ' . $reg->full_name . ' berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $reg = PpdbRegistration::findOrFail($id);
        $name = $reg->full_name;
        $reg->delete();

        return redirect()->back()->with('success', 'Data pendaftaran ' . $name . ' telah dihapus.');
    }

    public function exportCsv()
    {
        $applicants = PpdbRegistration::orderBy('id', 'desc')->get();
        $filename = 'Data_PPDB_SMKNK_1_CIOMAS_' . date('Ymd_His') . '.csv';

        $headers = [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => "attachment; filename=\"{$filename}\"",
            'Pragma' => 'no-cache',
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
            'Expires' => '0',
        ];

        $callback = function () use ($applicants) {
            $file = fopen('php://output', 'w');
            fputs($file, "\xEF\xBB\xBF"); // UTF-8 BOM for Excel

            fputcsv($file, [
                'No',
                'Nomor Registrasi',
                'Nama Lengkap',
                'NISN',
                'Asal Sekolah',
                'Konsentrasi Keahlian',
                'Jalur Masuk',
                'Nilai Rapor',
                'Nama Orang Tua',
                'No WhatsApp',
                'Alamat',
                'Status Verifikasi',
                'Catatan Admin',
                'Tanggal Daftar'
            ]);

            $no = 1;
            foreach ($applicants as $item) {
                fputcsv($file, [
                    $no++,
                    $item->registration_number,
                    $item->full_name,
                    $item->nisn,
                    $item->school_origin,
                    $item->major,
                    $item->pathway_type,
                    $item->rapor_score,
                    $item->parent_name,
                    $item->phone,
                    $item->address,
                    ucfirst($item->status),
                    $item->admin_notes,
                    $item->created_at->format('d/m/Y H:i')
                ]);
            }
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
