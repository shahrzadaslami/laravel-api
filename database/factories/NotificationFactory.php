<?php

namespace Database\Factories;

use App\Models\Servers;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notification>
 */
class NotificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'servers_id'=>Servers::factory(),
            'title'=>$this->faker->text($maxNbChars = 50),
            'datetime'=>$this->faker->dateTimeThisYear(),
            'text'=>$this->faker->text($maxNbChars = 150),
        ];
    }
}
