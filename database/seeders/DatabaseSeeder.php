<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        
        $user = [
            [
               'name'=>'Admin Translator',
               'username' => 'admin',
               'email'=>'admin@mail.com',
               'password'=> bcrypt('12345678'),
                'level'=>'Admin',
                'notelp'=>'08922',
            ],

        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
    
}
