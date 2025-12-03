<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'RTX 5090',
                'price' => 15999.00,
                'description' => 'Placa de vídeo de última geração.',
                'slug' => 'rtx-5090',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'AMD Ryzen 9',
                'price' => 4500.00,
                'description' => 'Processador topo de linha.',
                'slug' => 'amd-ryzen-9',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Monitor UltraWide',
                'price' => 2800.00,
                'description' => '34 polegadas, 144Hz.',
                'slug' => 'monitor-ultrawide',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'SSD NVMe 4TB',
                'price' => 1900.00,
                'description' => 'Velocidade e espaço em disco.',
                'slug' => 'ssd-nvme-4tb',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
