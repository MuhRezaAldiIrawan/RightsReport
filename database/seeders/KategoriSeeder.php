<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;
use Carbon\Carbon;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentTimestamp = Carbon::now();

        $kategori = [
            [
                'kategori' => 'Kekerasan',
                'deskripsi' => 'Pelanggaran HAM terhadap kekerasan merujuk pada tindakan yang melanggar hak asasi manusia seseorang dengan menggunakan kekerasan atau ancaman kekerasan. Ini mencakup situasi di mana kekerasan fisik, psikologis, atau seksual diterapkan secara sewenang-wenang terhadap individu atau kelompok tanpa memperhatikan prinsip-prinsip dasar kemanusiaan.',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'kategori' => 'Bullying',
                'deskripsi' => 'Bullying adalah bentuk perilaku yang melibatkan penggunaan kekuatan, intimidasi, atau kekerasan oleh satu individu atau sekelompok individu terhadap orang lain yang lebih lemah atau rentan',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'kategori' => 'Diskriminasi',
                'deskripsi' => 'Termasuk diskriminasi berdasarkan ras, agama, jenis kelamin, orientasi seksual, atau disabilitas dalam kebijakan kampus, proses penerimaan mahasiswa baru, pengakuan organisasi mahasiswa, atau perlakuan di dalam lingkungan kampus.',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ], 
            [
                'kategori' => 'Korupsi ',
                'deskripsi' => 'Korupsi di ranah lingkup kampus merujuk pada praktik-praktik korupsi yang terjadi di institusi pendidikan tinggi atau lingkungan kampus. Korupsi dalam konteks ini dapat melibatkan berbagai tindakan seperti penyuapan, pemerasan, penggelapan dana, nepotisme, atau penyalahgunaan kekuasaan untuk keuntungan pribadi atau kelompok tertentu.',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'kategori' => 'Pembatasan Kebebasan',
                'deskripsi' => 'Termasuk pelarangan atau pembatasan terhadap kegiatan organisasi mahasiswa, pembubaran paksa terhadap demonstrasi atau pertemuan mahasiswa, atau tindakan represif terhadap kegiatan mahasiswa yang melibatkan kebebasan berserikat dan berkumpul.',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ], 
        ];
        Kategori::insert($kategori);
        
    }
}
