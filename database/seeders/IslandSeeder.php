<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Island;

class IslandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Island::insert([
            ['id' => 1, 'name' => 'Sumatera'],
            ['id' => 2, 'name' => 'Jawa'],
            ['id' => 3, 'name' => 'Kalimantan'],
            ['id' => 4, 'name' => 'Sulawesi'],
            ['id' => 5, 'name' => 'Papua dan Maluku'],
            ['id' => 6, 'name' => 'Bali dan Nusa Tenggara'],
        ]);
    }
}
