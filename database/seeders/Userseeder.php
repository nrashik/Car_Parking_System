<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([

        //     'name'=>'admin',
        //     'email'=>'ashik@gmail.com',
        //     'password'=>bcrypt('12345678'),

        // ]);
        
        User::create([

            'name'=>'admin2',
            'email'=>'ashik1@gmail.com',
            'password'=>bcrypt('12345678'),

        ]);

        User::create([

            'name'=>'admin1',
            'email'=>'ashik2@gmail.com',
            'password'=>bcrypt('12345678'),

        ]);
    }
}
