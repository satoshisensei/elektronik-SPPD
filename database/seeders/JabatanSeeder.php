<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jabatan::create([
            'nama' => 'Kepala Dinas',
        ]);

        Jabatan::create([
            'nama' => 'Sekretaris',
        ]);

        Jabatan::create([
            'nama' => 'Sub Bagian Umum dan Kepegawaian',
        ]);

        Jabatan::create([
            'nama' => 'Sub Bagian Program dan Keuangan',
        ]);

        Jabatan::create([
            'nama' => 'Kabid. Layanan Automasi dan Kerjasama Perpustakaan'
        ]);

        Jabatan::create([
            'nama' => 'Kabid. Pengembangan Koleksi, Pengolahan dan Konservasi Bahan Perpustakaan'
        ]);

        Jabatan::create([
            'nama' => 'Kabid. Pengembangan Perpustakaan dan Pembudayaan Kegemaran Membaca'
        ]);

        Jabatan::create([
            'nama' => 'Kasi. Layanan Perpustakaan'
        ]);

        Jabatan::create([
            'nama' => 'Kasi. Otomasi Perpustakaan dan Alih Media'
        ]);

        Jabatan::create([
            'nama' => 'Kasi. Kerjasama dan Promosi Perpustakaan'
        ]);

        Jabatan::create([
            'nama' => 'Kasi. Pengembangan Koleksi'
        ]);

        Jabatan::create([
            'nama' => 'Kasi. Pengolahan Bahan Perpustakaan'
        ]);

        Jabatan::create([
            'nama' => 'Kasi. Konservasi'
        ]);

        Jabatan::create([
            'nama' => 'Kasi. Pembinaan dan Pembudayaan Kegemaran Membaca'
        ]);

        Jabatan::create([
            'nama' => 'Kasi. Pembinaan dan Pengembangan Tenaga Perpustakaan'
        ]);

        Jabatan::create([
            'nama' => 'Kasi. Pengembangan dan Pembudayaan Membaca'
        ]);

        Jabatan::create([
            'nama' => 'Staff. Layanan Perpustakaan'
        ]);

        Jabatan::create([
            'nama' => 'Staff. Otomasi Perpustakaan dan Alih Media'
        ]);

        Jabatan::create([
            'nama' => 'Staff. Kerjasama dan Promosi Perpustakaan'
        ]);

        Jabatan::create([
            'nama' => 'Staff. Pengembangan Koleksi'
        ]);

        Jabatan::create([
            'nama' => 'Staff. Pengolahan Bahan Perpustakaan'
        ]);

        Jabatan::create([
            'nama' => 'Staff. Konservasi'
        ]);

        Jabatan::create([
            'nama' => 'Staff. Pembinaan dan Pembudayaan Kegemaran Membaca'
        ]);

        Jabatan::create([
            'nama' => 'Staff. Pembinaan dan Pengembangan Tenaga Perpustakaan'
        ]);

        Jabatan::create([
            'nama' => 'Staff. Pengembangan dan Pembudayaan Membaca'
        ]);
    }
}
