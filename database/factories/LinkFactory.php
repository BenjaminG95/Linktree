<?php

namespace Database\Factories;

use App\Models\Link;

use App\Traits\Factories\HasUser;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Link>
 */
class LinkFactory extends Factory
{
    use HasUser;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = $this->getUser();

        return [
            'name' => fake()->company(),
            'link' => fake()->url(),
            'user_id' => $user->id,
        ];
    }
}
