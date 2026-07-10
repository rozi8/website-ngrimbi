<?php

namespace Database\Seeders;

use App\Models\AgendaEvent;
use App\Models\Announcement;
use App\Models\EmergencyVehicle;
use App\Models\Listing;
use App\Models\News;
use App\Models\PpidDocument;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        News::firstOrCreate([
            'slug' => 'panen-raya-jagung',
        ], [
            'title' => 'Panen Raya Jagung Desa Ngrimbi Capai Rekor Produksi',
            'category' => 'Pertanian',
            'excerpt' => 'Kabar baik dari sektor pertanian desa.',
            'body' => 'Desa Ngrimbi berhasil mencatatkan panen jagung paling tinggi di musim ini, berkat sinergi petani dan dukungan program pertanian desa.',
            'image_url' => 'https://images.unsplash.com/photo-1551754655-cd27e38d2076?auto=format&fit=crop&w=1300&q=80',
            'published_at' => now()->subDays(2),
        ]);

        Announcement::firstOrCreate([
            'title' => 'Libur Pelayanan Kantor Desa pada Hari Raya',
        ], [
            'excerpt' => 'Pelayanan kantor desa libur 1-2 Juli untuk Hari Raya.',
            'body' => 'Pelayanan administratif di Balai Desa Ngrimbi libur selama Hari Raya. Aktivitas normal kembali pada tanggal 3 Juli.',
            'published_at' => now()->subDays(1),
        ]);

        AgendaEvent::firstOrCreate([
            'title' => 'Musrenbangdes Semester II',
        ], [
            'location' => 'Balai Desa',
            'event_date' => now()->addDays(7)->toDateString(),
            'time' => '09.00 WIB - Selesai',
            'description' => 'Musyawarah Perencanaan Pembangunan Desa semester kedua bersama perwakilan warga dan perangkat desa.',
        ]);

        PpidDocument::firstOrCreate([
            'title' => 'Profil & Struktur Organisasi Desa',
        ], [
            'category' => 'berkala',
            'description' => 'Dokumen profil dan struktur organisasi Pemerintah Desa Ngrimbi.',
            'status' => 'Tersedia',
        ]);

        Listing::firstOrCreate([
            'type' => 'umkm',
            'name' => 'UMKM Peyek Layyunda',
        ], [
            'category' => 'Kuliner',
            'description' => 'Pemilik: Ibu Layyunda - Rempeyek kacang, peyek udang, peyek teri.',
            'contact' => '0812-3456-7890',
        ]);

        Listing::firstOrCreate([
            'type' => 'tourism',
            'name' => 'Candi Rimbi',
        ], [
            'category' => 'Sejarah',
            'description' => 'Cagar budaya nasional dengan relief peninggalan Kerajaan Majapahit.',
            'image_url' => 'https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=600&q=80',
            'location' => 'Dusun Rimbi',
        ]);

        EmergencyVehicle::firstOrCreate([
            'name' => 'Mobil Siaga Desa',
        ], [
            'status' => 'Siap Dinas',
            'phone' => '(0321) 123-456',
            'notes' => 'Unit siap melayani keadaan darurat di seluruh wilayah Desa Ngrimbi.',
            'availability' => true,
        ]);
    }
}
