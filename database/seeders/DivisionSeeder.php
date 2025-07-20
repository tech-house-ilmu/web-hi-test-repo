<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Division;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $divisions = ['Human Capital', 'Marketing', 'Business Development', 'Technology', 'CEO', 'Product Development'];

        foreach ($divisions as $division) {
            Division::create(['name' => $division,
                            'slug' => Str::slug($division),
        ]);
        }
    }
}
