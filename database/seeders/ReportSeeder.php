<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Report;
use Carbon\Carbon;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currentTimestamp = Carbon::now();

        $report = [
            [
                'nama' => 'Milku',
                'email' => 'admin@gmail.com',
                'hp' => '082393169811',
                'jurusan' => 'Teknik Elektro', 
                'prodi' => 'Teknik Komputer dan Jaringan',
                'angkatan' => '2019',
                'kategori_id' => '1',
                'rincian' => 'Saya telah dianiaya oleh senior saya di jurusan. mereka memukul saya di kepala dengan keras hingga kepala saya berdarah dan saya sempat pingsan. tidak hanya memukul , mereka juga terkadang melecehkan saya',
                'bukti' => 'foto',
                'status' => 'new',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'nama' => 'Yusup',
                'email' => 'admin@gmail.com',
                'hp' => '082393169811',
                'jurusan' => 'Teknik Elektro', 
                'prodi' => 'Teknik Komputer dan Jaringan',
                'angkatan' => '2019',
                'kategori_id' => '1',
                'rincian' => 'Saya telah dianiaya oleh senior saya di jurusan. mereka memukul saya di kepala dengan keras hingga kepala saya berdarah dan saya sempat pingsan. tidak hanya memukul , mereka juga terkadang melecehkan saya',
                'bukti' => 'foto',
                'status' => 'proses',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
            [
                'nama' => 'anhar',
                'email' => 'admin@gmail.com',
                'hp' => '082393169811',
                'jurusan' => 'Teknik Elektro', 
                'prodi' => 'Teknik Komputer dan Jaringan',
                'angkatan' => '2019',
                'kategori_id' => '1',
                'rincian' => 'Saya telah dianiaya oleh senior saya di jurusan. mereka memukul saya di kepala dengan keras hingga kepala saya berdarah dan saya sempat pingsan. tidak hanya memukul , mereka juga terkadang melecehkan saya',
                'bukti' => 'foto',
                'status' => 'selesai',
                'created_at' => $currentTimestamp,
                'updated_at' => $currentTimestamp,
            ],
        ];
        Report::insert($report);

    }
}
