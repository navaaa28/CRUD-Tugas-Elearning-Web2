<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswas = [
            [
                'nim' => '2021001',
                'nama' => 'Ahmad Rizki',
                'jurusan' => 'Teknik Informatika',
                'alamat' => 'Jl. Sudirman No. 123, Jakarta Pusat',
                'email' => 'ahmad.rizki@email.com',
                'telepon' => '08123456789'
            ],
            [
                'nim' => '2021002',
                'nama' => 'Siti Nurhaliza',
                'jurusan' => 'Sistem Informasi',
                'alamat' => 'Jl. Thamrin No. 45, Jakarta Selatan',
                'email' => 'siti.nurhaliza@email.com',
                'telepon' => '08123456790'
            ],
            [
                'nim' => '2021003',
                'nama' => 'Budi Santoso',
                'jurusan' => 'Teknik Komputer',
                'alamat' => 'Jl. Gatot Subroto No. 67, Jakarta Barat',
                'email' => 'budi.santoso@email.com',
                'telepon' => '08123456791'
            ],
            [
                'nim' => '2021004',
                'nama' => 'Dewi Sartika',
                'jurusan' => 'Manajemen Informatika',
                'alamat' => 'Jl. Hayam Wuruk No. 89, Jakarta Utara',
                'email' => 'dewi.sartika@email.com',
                'telepon' => '08123456792'
            ],
            [
                'nim' => '2021005',
                'nama' => 'Rudi Hermawan',
                'jurusan' => 'Teknik Elektro',
                'alamat' => 'Jl. Asia Afrika No. 12, Bandung',
                'email' => 'rudi.hermawan@email.com',
                'telepon' => '08123456793'
            ]
        ];

        foreach ($mahasiswas as $mahasiswa) {
            Mahasiswa::create($mahasiswa);
        }
    }
}
