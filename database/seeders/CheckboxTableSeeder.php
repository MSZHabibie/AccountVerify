<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Checkbox;

class CheckboxTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Checkbox::truncate();

        $checkbox = [
            [
                'category' => 'artis',
                'checkbox' => 'Jumlah Followers Lebih dari 1 Juta',
            ],
            [
                'category' => 'artis',
                'checkbox' => 'Memiliki Centang Biru Pada Salah Satu Akun',
            ],
            [
                'category' => 'artis',
                'checkbox' => 'Memiliki Pengalaman Di Dunia Entertainment',
            ],
            [
                'category' => 'lembaga',
                'checkbox' => 'Memiliki Izin Kelembagaan Pemerintah',
            ],
            [
                'category' => 'lembaga',
                'checkbox' => 'Memiliki Centang Biru Pada Salah Satu Akun',
            ],
            [
                'category' => 'lembaga',
                'checkbox' => 'Memiliki Postingan Kegiatan Pemerintahan',
            ],
            [
                'category' => 'toko',
                'checkbox' => 'Memiliki Surat Izin Edaran  (BPOM/PIRT/Industri/dll)',
            ],
            [
                'category' => 'toko',
                'checkbox' => 'Memiliki Centang Biru Pada Salah Satu Akun',
            ],
            [
                'category' => 'toko',
                'checkbox' => 'Memiliki Riwayat Penjualan yang Baik',
            ]
        ];

        Checkbox::insert($checkbox);
    }
}
