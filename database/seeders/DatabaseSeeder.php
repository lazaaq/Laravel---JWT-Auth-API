<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;

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

        User::create([
            'name' => 'Lana Saiful Aqil',
            'email' => 'lana@gmail.com',
            'password' => bcrypt('password'),
        ]);

        Admin::create([
            'name' => 'Lana Saiful Aqil',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
