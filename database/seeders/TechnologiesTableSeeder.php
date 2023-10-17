<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $technologies = ['Bootsrap', 'Tailwind', 'Bulma'];
        foreach ($technologies as $technology) {
            $new_tech = new Technology();
            $new_tech->name = $technology;
            $new_tech->slug = Str::slug($new_tech->name);
            $new_tech->save();
    }
    }
}
