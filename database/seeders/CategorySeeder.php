<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Carros',
                'slug' => 'carros',
                'icon' => 'images/carro.png',
            ],
            [
                'name' => 'Eletrônicos',
                'slug' => 'eletronicos',
                'icon' => 'images/eletronicos.png',
            ],
            [
                'name' => 'Roupas',
                'slug' => 'roupas',
                'icon' => 'images/roupas.png',
            ],
            [
                'name' => 'Esportes',
                'slug' => 'esportes',
                'icon' => 'images/esporte.png',
            ],
            [
                'name' => 'Bebês',
                'slug' => 'bebes',
                'icon' => 'images/bebes.png',
            ],
        ];

        foreach ($categories as $key => $data) {
            $category = Category::where('slug', $key)->first();

            if (!$category) {
                Category::create($data);
            }
        }
    }
}
