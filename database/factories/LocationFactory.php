<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\State;
use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

final class LocationFactory extends Factory
{
    protected $model = Location::class;

    public function definition(): array
    {
        return [
            'uuid' => $this->faker->uuid(),
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->text(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'state' => $this->faker->randomElement(State::cases()),
            'zip' => $this->faker->postcode(),
            'phone' => $this->faker->phoneNumber(),
            'url' => $this->faker->url(),
            'menu_url' => $this->faker->url(),
            'directions_url' => $this->faker->url(),
            'image' => $this->faker->word(),
            'status' => $this->faker->boolean(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
