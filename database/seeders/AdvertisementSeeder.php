<?php

namespace Database\Seeders;

use App\Models\Advertisement;
use App\Models\Category;
use App\Models\State;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdvertisementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ads = [
            [
                'title' => 'Controle de Playstation 5',
                'slug' => 'controle-de-playstation-5',
                'price' => 275.00,
                'description' => 'Lorem ipsum dolor loret',
                'contact' => '15988888888',
                'user_id' => User::all()->random()->id,
                'state_id' => State::all()->random()->id,
                'category_id' => Category::all()->random()->id,
            ],
            [
                'title' => 'Controle de Xbox Series X',
                'slug' => 'controle-de-xbox-series-x',
                'price' => 320.50,
                'description' => 'Lorem ipsum dolor loret',
                'contact' => '15988888888',
                'user_id' => User::all()->random()->id,
                'state_id' => State::all()->random()->id,
                'category_id' => Category::all()->random()->id,
            ],
            [
                'title' => 'Playstation 5 - Digital edition',
                'slug' => 'playstation-5-digital-edition',
                'price' => 4999.99,
                'description' => 'Lorem ipsum dolor loret',
                'contact' => '15988888888',
                'user_id' => User::all()->random()->id,
                'state_id' => State::all()->random()->id,
                'category_id' => Category::all()->random()->id,
            ],
            [
                'title' => 'Controle Polystation 5',
                'slug' => 'controle-polystation-5',
                'price' => 88.99,
                'description' => 'Lorem ipsum dolor loret',
                'contact' => '15988888888',
                'user_id' => User::all()->random()->id,
                'state_id' => State::all()->random()->id,
                'category_id' => Category::all()->random()->id,
            ],
        ];

        foreach ($ads as $key => $data) {
            $ad = Advertisement::where('slug', $data['slug'])->first();
            if (!$ad) {
                Advertisement::create($data);
            }
        }

        
    }
}
