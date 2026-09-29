<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PpdbRegistration;

class PpdbSeeder extends Seeder
{
    public function run(): void
    {
        $samples = [
            [
                'registration_number' => 'CIOMAS-2026-8819',
                'full_name' => 'Aura Cinta Lestari',
                'nisn' => '0089123401',
                'school_origin' => 'SMP Negeri 1 Ciomas',
                'pathway_type' => 'Jalur Prestasi Rapor Unggulan',
                'major' => 'Animasi 3D & 2D',
                'rapor_score' => 94.80,
                'parent_name' => 'Hendra Lestari',
                'phone' => '081298765431',
                'address' => 'Jl. Ciomas Permai Blok B2 No. 12, Bogor',
                'status' => 'accepted',
                'admin_notes' => 'Portofolio gambar 3D sangat baik, berkas lengkap',
            ],
            [
                'registration_number' => 'CIOMAS-2026-8820',
                'full_name' => 'Muhammad Farhan Pratama',
                'nisn' => '0078129042',
                'school_origin' => 'SMP Negeri 2 Dramaga',
                'pathway_type' => 'Jalur Prestasi Kejuaraan Lomba',
                'major' => 'PPLG / RPL',
                'rapor_score' => 95.20,
                'parent_name' => 'Budi Pratama',
                'phone' => '081388776655',
                'address' => 'Komplek Laladon Indah No. 45, Bogor',
                'status' => 'verified',
                'admin_notes' => 'Juara 2 Web Design tingkat kota, berkas valid',
            ],
            [
                'registration_number' => 'CIOMAS-2026-8821',
                'full_name' => 'Nathania Clarissa Putri',
                'nisn' => '0098124089',
                'school_origin' => 'SMP Negeri 3 Kota Bogor',
                'pathway_type' => 'Jalur Prestasi Rapor Unggulan',
                'major' => 'Desain Komunikasi Visual',
                'rapor_score' => 93.50,
                'parent_name' => 'Agus Santoso',
                'phone' => '085712348901',
                'address' => 'Jl. Raya Ciomas No. 89, Bogor',
                'status' => 'accepted',
                'admin_notes' => 'Lolos wawancara minat bakat desain',
            ],
            [
                'registration_number' => 'CIOMAS-2026-8822',
                'full_name' => 'Rizky Alamsyah Pratama',
                'nisn' => '0085432190',
                'school_origin' => 'SMP PGRI Ciomas',
                'pathway_type' => 'Jalur Afirmasi / KETM (KIP / KKS)',
                'major' => 'Teknik Kendaraan Ringan Otomotif',
                'rapor_score' => 88.00,
                'parent_name' => 'Samsudin',
                'phone' => '089677889900',
                'address' => 'Kp. Laladon Sukaresmi RT 03/05, Ciomas',
                'status' => 'verified',
                'admin_notes' => 'Pemegang KIP aktif, berhak subsidi wearpack',
            ],
            [
                'registration_number' => 'CIOMAS-2026-8823',
                'full_name' => 'Dimas Arya Permana',
                'nisn' => '0087654321',
                'school_origin' => 'MTs Negeri 1 Bogor',
                'pathway_type' => 'Jalur Zonasi Jarak & Prioritas',
                'major' => 'Teknik Pengelasan',
                'rapor_score' => 86.40,
                'parent_name' => 'Joko Permana',
                'phone' => '081234509876',
                'address' => 'Jl. Kreteg Kidul RT 02/01, Ciomas',
                'status' => 'pending',
                'admin_notes' => 'Menunggu verifikasi fisik fotokopi KK',
            ],
            [
                'registration_number' => 'CIOMAS-2026-8824',
                'full_name' => 'Salsabila Nadhira',
                'nisn' => '0091234567',
                'school_origin' => 'SMP IT Al-Madinah',
                'pathway_type' => 'Jalur Prestasi Rapor Unggulan',
                'major' => 'Animasi 3D & 2D',
                'rapor_score' => 96.00,
                'parent_name' => 'Ir. Ridwan Kamil',
                'phone' => '081199887766',
                'address' => 'Vila Ciomas Indah Blok F1, Bogor',
                'status' => 'accepted',
                'admin_notes' => 'Rapor konsisten ranking 1 di SMP asal',
            ],
            [
                'registration_number' => 'CIOMAS-2026-8825',
                'full_name' => 'Bagus Wicaksono',
                'nisn' => '0089876543',
                'school_origin' => 'SMP Negeri 1 Ciampea',
                'pathway_type' => 'Jalur Afirmasi / KETM (KIP / KKS)',
                'major' => 'PPLG / RPL',
                'rapor_score' => 91.20,
                'parent_name' => 'Haryanto',
                'phone' => '087812345678',
                'address' => 'Jl. Raya Dramaga KM 7, Bogor',
                'status' => 'verified',
                'admin_notes' => 'Surat KIP terverifikasi DTKS Kemensos',
            ],
            [
                'registration_number' => 'CIOMAS-2026-8826',
                'full_name' => 'Kevin Maulana',
                'nisn' => '0095556677',
                'school_origin' => 'SMP Negeri 14 Bogor',
                'pathway_type' => 'Jalur Prestasi Kejuaraan Lomba',
                'major' => 'Teknik Kendaraan Ringan Otomotif',
                'rapor_score' => 87.50,
                'parent_name' => 'Dedi Suhendar',
                'phone' => '085811223344',
                'address' => 'Jl. Sindang Barang No. 102, Bogor',
                'status' => 'pending',
                'admin_notes' => 'Sertifikat lomba robotik kota sedang diverifikasi',
            ],
        ];

        foreach ($samples as $sample) {
            PpdbRegistration::updateOrCreate(
                ['registration_number' => $sample['registration_number']],
                $sample
            );
        }
    }
}
