<?php

namespace Database\Seeders;

use App\Models\DonationCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonationCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Elektronik',
            'Kendaraan',
            'Pakaian',
            'Makanan dan Minuman',
            'Rumah',
            'Jasa',
            'Hewan',
            'Hobi',
            'Lainnya'
        ];

        foreach ($categories as $category) {
            DonationCategory::firstOrCreate([
                'name' => $category,
            ]);
        }
    }
}
