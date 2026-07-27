<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MuridSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('murid')->insert([
        [
            'nama' => 'Andi',
            'umur' => 20,
            'hadir' => true,
            'alamat' => 'Bandung',
            'gender' => 'Laki-laki',
            'kelas' => 'XI RPL 1',
            'created_at' => now(),
        ],[
            'nama' => 'Budi',
            'umur' => 21,
            'hadir' => true,
            'alamat' => 'subang',
            'gender' => 'Laki-laki',
            'kelas' => 'XI RPL 1',
            'created_at' => now(),
        ],[
            'nama' => 'Cici',
            'umur' => 19,
            'hadir' => true,
            'alamat' => 'sukabumi',
            'gender' => 'Perempuan',
            'kelas' => 'XI RPL 1',
            'created_at' => now(),
        ]
        ]);

    }
}
