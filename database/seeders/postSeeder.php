<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder; // Importa la clase Seeder

use App\Models\Post;  // Cambiado a "Post" con la primera letra en mayúscula
use App\Models\Image; // Asegúrate de importar también la clase Image

class postSeeder extends Seeder
{
    public function run()
    {
        $posts =  Post::factory(100)->create();  // Cambiado a "Post"

        foreach ($posts as $post) {
            Image::factory(1)->create([
                'imageable_id' => $post->id,
                'imageable_type' => Post::class,  // Cambiado a "Post"
            ]);
        }
    }
}
