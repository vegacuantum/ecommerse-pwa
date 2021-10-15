<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories =[
            /*celulares y tables*/
           [
            'category_id' =>1,
            'name' => 'Celulates y smartphones',
            'slug' => Str::slug('Celulates y smartphones'),
            'color' => true
           ],
           [
            'category_id' =>1,
            'name' => 'Accesorios para celulares',
            'slug' => Str::slug('Accesorios para celulares'),
           ],
           [
            'category_id' =>1,
            'name' => 'Smartware',
            'slug' => Str::slug('Smartware'),
           ],

             /*tv y audio*/
             [
                'category_id' =>2,
                'name' => 'Tv y audio',
                'slug' => Str::slug('Tv y audio'),
            ],
            [
                'category_id' =>2,
                'name' => 'Audios',
                'slug' => Str::slug('Audios'),
            ],
            [
                'category_id' =>2,
                'name' => 'Audios para autos',
                'slug' => Str::slug('Audios para autos'),
            ],
            // consola y video juegos
            [
                'category_id' =>3,
                'name' => 'Xbox',
                'slug' => Str::slug('Xbox'),
            ],
            [
                'category_id' =>3,
                'name' => 'Play Station',
                'slug' => Str::slug('Play Station'),
            ],
            [
                'category_id' =>3,
                'name' => 'Videojuegos para pc',
                'slug' => Str::slug('Videojuegos para pc'),
            ],
            [
                'category_id' =>3,
                'name' => 'Nintendo',
                'slug' => Str::slug('Nintendo'),
            ],
            // computación'
            [
                'category_id' =>4,
                'name' => 'Portatiles',
                'slug' => Str::slug('Portatiles'),
            ],
            [
                'category_id' =>4,
                'name' => 'Pc escritorio',
                'slug' => Str::slug('Pc escritorio'),
            ],
            [
                'category_id' =>4,
                'name' => 'Almacenamiento',
                'slug' => Str::slug('Almacenamiento'),
            ],
            [
                'category_id' =>4,
                'name' => 'Accesorios computadoras',
                'slug' => Str::slug('Accesorios computadoras'),
            ],

            //moda
            [
                'category_id' =>5,
                'name' => 'Mujeres',
                'slug' => Str::slug('Mujeres'),
            ],
            [
                'category_id' =>5,
                'name' => 'Hombres',
                'slug' => Str::slug('Hombres'),
            ],
            [
                'category_id' =>5,
                'name' => 'Lentes',
                'slug' => Str::slug('Lentes'),
            ],
            [
                'category_id' =>5,
                'name' => 'relojes',
                'slug' => Str::slug('relojes'),
            ],

        ];

        foreach($subcategories as $subcategory){
            Subcategory::factory(1)->create($subcategory);
        }
    }
}
