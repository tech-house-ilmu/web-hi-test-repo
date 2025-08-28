<?php

namespace Database\Seeders;

use App\Models\HITCCCategory;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => ('tes123'),  // Gantilah dengan password yang aman
            // 'is_admin' => true, 
            // Misalnya kamu punya field 'is_admin' untuk menandai admin
        ]);

        $this->call([
        DivisionSeeder::class,
        HITCCCategorySeeder::class,
    ]);
    }
}
