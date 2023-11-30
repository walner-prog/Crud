<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
         
            'name' => 'carlos walner alvarez',
            'email' => 'ca140611@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
      User::factory(99)->create();

    }
}
