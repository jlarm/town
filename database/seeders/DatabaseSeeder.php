<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Location;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories = Category::factory(5)->create();
        $locations = Location::factory(100)->create();

        $locations->each(function ($location) use ($categories) {
            $location->categories()->attach(
                $categories->random(random_int(1, 3))->pluck('id')
            );
        });
    }
}
