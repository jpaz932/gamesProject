<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Game;

class GamesSeeder extends Seeder
{
    public function run()
    {
        // Crear algunas categorías
        Category::create(['name' => 'Aventura', 'description' => 'Juegos de aventura']);
        Category::create(['name' => 'Acción', 'description' => 'Juegos de acción']);

        // Crear algunos juegos
        Game::create([
            'title' => 'The Last of Us Part II',
            'description' => 'Un juego de acción y aventuras desarrollado por Naughty Dog y publicado por Sony Interactive Entertainment.',
            'image' => 'product-img/tlou2.png',
            'developer' => 'Naughty Dog',
            'release_date' => '2020-06-19',
            'price' => 59.99,
            'category_id' => 1
        ]);
        
        Game::create([
            'title' => 'Hellblade: Senua\'s Sacrifice',
            'description' => 'Un juego de aventuras psicológicas desarrollado y publicado por Ninja Theory.',
            'image' => 'product-img/hellblade.jpg',
            'developer' => 'Ninja Theory',
            'release_date' => '2017-08-08',
            'price' => 29.99,
            'category_id' => 1
        ]);

        Game::create([
            'title' => 'Grand Theft Auto V',
            'description' => 'Un juego de acción y aventuras desarrollado por Rockstar North y publicado por Rockstar Games.',
            'image' => 'product-img/gta5.jpg',
            'developer' => 'Rockstar North',
            'release_date' => '2013-09-17',
            'price' => 59.99,
            'category_id' => 2
        ]);

        Game::create([
            'title' => 'Call of Duty: Modern Warfare',
            'description' => 'Un juego de disparos en primera persona desarrollado por Infinity Ward.',
            'image' => 'product-img/cod.jpg',
            'developer' => 'Infinity Ward',
            'release_date' => '2019-10-25',
            'price' => 49.99,
            'category_id' => 2
        ]);
    }
}
