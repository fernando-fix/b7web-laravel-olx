<?php

namespace Database\Seeders;

use App\Models\Advertisement;
use App\Models\AdvertisementImage;
use App\Models\Category;
use App\Models\State;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdvertisementImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            [
                'url' => 'game.webp',
                'advertisement_id' => Advertisement::all()->random()->id,
                'featured' => false,
            ],
            [
                'url' => 'game1.webp',
                'advertisement_id' => Advertisement::all()->random()->id,
                'featured' => false,
            ],
            [
                'url' => 'game2.webp',
                'advertisement_id' => Advertisement::all()->random()->id,
                'featured' => false,
            ],
            [
                'url' => 'game3.webp',
                'advertisement_id' => Advertisement::all()->random()->id,
                'featured' => false,
            ],
            [
                'url' => 'game4.webp',
                'advertisement_id' => Advertisement::all()->random()->id,
                'featured' => false,
            ],
            [
                'url' => 'game.webp',
                'advertisement_id' => Advertisement::all()->random()->id,
                'featured' => false,
            ],
            [
                'url' => 'game1.webp',
                'advertisement_id' => Advertisement::all()->random()->id,
                'featured' => false,
            ],
            [
                'url' => 'game2.webp',
                'advertisement_id' => Advertisement::all()->random()->id,
                'featured' => false,
            ],
            [
                'url' => 'game3.webp',
                'advertisement_id' => Advertisement::all()->random()->id,
                'featured' => false,
            ],
            [
                'url' => 'game4.webp',
                'advertisement_id' => Advertisement::all()->random()->id,
                'featured' => false,
            ],
        ];

        foreach ($images as $key => $data) {
            $image = AdvertisementImage::where('url', $data['url'])->first();
            if (!$image) {
                AdvertisementImage::create($data);
            }
        }

        $advertisements = Advertisement::all();
        foreach ($advertisements as $key => $advertisement) {
            $featuredImage = $advertisement->images->first();
            if ($featuredImage) {
                $featuredImage->update(['featured' => true]);
            } else {
                $image = AdvertisementImage::all()->random();
                AdvertisementImage::create([
                    'url' => $image['url'],
                    'advertisement_id' => $advertisement->id,
                    'featured' => true
                ]);
            }
        }
    }
}
