<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Servers>
 */
class ServersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    { 
        return [
            'title'=>$this->faker->url(),
            'description'=> $this->faker->text($maxNbChars = 150),
            'ip'=>$this->faker->ipv4(),
            'userName'=> $this->faker->company(),
            'password'=>$this->faker->password(),
            'sshPort'=> $this->faker->randomNumber(5, false),
            'state'=>$this->faker->randomElement(['active','inactive']),
        ];
    }
}
