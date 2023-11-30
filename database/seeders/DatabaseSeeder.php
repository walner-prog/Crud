<?php

namespace Database\Seeders;


use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Seeder;
use App\Models\Category;  // Cambiado a "Category" con la primera letra en mayúscula
use App\Models\Tag;       // Cambiado a "Tag" con la primera letra en mayúscula

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        storage::makeDirectory('posts');
        $this->call(Userseeder::class);
        // DatabaseSeeder.php
        Category::factory(6)->create();  // Cambiado a "Category"
        Tag::factory(8)->create();        // Cambiado a "Tag"
        $this->call(postSeeder::class);
    }
}
