<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories =[
            [
                'name' => 'celulares y tablets',
                'slug' => Str::slug('celulares y tablets'),
                'icon' => '<i class="fas fa-mobile-alt"></i>'
            ],
            [
                'name' => 'tv, audio y video',
                'slug' => Str::slug('tv, audio y video'),
                'icon' => '<i class="fas fa-tv"></i>'
            ],
            [
                'name' => 'consola y video juegos',
                'slug' => Str::slug('consola y video juegos'),
                'icon' => '<i class="fab fa-playstation"></i>'
            ],
            [
                'name' => 'computación',
                'slug' => Str::slug('computación'),
                'icon' => '<i class="fas fa-laptop"></i>'
            ],
            [
                'name' => 'moda',
                'slug' => Str::slug('moda'),
                'icon' => '<i class="fas fa-tshirt"></i>'
            ],
        ];
    }
}
