<?php

use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawai')->insert([
            'pegawai_nama' => 'Wahyu Hidayat',
            'pegawai_jabatan' => 'Pengangguran',
            'pegawai_umur' => 22,
            'pegawai_alamat' => 'Jalan Kedung Mundu'
        ]);
    }
}
