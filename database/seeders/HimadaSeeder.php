<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Himada;

class HimadaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Himada::insert([
            [
                'id' => 1,
                'name' => 'gist',
                'kepanjangan' => 'Gam Inong Statistik',
                'daerah' => 'Aceh',
                'instagram' => 'https://instagram.com/gistaceh',
                'island_id' => 1,
            ],
            [
                'id' => 2,
                'name' => 'imassu',
                'kepanjangan' => 'Ikatan Mahasiswa Statistik Sumatera Utara',
                'daerah' => 'Sumatera Utara',
                'instagram' => 'https://instagram.com/imassu_stis',
                'island_id' => 1,
            ],
            [
                'id' => 3,
                'name' => 'ikmm',
                'kepanjangan' => 'Ikatan Kekeluargaan Mahasiswa Minang',
                'daerah' => 'Sumatera Barat',
                'instagram' => 'https://instagram.com/ikmmstis',
                'island_id' => 1,
            ],
            [
                'id' => 4,
                'name' => 'ks3',
                'kepanjangan' => 'Kekeluargaan Statistisi Serumpun Sebalai',
                'daerah' => 'Bangka Belitung',
                'instagram' => 'https://instagram.com/ks3_stis',
                'island_id' => 1,
            ],
            [
                'id' => 5,
                'name' => 'himari',
                'kepanjangan' => 'Himpunan Mahasiswa Riau dan Kepulauan Riau',
                'daerah' => 'Riau dan Kepulauan Riau',
                'instagram' => 'https://instagram.com/himari_stis',
                'island_id' => 1,
            ],
            [
                'id' => 6,
                'name' => 'sms',
                'kepanjangan' => 'Silaturahmi Mahasiswa Siginjai',
                'daerah' => 'Jambi',
                'instagram' => 'https://instagram.com/siginjaistisjambi',
                'island_id' => 1,
            ],
            [
                'id' => 7,
                'name' => 'kemass',
                'kepanjangan' => 'Kerukunan Mahasiswa Statistik Sriwijaya',
                'daerah' => 'Sumatera Selatan',
                'instagram' => 'https://instagram.com/kemass_stis',
                'island_id' => 1,
            ],
            [
                'id' => 8,
                'name' => 'himamira',
                'kepanjangan' => 'Himpunan Mahasiswa Bumi Raflesia',
                'daerah' => 'Bengkulu',
                'instagram' => 'https://instagram.com/himamirastis',
                'island_id' => 1,
            ],
            [
                'id' => 9,
                'name' => 'saburai',
                'kepanjangan' => 'Statistisi Sang Bumi Ruwai Jurai',
                'daerah' => 'Lampung',
                'instagram' => 'https://instagram.com/saburaistis',
                'island_id' => 1,
            ],
            [
                'id' => 10,
                'name' => 'mavias',
                'kepanjangan' => 'Mahasiswa Batavia Dan Sekitarnya',
                'daerah' => 'Jakarta, Depok, Tangerang, dan Bekasi',
                'instagram' => 'https://instagram.com/maviosostis',
                'island_id' => 2,
            ],
            [
                'id' => 11,
                'name' => 'kajaba',
                'kepanjangan' => 'Kulawarga Jawa Barat Sareng Banten',
                'daerah' => 'Jawa Barat dan Banten',
                'instagram' => 'https://instagram.com/kajabastis',
                'island_id' => 2,
            ],
            [
                'id' => 12,
                'name' => 'jatengstis',
                'kepanjangan' => 'Himpunan Mahasiswa Daerah Jawa Tengah',
                'daerah' => 'Jawa Tengah',
                'instagram' => 'https://instagram.com/stis.jateng',
                'island_id' => 2,
            ],
            [
                'id' => 13,
                'name' => 'kbmsy',
                'kepanjangan' => 'Keluarga Besar Mahasiswa STIS Yogyakarta',
                'daerah' => 'DI Yogyakarta',
                'instagram' => 'https://instagram.com/kbmsy_stis',
                'island_id' => 2,
            ],
            [
                'id' => 14,
                'name' => 'bekisar',
                'kepanjangan' => 'Himpunan Mahasiswa STIS Daerah Jawa Timur',
                'daerah' => 'Jawa Timur',
                'instagram' => 'https://instagram.com/official.bekisar',
                'island_id' => 2,
            ],
            [
                'id' => 15,
                'name' => 'balistis',
                'kepanjangan' => 'Himpunan Mahasiswa STIS Daerah Bali ',
                'daerah' => 'Bali',
                'instagram' => 'https://instagram.com/balistisjkt',
                'island_id' => 6,
            ],
            [
                'id' => 16,
                'name' => 'rinjani',
                'kepanjangan' => 'Himpunan Mahasiswa STIS Daerah Nusa Tenggara Barat',
                'daerah' => 'Nusa Tenggara Barat',
                'instagram' => 'https://instagram.com/rinjanistis',
                'island_id' => 6,
            ],
            [
                'id' => 17,
                'name' => 'imsak',
                'kepanjangan' => 'Ikatan Mahasiswa STIS Asal Kalimantan',
                'daerah' => 'Kalimantan',
                'instagram' => 'https://instagram.com/imsak_stis',
                'island_id' => 3,
            ],
            [
                'id' => 18,
                'name' => 'imassi',
                'kepanjangan' => 'Ikatan Mahasiswa Statistik Sulawesi',
                'daerah' => 'Sulawesi',
                'instagram' => 'https://instagram.com/imassi_stis',
                'island_id' => 4,
            ],
            [
                'id' => 19,
                'name' => 'imf',
                'kepanjangan' => 'Ikatan Mahasiswa FLOBAMORA Politeknik Statistika STIS',
                'daerah' => 'Nusa Tenggara Timur dan Timor Leste',
                'instagram' => 'https://instagram.com/imfstis',
                'island_id' => 6,
            ],
            [
                'id' => 20,
                'name' => 'mpc',
                'kepanjangan' => 'Himpunan Mahasiswa Daerah Asal Maluku dan Papua',
                'daerah' => 'Maluku dan Papua',
                'instagram' => 'https://instagram.com/mpc.stis',
                'island_id' => 5,
            ]
        ]);
    }
}
